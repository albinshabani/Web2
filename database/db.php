<?php
// db.php

$servername = "localhost";
$username = "root";
$password = "13131313";
$dbname = "bizweb_academy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection established.<br>";
}
?>
