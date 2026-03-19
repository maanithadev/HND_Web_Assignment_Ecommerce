<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fname']);
    $emailAddress = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (empty($fullName) || empty($emailAddress) || empty($message)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!'); window.history.back();</script>";
        exit;
    }

    $to = "contact@lakshanflora.com";
    $subject = "Contact Form Submission";
    $headers = "From: $emailAddress\r\n";
    $headers .= "Reply-To: $emailAddress\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailBody = "You have received a new message from your website contact form.\n\n";
    $emailBody .= "Full Name: $fullName\n";
    $emailBody .= "Email Address: $emailAddress\n";
    $emailBody .= "Message:\n$message\n";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Sorry! Something went wrong. Please try again later.'); window.history.back();</script>";
    }
}
?>
