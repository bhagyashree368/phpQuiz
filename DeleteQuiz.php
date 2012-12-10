<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$database = "se5";

$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$database") or die ("Cannot access database");

$NoQuiz = $_POST['hidden1'];
$NameQuiz = $_POST['hidden2'];

// Delete Quiz from table quiz
$sql = "DELETE FROM quiz WHERE Q_ID = $NoQuiz";
mysql_query ($sql) or die ('cannot delete  ' .$NameQuiz . 'on table Quiz');

// Delete Quiz from table question
$sql2 = "DELETE FROM question WHERE Q_ID = $NoQuiz";
mysql_query ($sql2) or die ('cannot delete ' .$NameQuiz . 'on table Question');
// Notice Delete successfuly
echo "Delete $NameQuiz successfuly!";
mysql_close($connect);
?>
<form method = 'post' action = 'ListQuiz.php'>
<input type = 'submit' name = 'submit' value = 'Back to List Quiz'/>
</form>