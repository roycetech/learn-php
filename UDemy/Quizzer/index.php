<?php 

include 'database.php';
session_start();
$_SESSION['score'] = 0;


$query_all = "select * from question";
$result_total = $mysqli->query($query_all) or die($mysqli->error . __LINE__ );
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
      <h2>Test Your PHP Knowledge</h2>
      <p>This is a multiple choice quiz to test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of questions: </strong><?= $total ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong><?= $total * 0.5 ?> Minute(s)</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
    </main>
  </header>

  <footer>
    <div class="container">Copyright &copy; 2016, PHP Quizzer</div>
  </footer>

</body>
</html>


