<?php

include 'config.php';

$mysqli = new mysqli('localhost', $dbusername, $dbpassword, 'quizzer');

if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL' . $mysqli->connect_error();
}
	