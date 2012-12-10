	<a href = 'Teacher.php' >Home</a>
	<form id="form2" name="form2" method="post" action="FormQuiz.php">
	<input type="submit" name="CreateQuiz" value="Create Quiz" onclick = "form.action = 'FormQuiz.php'"/></br>
	<input type="submit" name="CreateQuiz" value="Back" onclick = "form.action = 'Teacher.php'"/>
	</form>
	
<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
$table = "quiz";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");

$result = mysql_query("SELECT * FROM $table WHERE 1");
	while($row = mysql_fetch_array($result))
	{
	    $NoQuiz = $row ['Q_ID'];
		static $No = 1;
		$QuizName = $row ['QuizName'];
?>

	    <form name = 'form4' method = 'post' action = 'ViewQuiz.php'>
		<?php
		if ($No < 10) echo '<b>0</b>';
		echo "<b>$No .</b>";
		$No++;
		echo "<button name = 'button' type = 'submit' value =  '$NoQuiz' >View</button>";
		echo "<span style = 'color:0000FF'><b>$QuizName</b></span></br>";
		?>
		</form>
<?php
	}
	
mysql_close ($connect);
?>