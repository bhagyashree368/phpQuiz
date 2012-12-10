
<?php 
	$cl = NULL;
	if(isset($_POST['submit'])){
		if($_POST['classname'] == NULL){
			echo "Fill in the classname";
		}
		else{
			$cl = $_POST['classname'];
		}
		if($cl){
			mysql_connect("localhost" , "hoanghhvnu" , "123456")or die(mysql_error());
			mysql_select_db("se5")or die(mysql_error());
			
			?><h4><font color="#FF0000" >Creating The Class Success</font></h4> <?
			function getRandomString()
				{
					$length = 5 ;
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzQWERTYUIOPASDFGHJKLZXCVBNM!@#$%^&*()';
					$String = '';
					for($p = 0 ; $p < $length ; $p++)
					{
						$String .= $characters[mt_rand(0, strlen($characters))];
					}
					return $String;
				}
		$s = getRandomString();
		echo "Code Security: ".$s;
		}
		$conn = "INSERT INTO class(ClassName,secure) VALUES('$cl','$s')";
		$query = mysql_query($conn)or die(mysql_error());
	}
?>

<form id = "creatclass" method="post" action="creat_class.php">
<h3 align="center">Creat New Class </h3>
<hr />
<table width="495" height="290" border="0" align="center">
	<tr>
		<td width="150">Class Name</td>
		<td width="279"><input type="text" name="classname"></td>
	</tr>
	<tr>
		<td width=""><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>