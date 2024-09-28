<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate and process form data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Example: Echoing the form data (in practice, you might send an email or store it in a database)
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
