<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "login_sample_db";

// Create connection
$conn = new mysqli("localhost", "root", "", "login_sample_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>