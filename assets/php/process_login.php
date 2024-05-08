<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// connect to the database
$con = new mysqli("localhost", "root", "", "login_sample_db");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if (password_verify($password, $data['password'])) {
            // Password is correct
            // Set last activity time stamp
            $_SESSION['last_activity'] = time();
           
             // Set loggedin status
    $_SESSION['loggedin'] = true;

            // Redirect to index.php
            header('Location: ../../index.php');
            exit;
        } else {
            $_SESSION['error'] = "Incorrect password";
            header('Location: ../../html/login.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "Incorrect username";
        header('Location: ../../html/login.php');
        exit;
    }
}
?>