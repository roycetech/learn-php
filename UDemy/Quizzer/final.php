<?php 
	session_start();
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
    </header>

    <main>
    <div class="container">
    <h2>You're done!</h2>
    <p>Congratulations! You have completed the test</p>
    <p>Final Score: <?= $_SESSION['score'] ?></p>
    <a href="question.php?n=1" class="start">Take again</a>
    </div>
    </main>

  <footer>
    <div class="container">Copyright &copy; 2016, PHP Quizzer</div>
  </footer>

</body>
</html>

<?php 
  $_SESSION['score'] = 0;

