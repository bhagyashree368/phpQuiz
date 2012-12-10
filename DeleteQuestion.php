<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$database = "se5";

$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$database") or die ("Cannot access database");

$NoQuestion = $_POST['hidden1'];
//$NameQuiz = $_POST['hidden2'];

// Delete Quiz from table question
$sql = "DELETE FROM question WHERE A_ID = $NoQuestion";
mysql_query ($sql) or die ('cannot delete Question');
// Notice Delete successfuly
echo "Delete question successfuly!";
mysql_close($connect);
?>
<form method = 'post' action = 'ListQuiz.php'>
<input type = 'submit' name = 'submit' value = 'Back to List Quiz'/>
</form>