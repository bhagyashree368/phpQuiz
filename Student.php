<?php session_start(); ?>
<form method = 'post' action = 'login.php'>
    <table width = '800' height = '25'>
    <tr>
    <td width = '50'><a href = 'Student.php' >Home</a></td>
<?php
    
    //$firstName = $_POST['hidden1'];
	//$firstName = $_SESSION['username'];
	//echo "<td width = '100'>";
    //echo "Hello   <span style = 'color:FF0000'><b>$firstName</b></span>";
	//echo "</td>";
?>
    <td width = '400'>
    You are a Student!    <input type = 'submit' value = 'Logout'/>
    </td>
</table>

</form>
<form method = 'post'>
<input type = 'submit' name = 'submit' value = 'Do Quiz' onclick = "form.action = 'ListQuiz2Do.php'"/>
<!--<input type = 'submit' name = 'submit' value = 'View Result' onclick = "form.action = 'Result.php'"/>
-->
</form>