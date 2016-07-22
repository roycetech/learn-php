<?php
	function call_google($answer ) {
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array('secret' => SECRET, 'response' => $answer);
		
		// use key 'http' even if you send the request to https://...
		$options = array(
				'http' => array(
						'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						'method'  => 'POST',
						'content' => http_build_query($data)
				)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
		return $result['success'];
	}

	if (isset($_POST['submit'])):
	
		include 'config.php';
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$captcha = $_POST['g-recaptcha-response'];
		
		if (call_google($captcha)) {
			$client_ip = $_SERVER['REMOTE_HOST'];
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
		} else {
			header("Location: contact.php?recaptcha=fail");				
		}
		
	endif		
?>
