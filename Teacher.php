<?php session_start(); ?>
<form method = 'post' action = 'login.php'>
    <table width = '800' height = '25'>
    <tr>
    <td width = '50'><a href = 'Teacher.php' >Home</a></td>
<?php
    //$firstName = $_POST['hidden1'];
	//$firstName = $_SESSION['username'];
	//echo "<td width = '100'>";
    //echo "Hello   <span style = 'color:FF0000'><b>$firstName</b></span>";
	//echo "</td>";
?>
    <td width = '400'>
    You are a Teacher!    <input type = 'submit' value = 'Logout'/>
    </td>
</table>

</form>

	<form method="post">
	    <input type="submit" name="CreateQuiz" value="Create Quiz" onclick = "form.action = 'FormQuiz.php'" />
	    <input type="submit" name="ListQuiz" value="List Quiz" onclick = "form.action = 'ListQuiz.php'"/>
		<input type="submit" name="submit3" value = 'Create Class' onclick = "form.action = 'CreateClass.php'"/>
		<input type="submit" name="submit3" value = 'List Class' onclick = "form.action = 'ListClass.php'"/>
	</form>