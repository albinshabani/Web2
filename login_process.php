<?php
session_start();

// Include or require the file where the database connection is established
require_once "./database/db.php"; // Adjust the file path as per your project structure

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email and password are provided
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Retrieve email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and bind a statement to retrieve user data based on the provided email
        $stmt = $conn->prepare("SELECT email, password, first_name FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a row is returned
        if ($result->num_rows == 1) {
            // Fetch the row
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Authentication successful
                // Set user session variables
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
                $_SESSION['first_name'] = $row['first_name']; // Set the first name from the database

                // Redirect to a dashboard page or any other authenticated page
                header("Location: index.php");
                exit;
            } else {
                // Invalid password
                // Redirect back to the login page with an error message
                header("Location: login.php?error=invalid_credentials");
                exit;
            }
        } else {
            // Email not found
            // Redirect back to the login page with an error message
            header("Location: login.php?error=email_not_found");
            exit;
        }

        // Close the statement
        $stmt->close();
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
