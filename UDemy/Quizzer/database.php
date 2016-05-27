<?php

include 'config.php';

$mysqli = new mysqli('localhost', $dbusername, $dbpassword, 'quizzer');

if ($mysqli->connect_errno) {
	printf ("Connect failed %s\n", $mysqli->connect_error());
	exit();
}
	