<?php 
	if(isset($_POST['teacher'])){
		header("Location: FormRegister.php");
	}
	else if(isset($_POST['student'])){
		header("Location: FormRegister2.php");
	}
?>

<form action="career.php" method="post">
<table width="259" height="10" border="0" align="center">
	<tr>
	    <td width="30"><input type="submit" name="teacher" value="I'm a Teacher"></td>
		<td width="10"><input type="submit" name="student" value="I'm a Student"></td>
	</tr>

</table>
</form>
<p align="center"><a href="login.php">Back Home</a></p>