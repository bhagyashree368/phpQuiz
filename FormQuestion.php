<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
    //require 'ViewQuiz.php';
	$NoQuiz = $_POST['hidden1'];
	//echo 'NoQuiz is ' . $NoQuiz;
	$NameQuiz = $_POST['hidden2'];
	echo 'Add this Question to '. $NameQuiz;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Quiz</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="AddQuestion.php">
  <label></label>
  <label>Question<br />
  <input type="text" size = '60' name="Question" />
  </label>
  <p>
    <label>A
    <input type="text" size = '60' name="Answer1" />
    </label>
    <label>
<input name="radiobutton" type="radio" value="radiobutton1" checked />    
Correct</label>
  </p>
  <p>
    <label>B
    <input type="text" size = '60' name="Answer2" />
    </label>
    <label>
    <input name="radiobutton" type="radio" value="radiobutton2" />
Correct</label>
</p>
  <p>
    <label>C
    <input type="text" size = '60' name="Answer3" />
    </label>
    <label>
    <input name="radiobutton" type="radio" value="radiobutton3" />
Correct</label>
</p>
  <p>
    <label>D
    <input type="text" size = '60' name="Answer4" />
    </label>
    <label>
    <input name="radiobutton" type="radio" value="radiobutton4" />
Correct</label>


<?php
echo "<input type = 'hidden' name = 'hidden' value = '$NoQuiz' />";
echo "<input type = 'hidden' name = 'hidden1' value = '$NameQuiz' />";
?>
</p>
  <p>
    <input type="submit" name="Create Question" value="Submit" />
  </p>
</form>
</body>
</html>
