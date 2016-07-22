<?php
	if (isset($_POST['submit'])):
	
		include 'config.php';
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$from = EMAIL_FROM;
		
 		$headers = "From: $from\r\n";
		$headers .= "Reply-To: $from";
		
		$result = '';
		if (mail(EMAIL_TO, "$name <$email> left a message on ryetech.xyz contact form", $message, $headers)) {
			$result = 'success';	
		} else {
			$result = 'error';
		}
		
		header("Location: contact.php?result=$result");	
	endif		
?>
