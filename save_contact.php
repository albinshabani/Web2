<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Function to read from a file
function readFileContents($filename) {
    $contents = '';
    $file = @fopen($filename, 'r');
    
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $contents .= $line;
        }
        fclose($file);
    } else {
        // Handle error
        echo "Error: Unable to open file $filename.";
        return false;
    }
    
    return $contents;
}

// Function to write to a file
function writeFileContents($filename, $contents) {
    $file = @fopen($filename, 'w');
    
    if ($file) {
        fwrite($file, $contents);
        fclose($file);
    } else {
        // Handle error
        echo "Error: Unable to write to file $filename.";
        return false;
    }
    
    return true;
}

// Check if the form data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $messageContent = $_POST['message'];

    // Read from a file
    $filename = 'example.txt';
    $fileContents = readFileContents($filename);

    if ($fileContents !== false) {
        echo "File Contents:\n$fileContents\n";
        
        // Write to a file
        $newContents = $fileContents . "\nNew contact form submission from $firstName $lastName.";
        if (writeFileContents($filename, $newContents)) {
            echo "Successfully wrote to the file.\n";
        }
    }

    // Send an email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'eronbberisha@gmail.com';
        $mail->Password = 'ktqy asqc dlgs qxvf'; // Use App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Recipients
        $mail->setFrom($email, $firstName . ' ' . $lastName);
        $mail->addAddress('eronbberisha@gmail.com'); // Replace with your recipient email
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission from ' . $firstName . ' ' . $lastName;
        $mail->Body = nl2br($messageContent); // Converts newlines to HTML line breaks
        
        $mail->send();
        echo 'Email sent successfully!';
        } catch (Exception $e) {
            echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
        }
        } else {
            echo "Invalid request method.";
        }
        ?>
        