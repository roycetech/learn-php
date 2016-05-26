<?php

include 'database.php';

if (isset($_POST['submit'])) {
  
	$user = $mysqli->escape_string($_POST['user']);
	$message = $mysqli->escape_string($_POST['message']);
	
	date_default_timezone_set('Asia/Manila');
	$time = date('h:i:s a');

	$valid = isset($user) && $user != '' && isset($message) && $message != '';
	
	if ($valid) {
		$query = "INSERT INTO shout (USER, MESSAGE, time) VALUES ('$user', '$message', '$time')";		
		
		if ($mysqli->query($query)) {
			header('Location: index.php');
			exit();
		} else {
			die('Error: ' . $mysqli->error($con));
		}
	
	} else {
		$error = 'Please fill in your name and a message.';
		header('Location: index.php?error=' . urlencode($error));
		exit();
	}
}
