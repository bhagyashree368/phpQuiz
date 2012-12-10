	<a href = 'Teacher.php' >Home</a></br>
    <form method = 'post'>
		<input type = 'submit' value = 'Create Class' onclick = "form.action = 'CreateClass.php'"/> </br>
		<input type = 'submit' value = 'Back' onclick = "form.action = 'Teacher.php'"/>
	</form>
	
<?php
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
$db= "se5";
$table = "class";
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ("$db") or die ("Cannot access database");
echo "<table width = '300' height = '25' border = '0'>";
echo "<tr>";
echo "<td widtd = '100'><b>Class Name</b></td>";
echo "<td width = '100'><b>Security code</b></td>";
echo "</tr>";
$result = mysql_query("SELECT * FROM $table WHERE 1");
	while($row = mysql_fetch_array($result))
	{
	    static $No = 1;
		//echo "<b>$No.</b>";
		$ClassName = $row['ClassName'];
		$secure = $row['secure'];
		//echo "<table width = '300' height = '25' border = '1'>";
		echo "<tr>";
		
		echo "<td width = '100'><b>$No.</b><span style = 'color:0000FF'><b>$ClassName</b></span></td>";
		echo "<td width = '100'>Code is: <span style = 'color:FF0000'><b>$secure</b></span></td>";
		echo "</tr>";
		//echo "</table>";
		$No++;
		//echo "</br>";
	}
	echo "</table>";
mysql_close ($connect);
?>