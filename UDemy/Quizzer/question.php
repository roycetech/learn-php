<?php 

session_start();

include 'database.php';

$question_number = $_GET['n'];

$query = "select * from question where question_number = $question_number";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__ );
$question = $result->fetch_assoc();


$query_choice = "select * from choice where question_number = $question_number";
$result_choice = $mysqli->query($query_choice) or die($mysqli->error . __LINE__);

$query_total = "select * from question";
$result_total = $mysqli->query($query_total) or die($mysqli->error . __LINE__ );
$total = $result_total->num_rows;


?>


<!doctype html>

<html>
<head>
<meta charset="utf-8" />
</head>
<title>PHP Quizzer</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<body>
  <header>
    <div class="container">
      <h1>PHP Quizzer</h1>
    </div>

    <main>
    <div class="container">
      <div class="current">Question <?= $question_number ?> of <?= $total ?></div>
      <p class="question">
      <?= $question['text'] ?>
      </p>
      <form method="post" action="process.php">
        <ul class="choices">
        <?php while ($row = $result_choice->fetch_assoc()) { ?>
          <li><input name="choice" type="radio" value="<?= $row['is_correct'] ?>"><?= $row['text'] ?></li>
        <?php } ?>
        </ul>
        <input name="submit" type="submit" value="Submit" />
        <input type="hidden" name="number" value="<?= $_GET['n'] ?>" />
      </form>
    </div>
    </main>
  </header>

  <footer>
    <div class="container">Copyright &copy; 2016, PHP Quizzer</div>
  </footer>

</body>
</html>


