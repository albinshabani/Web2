<?php
function sendEmail($to, $subject, $message, $headers) {
    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
