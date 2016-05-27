<?php

include 'database.php';

if (isset($_POST['submit'])) {
	echo "Submit was clicked!";
	
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	
	$correct_choice = $_POST['correct_choice'];

	$choices = array();
	$choices[] = $_POST['choice1'];
	$choices[] = $_POST['choice2'];
	$choices[] = $_POST['choice3'];
	$choices[] = $_POST['choice4'];
	$choices[] = $_POST['choice5'];
			
	$question_insert = "INSERT INTO QUESTION (question_number, 
		text) VALUES ($question_number, '$question_text')";

	$insert_question = $mysqli->query($question_insert) or die($mysqli->error.__LINE__);

	if ($insert_question) {
		
		foreach($choices as $choice => $value):
			
			if ($value != ''):
				if ($correct_choice - 1 === $choice) {
					$is_correct = 1;	
				} else {
					$is_correct = 0;						
				}
				
				$choice_insert_sql = "INSERT INTO choice (question_number, is_correct, text)
						VALUES ($question_number, $is_correct, '$value')";
				
				$insert_chocice = $mysqli->query($choice_insert_sql) or die($mysqli->error.__LINE__);
				
				if ($insert_chocice) {
					continue;					
				} else {
					die("Error: (" . $mysqli->errno . ') ' . $mysqli-> error);
				}				
			endif;
		endforeach;
		
		$msg = 'Question has been added.';
	}
}

$query_all = "select * from question";
$result_all = $mysqli->query($query_all) or die($mysqli->error . __LINE__ );
$result_total = $result_all->num_rows;
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
    <h2>Add a Question</h2>
    <?php 
    	if (isset($msg)) {
    		echo "<p>" . $msg . "</p>"; 
    	}
    ?>
    <form method="post" action="add.php">
      <p>
        <label>Question Number: </label> <input type="number"
          name="question_number" value="<?= $result_total + 1 ?>"/>
      </p>
      <p>
        <label>Question Text: </label> <input type="text"
          name="question_text" />
      </p>
      <p>
        <label>Choice #1: </label> <input type="text"
          name="choice1" />
      </p>
      <p>
        <label>Choice #2: </label> <input type="text"
          name="choice2" />
      </p>
      <p>
        <label>Choice #3: </label> <input type="text"
          name="choice3" />
      </p>
      <p>
        <label>Choice #4: </label> <input type="text"
          name="choice4" /> 
      </p>
      <p>
        <label>Choice #5: </label> <input type="text"
          name="choice5" /> 
      </p>
      <p>
        <label>Correct Choice Number: </label> <input type="number"
          name="correct_choice" />
      </p>
      <input type="submit" name="submit" value="Submit"/>

    </form>
  </div>
  </main>

  <footer>
    <div class="container">Copyright &copy; 2016, PHP Quizzer</div>
  </footer>

</body>
</html>


