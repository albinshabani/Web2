<?php
$db_host = 'localhost'; // or the actual host name if different
$db_user = 'root'; // or the username you see in phpMyAdmin
$db_password = '12345678'; // No password for MySQL root user by default
$db_name = 'bizweb_academy';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>
