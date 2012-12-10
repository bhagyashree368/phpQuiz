<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
$table = "quiz";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");

$name = $_POST['QuizName'];

$sql = "INSERT INTO $table (QuizName) VALUES ('$name')";
mysql_query ($sql) or die ('cannot insert to table quiz');

mysql_close ($connect);

echo 'Create successfuly Quiz: ' . $name;
?>
	<form id="form3" name="form3" method="post" action="ListQuiz.php">
	    <input type="submit" name="ListQuiz" value="List Quiz" />
	</form>
	
	<form id="form3" name="form3" method="post" action="Teacher.php">
	    <input type="submit" name="Back" value="Back" />
	</form>