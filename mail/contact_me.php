<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

//  email and send the message
$to = 'karin@monkeymommacreations.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form:\n..", "Here are the details:\n.. Name: $name\r\n Email: $email_address\r\n Phone: $phone\r\n Message:\n.. $message";
$headers = "From: noreply@monkeymommacreations.com \r\n";

mail($to,$email_subject,$email_body,$headers);
return true;
?>
