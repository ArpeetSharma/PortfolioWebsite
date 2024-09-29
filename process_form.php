<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the email details
    $to = "arpeet047@gmail.com";  // Replace with your email
    $subject = "New Feedback from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Sorry, there was an issue sending your feedback. Please try again.";
    }
}
?>
