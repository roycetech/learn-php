<?php 

include 'database.php';

$query = 'select * from shout order by id DESC';
$result = $mysqli->query($query);

?>
<!doctype>

<html>
<head>
<meta charset="utf-8" />
<title>Shout It!</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <header>
      <h1>Shout It! Shoutbox</h1>
    </header>

    <div id="shouts">
      <ul>
<?php while ($row = $result->fetch_assoc()): ?>   
        <li class="shout"><span><?=$row['TIME'] ?> - <strong><?=$row['USER'] ?></strong>>: <?=$row['MESSAGE'] ?></span></li>
<?php endwhile; ?>
      </ul>
    </div>

    <div id="input">
    
<?php if (isset($_GET['error'])) {?>
      <div class="error">
        <?= $_GET['error'] ?>
      </div>       	
<?php } ?>
      
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter your name" />
        <input type="text" name="message" placeholder="Enter a message" />
        <br>
        <input class="shout-btn" type="submit" name="submit" value="Shout it out" />
      </form>
    </div>

  </div>
</body>

</html>