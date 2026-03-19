<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zipCode = htmlspecialchars($_POST['zipcode']);

    $to = "lakshanflora@gmail.com";
    $subject = "New Checkout Form Submission";
    $message = "Full Name: $fullName\n" .
               "Email: $email\n" .
               "Address: $address\n" .
               "City: $city\n" .
               "State: $state\n" .
               "Zip Code: $zipCode\n";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "New order Received";
    } else {
        echo "Sorry, there was an error sending the message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
