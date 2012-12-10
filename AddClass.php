<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
$table = "class";
$connect = mysql_connect ("$host", "$username", "$password") or die (mysql_error());
mysql_select_db ("$db") or die ("Cannot access database");

$name = $_POST['text1'];
require 'getRandomString.php';
$secure = getRandomString();
echo "Security code of Clas is: <b>$secure</b></br>";

$sql = "INSERT INTO $table (ClassName, secure) VALUES ('$name', '$secure')";
mysql_query ($sql) or die (mysql_error());

mysql_close ($connect);

echo "Create successfuly Class: <b>$name</b>";
?>
	<form id="form3" name="form3" method="post" action="ListClass.php">
	    <input type="submit" name="ListQuiz" value="List Class" />
	</form>
	
	<form id="form3" name="form3" method="post" action="Teacher.php">
	    <input type="submit" name="Back" value="Back" />
	</form>