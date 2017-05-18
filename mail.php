<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$check = $_POST['check'];
$formcontent="From: $name \n Message: $message \n Check: $check";
$recipient = "edl1155@gmail.com";
$subject = "Message from Potential Body Story Coaching Client";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! I'll get back to you shortly.";
?>