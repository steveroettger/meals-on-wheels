<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "steve@steveroettger.com";
$subject = "City Fare Contact Submission || " . $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// Forward to "Thank You" page
header('Location: ' . 'http://mow.aboutverge.com/site/contact-form-submitted.php');
exit;
?>
