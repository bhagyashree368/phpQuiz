<?php

$NoQuiz = $_POST ['hidden1'];
$NameQuiz = $_POST ['hidden2'];

//echo $NoQuiz;
// variable $NoQuiz tell us we on what Quiz
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
//$table = "quiz";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");

echo "<span style ='color:0000FF'><b>We are in Quiz: $NameQuiz </br></b></span>";

static $No = 0;
// Start Form
echo "<form method = 'post' action = 'CheckAnswer.php'>";
$result = mysql_query("SELECT * FROM question WHERE Q_ID = $NoQuiz");
	while($row = mysql_fetch_array($result))
	  {
	  $No ++;
      
	  echo "<span style ='color:009900'><b>Question: $No</b></span></br>";
	  
	  $Question = $row['Question'];
	  $Answer1 = $row['Answer1'];
	  $Answer2 = $row['Answer2'];
	  $Answer3 = $row['Answer3'];
	  $Answer4 = $row['Answer4'];
	  $CorrectAnswer = $row['CorrectAnswer'];
	  
	  echo "<b>$Question</b></br>";
	  
	  echo "<form method = 'post' action = 'CheckAnswer.php'>";
      echo "<label> A) </label><input type = 'radio' name = 'Question[$No]' value = '$Answer1'/>" . $Answer1 .' </br>';
      echo "<label> B) </label><input type = 'radio' name = 'Question[$No]' value = '$Answer2'/>" . $Answer2 .' </br>';
	  echo "<label> C) </label><input type = 'radio' name = 'Question[$No]' value = '$Answer3'/>" . $Answer3 .' </br>';
      echo "<label> D) </label><input type = 'radio' name = 'Question[$No]' value = '$Answer4'/>" . $Answer4 .' </br>';
	  
	  echo "<input type = 'hidden' name = 'CorrectAnswer[$No]' value = '$CorrectAnswer' />";
	  
	  echo "<br />";
	  
	  } // end while loop
	  echo "<input type = 'hidden' name = 'hidden1' value = '$No' />";
	  echo "<input type = 'submit' name ='submit' value = 'Submit' />";
?>

