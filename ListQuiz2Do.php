<a href = 'Student.php' >Home</a>
<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");

$result = mysql_query("SELECT * FROM quiz WHERE 1");
	while($row = mysql_fetch_array($result))
	{
	    $NoQuiz = $row ['Q_ID'];
		static $No = 1;
		$QuizName = $row ['QuizName'];
        echo "<form method = 'post' action = 'DoQuiz.php'>";
		if ($No < 10) echo '<b>0</b>';
		
		echo "<b>$No .</b>";
		$No++;
		echo "<input name = 'hidden1' type = 'hidden' value =  '$NoQuiz' />";
		echo "<input name = 'hidden2' type = 'hidden' value =  '$QuizName' />";
		echo "<input name = 'submit' type = 'submit' value = 'Start do Quiz'/>";
		echo "<span style = 'color:0000FF'><b>$QuizName</b></span></br>";
		echo "</form>";
	} // end while
?>		