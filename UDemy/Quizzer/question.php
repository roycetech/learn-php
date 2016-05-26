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
      <div class="current">Question 1 of 5</div>
      <p class="question">
        What does PHP stand for?
      </p>
      <form method="post" action="process.php">
        <ul class="choices">
          <li><input name="choice" type="radio" value="1">PHP: Hypertext Preprocessor</li>
          <li><input name="choice" type="radio" value="1">Prvate Home Page</li>
          <li><input name="choice" type="radio" value="1">Personal Home Page</li>
          <li><input name="choice" type="radio" value="1">Personal Hypertext Preprocessor</li>
        </ul>
        <input type="submit" value="submit" />
      </form>
    </div>
    </main>
  </header>

  <footer>
    <div class="container">Copyright &copy; 2016, PHP Quizzer</div>
  </footer>

</body>
</html>


