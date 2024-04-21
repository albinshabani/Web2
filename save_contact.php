<?php

$admin = [
    'firstName' => 'Eron',
    'lastName' => 'Berisha',
    'email' => 'eronbberisha@gmail.com'
];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $message = $_POST['message'];

    // Check if email contains '@' and '.com'
    if (!strpos($email, '@') || !strpos($email, '.com')) {
        // If email does not contain '@' or '.com', redirect back to the contact form with an error message
        header("Location: contact.php?status=error&field=email&message=Invalid email format");
        exit;
    }

    // Check if the submitted credentials match the admin credentials
    if ($firstName === $admin['firstName'] && $lastName === $admin['lastName'] && $email === $admin['email']) {
        // Redirect back to the contact form with a success message
        header("Location: contact.php?status=admin_success");
        exit;
    } else {
        // Redirect back to the contact form with a success message
        header("Location: contact.php?status=success");
        exit;
    }
} else {
    // If the form is not submitted, redirect back to the contact form
    header("Location: contact.php");
    exit;
}
?>
