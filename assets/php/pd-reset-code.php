<?php 
session_start();
include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = '6035835.mbo@gmail.com';
    $mail->Password = 'bzoj izfr rkcb uiwp';

    $mail->setFrom('6035835.mbo@gmail.com', $get_name); 
    $mail->addAddress($get_email);

    $mail->isHTML(true);
    $mail->Subject = 'wachtwoord veranderen';

    $email_template = "
    <h2>wachtwoord veranderen</h2>
    <p>je krijgt deze email omdat wij een wachtwoord reset verzoek kregen van jouw account.</p>
    <br>
    <a href='http://localhost/school/projecten/OGF/OGF%20eindresults/ALA-P4/html/password-change.php?token=$token&email=$get_email'>Reset Password</a>";

    $mail->Body = $email_template;
    $mail->send();
}

if(isset($_POST['reset-password'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());


    $check_email = "SELECT * FROM users WHERE email = '$email' limit 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($check_email_run) > 0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['user_name'];
        $get_email = $row['email'];

        $update_token = "UPDATE users SET reset_token_hash= '$token' WHERE email = '$get_email'limit 1";
        $update_token_run = mysqli_query($conn, $update_token);

        if($update_token_run){
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "email is verzonden.";
            header('Location: ../../html/password-reset.php');
            exit(0);
        }
        else{
            $_SESSION['status'] = "Token niet aangemaakt";
            header('Location: ../../html/password-reset.php');
            exit(0);
        }
    }
    else{
        $_SESSION['status'] = "Email niet gevonden";
        header('Location: ../../html/password-reset.php');
        exit(0);
    }
}


if(isset($_POST['change-password'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $token = mysqli_real_escape_string($conn, $_POST['password_token']);

    if(!empty($token)){
        if(!empty($email) && !empty($new_password) && !empty($confirm_password)){
            $check_token = "SELECT * FROM users WHERE reset_token_hash = '$token' limit 1";
            $check_token_run = mysqli_query($conn, $check_token);
            
            if(mysqli_num_rows($check_token_run) > 0){
                if($new_password == $confirm_password){
                    // Hash the new password
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    $update_password = "UPDATE users SET password = '$hashed_password' WHERE reset_token_hash = '$token' limit 1";
                    $update_password_run = mysqli_query($conn, $update_password);

                    if($update_password_run){
                        $new_token = md5(rand())."funda";
                        $update_to_new_token = "UPDATE users SET reset_token_hash = '$new_token' WHERE reset_token_hash = '$token' limit 1";
                        $update_to_new_token_run = mysqli_query($conn, $update_to_new_token);
    

                        $_SESSION['status'] = "wachtwoord is veranderd";
                        header('Location: ../../html/login.php');
                        exit(0);
                    }
                    else{
                        $_SESSION['status'] = "wachtwoord niet veranderd";
                        header('Location: ../../html/password-change.php?token='.$token.'&email='.$email);
                        exit(0);
                    }
                    
               }
                else{
                     $_SESSION['status'] = "wachtwoorden komen niet overeen";
                    header('Location: ../../html/password-change.php?token=' . $token . '&email=' . $email);
                     exit(0);
                }
        }
        else{
            $_SESSION['status'] = "email vervallen";
            header('Location: ../../html/password-change.php?token=' . $token . '&email=' . $email);
            exit(0);
        }

    }else{
            $_SESSION['status'] = "vul alle velden in";
            header('Location: ../../html/password-change.php?token=' . $token . '&email=' . $email);
            exit(0);
        }
    }
    else{
        $_SESSION['status'] = "token niet gevonden";
        header('Location: ../../html/password-reset.php');
        exit(0);
    }
}

