<?php
// Replace with your email address
$receiving_email_address = 'kejing_yan@brown.edu';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Email content
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";

    // Send email
    if (mail($receiving_email_address, $subject, $email_body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send the message.';
    }
} else {
    echo 'Invalid request method.';
}
?>
