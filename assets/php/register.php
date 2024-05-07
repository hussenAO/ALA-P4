<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors = array();

    // Form validation: Ensure that the form is correctly filled
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    // connect to the database
    $con = new mysqli("localhost", "root", "", "login_sample_db");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } else {
        // Check if the username or email already exists
        $stmt = $con->prepare("SELECT * FROM users WHERE user_name = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            array_push($errors, "Username or email already exists");
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $con->prepare("INSERT INTO users (email, user_name, password, date) VALUES (?, ?, ?, NOW())");
            $stmt->bind_param("sss", $email, $username, $hashed_password);
            if ($stmt->execute()) {
                // Redirect to login.php
                header('Location: ../../html/login.php');
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }
}
?>
<script>
    <?php
    // Convert PHP array into JavaScript array
    $js_errors = json_encode($errors);
    echo "let errors = $js_errors;\n";
    ?>

    // Loop through the errors array and display an alert for each error
    errors.forEach(function(error) {
        alert(error);
    });
    
    // If there were any errors, redirect back to the registration page
    if (errors.length > 0) {
        window.location.href = '../../html/register.php';
    }
</script>