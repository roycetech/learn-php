
<?php
$mysqli = new mysqli('localhost', $dbusername, $dbpassword, 'shoutit');

// $con  = mysqli_connect('localhost', 'root', 'qe9fUrDdSqPS6WzH', 'shoutit');

if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL' . $mysqli->connect_error();
}
	