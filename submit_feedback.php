<?php
session_start();
include("feedConnection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedbackType = $_POST['feedbackType'];
    $message = $_POST['message'];
    $rating = isset($_POST['rating']) ? $_POST['rating'] : 'Not Provided';

    // Prepare and execute SQL statement to insert data into the database
    $stmt = $mysqli->prepare("INSERT INTO feedback (name, email, feedback_type, message, rating) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $feedbackType, $message, $rating);

    // Execute SQL statement to insert data into the database
    if ($stmt->execute()) {
        // Data inserted successfully, set feedback message
        $_SESSION['feedback_message'] = "Thank you for your feedback!";
    } else {
        // Error occurred, set error message
        $_SESSION['feedback_message'] = "Error: " . $mysqli->error;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $mysqli->close();

    // Redirect back to the form page or any other page
    header("Location: feedback.php");
    exit();
}
?>
