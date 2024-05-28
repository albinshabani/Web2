<?php
// Include the database connection
include_once('db.php');

// Check if connection is still open
if ($conn->ping()) {
    echo "Connection is active.<br>";
} else {
    die("Connection is not active.<br>");
}

// Prepare a select statement
$sql = "SELECT user_id, first_name, last_name, email, created_at, updated_at FROM users";

// Execute the query
if ($result = $conn->query($sql)) {
    // Check if query execution was successful
    echo "Query executed successfully.<br>";

    // Process the result set
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
        echo "0 results.<br>";
    }

    // Free the result set
    $result->free();
} else {
    die("Query failed: " . $conn->error);
}

// Close connection
echo "Closing connection.<br>";
$conn->close();
?>
