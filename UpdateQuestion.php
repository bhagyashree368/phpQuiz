<?php
	$host = "localhost";
	$username = "hoanghhvnu";
	$password = "123456";
	$database = "se5";
	$table = "question";
	$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
	mysql_select_db ("$database") or die ("Cannot access database");

	$NoQuiz = $_POST['hidden1'];
	$NameQuiz = $_POST['hidden2'];
	$NoQuestion = $_POST['hidden3'];
	//require 'ViewQuiz.php';
	$Question = $_POST['Question'];
	$Answer1 = $_POST['Answer1'];
	$Answer2 = $_POST['Answer2'];
	$Answer3 = $_POST['Answer3'];
	$Answer4 = $_POST['Answer4'];
	$Qid = $NoQuiz;

	$getRadioButton = $_POST['radiobutton'];
	switch ($getRadioButton){
		case 'radiobutton1': $CorrectAnswer = $Answer1;
			break;
		case 'radiobutton2': $CorrectAnswer = $Answer2;
			break;
		case 'radiobutton3': $CorrectAnswer = $Answer3;
			break;
		case 'radiobutton4': $CorrectAnswer = $Answer4;
			break;
	}
	$sql = "UPDATE question SET Question = '$Question', Answer1 = '$Answer1', Answer2 = '$Answer2',
		Answer3 = '$Answer3', Answer4 = '$Answer4', CorrectAnswer = '$CorrectAnswer'
		WHERE A_ID = $NoQuestion";
	mysql_query ($sql) or die ("cannot update Question");
	
	echo "Update Question to <b>$NameQuiz </b>  <span style = 'color:FF0000'>Successfuly </span>
	</br>Correct Answer is <span style = 'color:FF0000'>$CorrectAnswer</span>";
	mysql_close($connect);

	// Add a Question
	echo "<form method = 'post' action = 'FormQuestion.php' >";
	echo "<input type = 'hidden' name = 'hidden1' value = '$NoQuiz' />";
	echo "<input type = 'hidden' name = 'hidden2' value = '$NameQuiz' />";
	echo "<input type = 'submit' name = 'submit' value = 'Add a Question'/>";
	echo "</form>";

	?>

	<a href = 'ListQuiz.php'>Back to <b><color = 'Red'>List Quiz</color></b></a>