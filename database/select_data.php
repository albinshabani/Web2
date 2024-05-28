<?php
include_once('db.php');

// Prepare a select statement
$sql = "SELECT user_id, first_name, last_name, email, created_at, updated_at FROM users";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "User ID: " . $row["user_id"] . "<br>";
        echo "Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Created At: " . $row["created_at"] . "<br>";
        echo "Updated At: " . $row["updated_at"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
