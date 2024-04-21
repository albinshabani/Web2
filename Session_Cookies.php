<?php
// Start session
session_start();

// Check if 'visits' session variable is set
if(isset($_SESSION['visits'])) {
    $_SESSION['visits']++;
} else {
    $_SESSION['visits'] = 1;
}

// Set background color based on cookie
$backgroundColor = isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? '#333' : '#fff';
$textColor = isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? '#fff' : '#333';

// Function to greet user
function greetUser() {
    if(isset($_SESSION['username'])) {
        echo "Hello, ".$_SESSION['username']."!";
    } else {
        echo "Hello, guest!";
    }
}

// Check if 'user' cookie is set
if(isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
    $message = "Welcome back, $user!";
} else {
    $message = "Welcome, new user!";
}

// Check if form is submitted to set cookie
if(isset($_POST['background'])) {
    // Set cookie for background color
    setcookie('background', $_POST['background'], time() + 3600);
    // Refresh page to reflect changes
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Check if form is submitted to set username
if(isset($_POST['username'])) {
    // Store username in session variable
    $_SESSION['username'] = $_POST['username'];
    // Refresh page to reflect changes
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie and Session Demo</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <p><?php greetUser(); ?></p>
    <p>You have visited this page <?php echo $_SESSION['visits']; ?> times.</p>
    <h2>Change Background</h2>
    <form method="post">
        <label><input type="radio" name="background" value="light" <?php echo isset($_COOKIE['background']) && $_COOKIE['background'] == 'light' ? 'checked' : ''; ?>> Light</label>
        <label><input type="radio" name="background" value="dark" <?php echo isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? 'checked' : ''; ?>> Dark</label>
        <button type="submit">Save</button>
    </form>
    <h2>Set Username</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <button type="submit">Set Username</button>
    </form>
</body>
</html>
