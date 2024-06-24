<?php
$servername = "sql308.infinityfree.com";
$username = "if0_36759792";
$password = "bo6kFZikZN";
$dbname = "if0_36759792_sample_db";

// Create connection
$conn = new mysqli("sql308.infinityfree.com", "if0_36759792", "bo6kFZikZN", "if0_36759792_sample_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>