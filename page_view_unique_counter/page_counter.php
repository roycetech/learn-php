<?php
include 'config.php';


// $host = "localhost";
$pagename = 'homepage';
$user_ip = $_SERVER ['REMOTE_ADDR'];

$mysqli = new mysqli ( $host, $dbusername, $dbpassword, $databasename );

if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySql/MariaDB' . $mysqli->connect_error;
} else {
	$query = "select userip from pageview where page='$pagename'";
	
	$result = $mysqli->query($query);
	$rows = $result->fetch_assoc();
	if (!$rows) {
		
		$insertPageSql = "insert into pageview (page, userip, created_at) values('$pagename', '$user_ip', now())";
		$mysqli->query($insertPageSql);
	}		
}
?>

<html>
<head>
</head>

<body>
  	<?php
		$total_query = "select totalvisit from totalview where page='$pagename'";  		
  		$total_view_row = $mysqli->query($total_query)->fetch_object();
  		
  		if ($total_view_row) {
  			$total_count = $total_view_row->totalvisit + 1;
	  		$total_update_query = "update totalview set totalvisit = $total_count";
	  		$mysqli->query("update pageview set modified_at = now() where userip = '$user_ip' and page='$pagename'");
	  			  		
	  		$mysqli->query($total_update_query);
	  		
  		} else {
  			$total_count = 1;
  			$total_insert_query = "insert into totalview (page, totalvisit) values ('$pagename','$total_count')";
	  		$mysqli->query($total_insert_query);
  		}
	?>

  <p>This page is viewed <?= $total_count ?> time<?= ($total_count > 1 ? 's' : '') ?>.</p>

</body>
</html>