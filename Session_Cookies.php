<?php
// Start session
session_start();

// Function to increment visit count
function incrementVisits() {
    if(isset($_SESSION['visits'])) {
        $_SESSION['visits']++;
    } else {
        $_SESSION['visits'] = 1;
    }
}

// Function to set background color
function setBackgroundColor() {
    return isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? '#333' : '#fff';
}

// Function to set text color
function setTextColor() {
    return isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? '#fff' : '#333';
}

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
    exit; // Exit without refreshing the page
}

// Check if form is submitted to set username
if(isset($_POST['username'])) {
    // Store username in session variable
    $_SESSION['username'] = $_POST['username'];
    // Close the modal after setting the username
    exit;
}

// Function to create JavaScript pop-up
function createPopup($content) {
    echo "<script>alert('$content');</script>";
}

// Increment visit count
incrementVisits();

// Check if admin credentials match
$admin = [
    'firstName' => 'Eron',
    'lastName' => 'Berisha',
    'email' => 'eronbberisha@gmail.com'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];

    if ($firstName === $admin['firstName'] && $lastName === $admin['lastName'] && $email === $admin['email']) {
        createPopup("Welcome Admin!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie and Session Demo</title>
    <style>
        /* Style for the modal background */
        .modal-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it's above other content */
        }
        
        /* Style for the modal content */
        .modal-content {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 80%;
            position: relative; /* Added */
            text-align: center;
        }

        /* Style for the close button */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        /* Style for the buttons */
        button {
            background-color: #4b86b4; /* Colder color */
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #3a6f9c; /* Darker shade of the colder color */
        }

        /* Style for the radio buttons */
        input[type="radio"] {
            margin-right: 5px;
        }

        /* Style for the input field */
        input[type="text"] {
            width: calc(100% - 26px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
    </style>
</head>
<body>
    <!-- Modal background -->
    <div class="modal-background" id="modalBackground">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span> <!-- Close button -->
            <h1><?php echo $message; ?></h1>
            <p><?php greetUser(); ?></p>
            <p>You have visited this page <?php echo $_SESSION['visits']; ?> times.</p>
            <h2>Change Background</h2>
            <form id="backgroundForm" method="post">
                <label><input type="radio" name="background" value="light" <?php echo isset($_COOKIE['background']) && $_COOKIE['background'] == 'light' ? 'checked' : ''; ?>> Light</label>
                <label><input type="radio" name="background" value="dark" <?php echo isset($_COOKIE['background']) && $_COOKIE['background'] == 'dark' ? 'checked' : ''; ?>> Dark</label><br>
                <button type="button" onclick="changeTheme()">Save</button>
            </form>
            <h2>Set Username</h2>
            <form id="usernameForm" method="post">
                <input type="text" name="username" placeholder="Enter your username">
                <button type="submit">Set Username</button>
            </form>
        </div>
    </div>

    <script>
        // Display the modal on page load
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("modalBackground").style.display = "flex";
        });

        // Function to close the modal
        function closeModal() {
            document.getElementById("modalBackground").style.display = "none";
        }

        // Function to change theme without refreshing
        function changeTheme() {
            var xhr = new XMLHttpRequest();
            var form = document.getElementById("backgroundForm");
            var formData = new FormData(form);
            xhr.open("POST", window.location.href, true);
            xhr.send(formData);
        }

        // Close modal after setting username
        document.getElementById("usernameForm").addEventListener("submit", function() {
            var xhr = new XMLHttpRequest();
            var form = document.getElementById("usernameForm");
            var formData = new FormData(form);
            xhr.open("POST", window.location.href, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    closeModal();
                }
            };
            xhr.send(formData);
            event.preventDefault();
        });
    </script>
</body>
</html>
