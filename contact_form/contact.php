<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title>Test Contact Form</title>
</head>

<body>

<?php
	if (isset($_GET['result'])) {
		$result = $_GET['result'];
		print("Submssion result: $result");		
	}
?>

  <form method="post" action="submit.php">
    <label for="name">Name: </label>
    <input type="text" name="name" />

    <div class="form-group">
      <label for="email">Email: </label>
      <input type="email" name="email" />
    </div>

    <div class="form-group">
      <textarea name="message" rows="3"></textarea>
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>

</body>

</html>
