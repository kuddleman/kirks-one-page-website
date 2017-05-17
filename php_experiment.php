<?php

if ($_POST['sub_btn']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} else {
		mail("edl1155@gmail.com, donny@themissingthread.com", "Potential Client from KirkPrine.com!", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
		Message: ".$_POST['message']);
		
		{
		$result='Thanks, I\'ll be in touch shortly';
		}
	}


}

?>




<?php   
        if (isset($POST["submit"])) {
       $name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = $_POST['human'];
		$from = 'Demo Contact Form'; 
		$to = 'edl1155@gmail.com'; 
		$subject = 'Message from Potential Body Story Life Coaching Client ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
		
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again, or use the email and/or telephone number below.</div>';
	}
}

		}

?>
