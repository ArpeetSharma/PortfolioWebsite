<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $to = "arpeet047@gmail.com";  // Replace with your email address
    $subject = "Feedback Form Submission";
    $message = "Name: $name\nEmail: $email\nFeedback: $feedback";
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
      echo "Feedback submitted successfully!";
    } else {
      echo "Error in sending feedback.";
    }
  }
?>
