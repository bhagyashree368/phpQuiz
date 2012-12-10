<?php

$NoQuiz = $_POST ['button'];
//echo $NoQuiz;
// variable $NoQuiz tell us we on what Quiz
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
//$table = "quiz";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");

$getNameQuiz = "SELECT QuizName FROM quiz WHERE Q_ID = $NoQuiz";
$NameQuiz= mysql_query ($getNameQuiz) or die ('cannot get QuizName');
$row = mysql_fetch_array ($NameQuiz);
$Name  = $row ['QuizName'];
    echo "<span style ='color:0000FF'><b>We are in Quiz: $Name </br></b></span>";
/*while ($row = mysql_fetch_array ($NameQuiz)){
    $Name  = $row ['QuizName'];
    echo "<span style ='color:0000FF'><b>We are in Quiz: $Name </br></b></span>";
	break;
}
*/

echo "<span style ='color:FF0000'>*Red color is Correct Answer</span></br></br>";


/*echo "<form name = 'form6' method = 'post'>";
echo "<input type = 'submit' name = 'Submit' value = 'Add a Question' onclick = " . "'form.action = 'FormQuestion.php';'". " />";
//echo "<input type = 'submit' name = 'Submit' value = 'Delete Quiz' onclick = 'form.action = 'DeleteQuiz.php';' />";
//echo "<input type = 'submit' name = 'Submit' value = 'Add a Question'/>";
echo "</form>";
*/
// Form Question
echo "<form name = 'form9' method = 'post' action = 'FormQuestion.php'>";
echo "<input type = 'hidden' name = 'hidden1' value = '$NoQuiz'/>";
echo "<input type = 'hidden' name = 'hidden2' value = '$Name' />";
?>
<input type = 'submit' name = 'submit' value = 'Add a Question' onclick = "form.action = 'FormQuestion.php'"/>
<input type = 'submit' name = 'submit' value = 'Delete this Quiz' onclick = "form.action = 'DeleteQuiz.php'"/>
</form>
<?php
// form Delete Quiz
/*
echo "<form name = 'form9' method = 'post' action = 'DeleteQuiz.php'>";
echo "<input type = 'hidden' name = 'hidden1' value = '$NoQuiz'/>";
echo "<input type = 'submit' name = 'submit' value = 'Delete this Quiz'/>";
echo "</form>";
*/
?>
<!--<a href = 'ListQuiz.php'>Back to <b><color = 'Red'>List Quiz</color></b></a></br></br>
-->
<form method = 'post' action = 'ListQuiz.php'>
<input type = 'submit' name = 'submit' value = 'Back'/>
</form>
<!--
<form name = 'form8 method = 'post'>
<input type = 'submit' name = 'Submit' value = 'Add a Question' onclick = "form.action = 'FormQuestion.php'" />
<input type = 'submit' name = 'Submit' value = 'Delete This Quiz' onclick = "form.action = 'DeleteQuiz.php'" />

</form>
-->

<?php
$sql = "SELECT * FROM question WHERE Q_ID = $NoQuiz";
// Only get what question of Quiz is choose ($Noquiz)
$result = mysql_query ($sql);
while ($row = mysql_fetch_array ($result))
{
      static $No = 1;
	  // static ensure NoQuestion start from 1
	  $NoQuestion = $row ['A_ID'];
	  $Question = $row['Question'];
	  //echo "<span style = 'color : 00FF00'><b>Question $A_ID : </b></br> </span>";
	  
	  
	  echo "<form method = 'post'>";
	  echo "<b>Question $No:</b>";
	  $No ++;
	  echo "<input type = 'hidden' name = 'hidden1' value = '$NoQuestion' />";
	  echo "<input type = 'hidden' name = 'hidden2' value = '$NoQuiz' />";
	  echo "<input type = 'hidden' name = 'hidden3' value = '$Name' />";
	  ?>
	  <input type = 'submit' name = 'submit' value = 'Edit' onclick = "form.action = 'EditQuestion.php'" />
	  <input type = 'submit' name = 'submit' value = 'Delete' onclick = "form.action = 'DeleteQuestion.php'" />
	  </form>
	  <?php
	  
	  echo "<b>$Question </b></br></br>";
	  
	  $Answer1 = $row['Answer1'];
	  $Answer2 = $row['Answer2'];
	  $Answer3 = $row['Answer3'];
	  $Answer4 = $row['Answer4'];
	  $CorrectAnswer = $row ['CorrectAnswer'];
	  
	  switch ($CorrectAnswer){
		  case $Answer1:{
			  echo "<span style = 'color:#FF0000'>A) $Answer1</span></br>";
			  echo 'B) ' . $Answer2 , '</br>';
			  echo 'C) ' . $Answer3 , '</br>';
			  echo 'D) ' . $Answer4 , '</br></br>';
			  break;
		  }
		  case $Answer2:{
			  echo 'A) ' . $Answer1 , '</br>';
			  echo "<span style = 'color:#FF0000'>B) $Answer2</span></br>";
			  echo 'C) ' . $Answer3 , '</br>';
			  echo 'D) ' . $Answer4 , '</br></br>';
			  break;
		  }
		  case $Answer3:{
			  echo 'A) ' . $Answer1 , '</br>';
			  echo 'B) ' . $Answer2 , '</br>';
			  echo "<span style = 'color:#FF0000'>C) $Answer3</span></br>";
			  echo 'D) ' . $Answer4 , '</br></br>';
			  break;
		  }
		  case $Answer4:{
			  echo 'A) ' . $Answer1 , '</br>';
			  echo 'B) ' . $Answer2 , '</br>';
			  echo 'C) ' . $Answer3 , '</br>';
			  echo "<span style = 'color:#FF0000'>D) $Answer4</span></br></br>";
			  break;
		  }
		  
	  } // end switch
	  
	  
    //echo $row ['A_ID']. $row ['Question'
} // end while
// Lay du lieu tu 2 bang
/*
$sql =  "SELECT question.Q_ID, quiz.Q_ID
*FROM question
INNER JOIN quiz
ON question.Q_ID= quiz.Q_ID
ORDER BY quiz.Q_ID";
while($row = mysql_fetch_array($sql))
{
    echo 'Question ' . $row['A_ID'] . ':' , '</br>';
	  echo $row['Question'] , '</br></br>';
	  
	  $Answer1 = $row['Answer1'];
	  $Answer2 = $row['Answer2'];
	  $Answer3 = $row['Answer3'];
	  $Answer4 = $row['Answer4'];
	  
	  echo "<form id = 'form3', name = 'form3' method = 'post' action = 'CheckAnswer.php'>";
      echo "<label> A) </label><input type = 'radio' name = 'Question1' value = '$Answer1'/>" . $Answer1 .' </br>';
      echo "<label> B) </label><input type = 'radio' name = 'Question1' value = '$Answer2'/>" . $Answer2 .' </br>';
	  echo "<label> C) </label><input type = 'radio' name = 'Question1' value = '$Answer3'/>" . $Answer3 .' </br>';
      echo "<label> D) </label><input type = 'radio' name = 'Question1' value = '$Answer4'/>" . $Answer4 .' </br>';
	  echo "<br />";
	  //echo "<input type = 'submit' name ='submit' value = 'Next' />";
	  echo "</form>";
	  
	  echo "<input type = 'submit' name ='submit' value = 'Submit' />";
}
*/
mysql_close($connect);
?>