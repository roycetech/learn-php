<?php

include 'database.php';
session_start();

if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}

if (isset($_POST['submit'])) {
	
	
	$query_total = "select * from question";
	$result_total = $mysqli->query($query_total) or die($mysqli->error . __LINE__ );
	$total = $result_total->num_rows;
	
	
	$number = $_POST['number'];
	
	if (isset($_POST['choice'])) {
		$choice = $_POST['choice'];
	} else {
		$choice = 0;
	}

	$_SESSION['score']+= $choice;				
	if ($number == $total) { 
		header("Location: final.php");
		exit();
	} else {
		$next = $number + 1;
		header("Location: question.php?n=$next");
	}
	
	
	
}


