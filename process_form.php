<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Email recipient
    $to = "mercyoyewole48@gmail.com";
    // Email subject
    $subject = "New Form Submission";

    // Email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "The message I want to tell them is that they should try and do their best."; 

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit;
}
?>