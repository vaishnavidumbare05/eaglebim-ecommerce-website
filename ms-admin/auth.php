<?php
session_start(); // Start the session

// Set session timeout duration (in seconds)
$timeout_duration = 3000; // 5 minutes (300 seconds)

// Check if the user is logged in by checking if the session variable 'user_id' is set
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Ensure the script stops here
}

// Check if the session has expired due to inactivity
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    // If the session has expired, destroy the session and redirect to login page
    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to the login page
    exit(); // Ensure the script stops here
}

// Update the last activity time to the current time
$_SESSION['last_activity'] = time();
?>
