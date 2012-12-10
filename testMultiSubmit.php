<form method="post" name="form">
<input type="submit" name="submit" value="page1" onclick="form.action='FormQuestion.php'">
<input type="submit" name="submit" value="page2" onclick="form.action='FormQuiz.php'">
<input type = 'text' name = 'textest' value = 'Hoang' />
</form>
<?php
    $x = 1;
	echo $x;
?>
<form action="testButton.php" method="post">
  Choose your favorite subject:
  <button name="button" type="submit" value=  <?php $x ?>  >Get</button>
  <!--<button name="subject" type="submit" value="fav_CSS">CSS</button>-->
</form>