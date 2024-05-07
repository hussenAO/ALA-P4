<?php
// Start the session
session_start();

// Include your database connection file
include 'db.php';

// Get the submitted comment from the form
$comment = $_POST['comment'];

// Get the username from the form
$username = $_POST['username'];

// Get the star rating from the form
$rating = $_POST['rating'];

// Create a prepared statement to insert the comment and the rating into the database
$stmt = $conn->prepare("INSERT INTO comments (username, comment, rating) VALUES (?, ?, ?)");

// Bind the values to the prepared statement
$stmt->bind_param("ssi", $username, $comment, $rating);

// Execute the prepared statement
$stmt->execute();

// Close the prepared statement
$stmt->close();

// Redirect back to the page
header('Location: ../../html/eddie.php');
?>