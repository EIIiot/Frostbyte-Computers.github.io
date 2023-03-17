<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email
$to = 'computersfrostbyte@gmail.com';
$subject = 'New form submission';
$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
$message = 'Name: ' . $name . "\n\n" .
           'Email: ' . $email . "\n\n" .
           'Message: ' . $message;

// Send email
mail($to, $subject, $message, $headers);

// Redirect to thank you page
header('Location: thankyou.html');
exit;
?>
