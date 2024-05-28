<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email and password are provided
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Retrieve email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // You would typically validate the email and password against your database here
        // For demonstration purposes, let's assume valid credentials are hardcoded
        $valid_email = "user@example.com";
        $valid_password = "password123";

        // Check if the provided credentials match the valid credentials
        if ($email === $valid_email && $password === $valid_password) {
            // Authentication successful
            // Set user session variables or perform any other actions (e.g., redirecting to a dashboard page)
            $_SESSION['email'] = $email;
            $_SESSION['logged_in'] = true;

            // Redirect to a dashboard page or any other authenticated page
            header("Location: index.php");
            exit;
        } else {
            // Invalid credentials
            // Redirect back to the login page with an error message
            header("Location: login.php?error=invalid_credentials");
            exit;
        }
    } else {
        // Redirect back to the login page if email or password is not provided
        header("Location: login.php?error=missing_fields");
        exit;
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.php");
    exit;
}
?>
