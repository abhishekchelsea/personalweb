<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate form data (you can add additional validation if needed)

    // Prepare email content
    $to = 'ka8368145@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message: $message\n";

    // Send email
    $headers = "From: $name <$email>";
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo 'Email sent successfully.';
    } else {
        // Error sending email
        echo 'An error occurred while sending the email.';
    }
} else {
    // Handle non-POST requests (optional)
    echo 'Invalid request.';
}
?>
