<?php
include_once('db.php');

// Data to be inserted into the database
$first_name = "Albin";
$last_name = "Shabani";
$email = "albinshabani@gmail.com";
$password = password_hash("albin123", PASSWORD_DEFAULT); // Example of hashing the password
$created_at = date('Y-m-d H:i:s'); // Current date and time

// SQL query to insert data into the users table
$sql = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('$first_name', '$last_name', '$email', '$password', '$created_at')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
