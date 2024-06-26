<?php
// Include custom error handler definition
require_once 'custom_error_handler.php'; // Adjust the path to where your custom error handler is defined

// Set the custom error handler
set_error_handler("customErrorHandler");

session_start();

// Include or require the file where the database connection is established
require_once "./database/db.php"; // Adjust the file path as per your project structure

// Function to return a reference to a session variable
function &getSessionReference($key) {
    return $_SESSION[$key];
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Perform form validation
        if ($password !== $confirm_password) {
            // If passwords do not match, redirect back to sign-up page with an error message
            header("Location: sign_up.php?error=password_mismatch");
            exit;
        }

        // You can add more form validation here (e.g., check if email is valid)

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            // Trigger an error if statement preparation fails
            trigger_error("Database prepare statement failed: " . $conn->error, E_USER_ERROR);
        }
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Set session variables using references
            $sessionFirstName = &getSessionReference('first_name');
            $sessionLastName = &getSessionReference('last_name');
            $sessionEmail = &getSessionReference('email');
            $sessionRegistered = &getSessionReference('registered');

            $sessionFirstName = $first_name;
            $sessionLastName = $last_name;
            $sessionEmail = $email;
            $sessionRegistered = true;

            // Example of passing by reference
            function updateSessionVariable(&$variable, $value) {
                $variable = $value;
            }

            updateSessionVariable($_SESSION['last_name'], $last_name);

            // Redirect to a dashboard page or any other page
            header("Location: index.php");
            exit;
        } else {
            // Trigger an error if execution fails
            trigger_error("Database execution failed: " . $stmt->error, E_USER_ERROR);
        }

        // Unset sensitive data
        unset($_POST['password']);
        unset($_POST['confirm_password']);

        // Close the statement
        $stmt->close();
    } else {
        // If required fields are not provided, redirect back to the sign-up page with an error message
        header("Location: sign_up.php?error=missing_fields");
        exit;
    }
} else {
    // If the form is not submitted, redirect back to the sign-up page
    header("Location: sign_up.php");
    exit;
}
?>
