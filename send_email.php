<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email recipient
    $to = 'your-email@example.com';

    // Subject
    $subject = "New Contact Form Submission from $name";

    // Email Body
    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n\n".
            "Name: $name\n\n".
            "Email: $email\n\n".
            "Message:\n$message\n";

    // Headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send Email
    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
