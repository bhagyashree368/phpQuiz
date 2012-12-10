<?php
    $NoQuestion = $_POST['hidden1'];
	$NoQuiz = $_POST['hidden2'];
	$NameQuiz = $_POST['hidden3'];
	//echo 'NoQuestion is' . $NoQuestion;
	//echo 'NoQuiz is ' . $NoQuiz;
	//echo 'NameQuiz is ' . $NameQuiz;
	// connect to host
	$host = "localhost";
	$username = "hoanghhvnu";
	$password = "123456";
	$db= "se5";
	//$table = "quiz";
	$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
	mysql_select_db ("$db") or die ("Cannot access database");
	
	$result = mysql_query("SELECT * FROM Question WHERE A_ID = $NoQuestion");
	$row = mysql_fetch_array($result);
	
	echo "This Question will Add to $NameQuiz.</br>";
	
	
	
	$Question = $row['Question'];
	$Answer1 = $row['Answer1'];
	$Answer2 = $row['Answer2'];
	$Answer3 = $row['Answer3'];
	$Answer4 = $row['Answer4'];
	$CorrectAnswer = $row['CorrectAnswer'];
	
	?>
	<form id="form1" name="form1" method="post" action="UpdateQuestion.php">
	  <label></label>
	  <label>Question<br />
	  <?php
	  echo "<input type='text' size = '60' name='Question' value = '$Question'/>";
	  ?>
	  </label>
	  <p>
		<label>A
		<?php
		echo "<input type='text' size = '60' name= 'Answer1' value = '$Answer1'/>";
		?>
		</label>
		<label>
	<input name="radiobutton" type="radio" value="radiobutton1" checked />    
	Correct</label>
	  </p>
	  <p>
		<label>B
		<?php
		echo "<input type='text' size = '60' name= 'Answer2' value = '$Answer2'/>";
		?>
		</label>
		<label>
		<input name="radiobutton" type="radio" value="radiobutton2" />
	Correct</label>
	</p>
	  <p>
		<label>C
		<?php
		echo "<input type='text' size = '60' name= 'Answer3' value = '$Answer3'/>";
		?>
		</label>
		<label>
		<input name="radiobutton" type="radio" value="radiobutton3" />
	Correct</label>
	</p>
	  <p>
		<label>D
		<?php
		echo "<input type='text' size = '60' name= 'Answer4' value = '$Answer4'/>";
		?>
		</label>
		<label>
		<input name="radiobutton" type="radio" value="radiobutton4" />
	Correct</label>


	<?php
	echo "<input type = 'hidden' name = 'hidden1' value = '$NoQuiz' />";
	echo "<input type = 'hidden' name = 'hidden2' value = '$NameQuiz' />";
	echo "<input type = 'hidden' name = 'hidden3' value = '$NoQuestion' />";
	?>
	</p>
	  <p>
		<input type="submit" name="Create Question" value="Submit" />
	  </p>
	</form>
	<?php
?>