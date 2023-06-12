<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email recipient and subject
    $to = 'dannerdata@gmail.com'; 
    $subject = 'New Message from Contact Form';

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo '<div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
              </div>';
    } else {
        // Error sending email
        echo '<div class="text-center text-danger mb-3">Error sending message!</div>';
    }
}
?>
