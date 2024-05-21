<?php
// Database configuration
$host = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "feedback_db"; // Database name

// Create database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check database connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
