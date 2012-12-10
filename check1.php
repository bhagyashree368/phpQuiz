<?php 
    //$validUser = 0;
	//session_start();
	$sl = 1;
	$ln = $fn = $u = $p = $e = $se = NULL;
	if(isset($_POST['dangky'])){
		?> <font color="#FF0000"><?
		if(($_POST['firstname'] == NULL) || ($_POST['lastname'] == NULL)){
			?><p align="center"> <? echo "Fill in your first or lastname <br />" ;?></p><?
		}
		else{
			$fn = $_POST['firstname'];
			$ln = $_POST['lastname'];
		}
		if($_POST['username'] == NULL){
			?><p align="center"> <? echo "Username has to more 6 charaters <br>/";?></p><?
		}
		else if(strlen ($_POST['username']) < 6 ){
			?><p align="center"> <? echo "Username has to more 6 charaters <br />";
			//$validUser = 1;
			?></p><?
		}
		else{
			$u = $_POST['username'];
		}
		
		
		if($_POST['password'] == NULL){
			?><p align="center"> <? echo "Password has to more 6 charaters <br />";?></p><?
		}
		else if(strlen ($_POST['password']) < 6 ){
			?><p align="center"> <? echo "Password has to more 6 charaters <br />";?></p><?
		}
		else{
			$p = $_POST['password'];
		}
		
		if($_POST['repassword'] == NULL){
			?><p align="center"> <? echo "Fill in repassword <br />";?></p><?
		}
		else if($_POST['password'] != $_POST['repassword']){
			?><p align="center"> <? echo "Password is not the same Re-type password! Try again <br />";?></p><?
		}
		
		if($_POST['email'] == NULL){
			?><p align="center"> <? echo "Fill in email <br />";?></p><?
		}
		else{
			$e = $_POST['email'];
		}
		if($_POST['code'] == NULL){
			?><p align="center"> <? echo "Fill in code securtity. <br>";?></p><?
		}
		else{
			$se = $_POST['code'];
		}
		
		
		
		if($fn && $ln && $u && $p && $e && $se){
			
			$connect =mysql_connect("localhost" , "hoanghhvnu" , "123456")or die(mysql_error());
			mysql_select_db("se5");
		
			$sql = "SELECT * FROM user WHERE username ='$u'";
			$query = mysql_query($sql);
			$sql1 = "SELECT * FROM user WHERE email='$e'";
			$query1 = mysql_query($sql1);
			$query11 = mysql_query("SELECT * FROM class WHERE secure = '$se'")or die(mysql_error());
			$sql2 = "SELECT * FROM class WHERE secure='$se'";
			$query2 = mysql_query($sql2)or die(mysql_error());
			
			while($row = mysql_fetch_array($query2)){
				$c_id = $row['C_ID'];
			}
			if((mysql_num_rows($query) != 0) || (mysql_num_rows($query1) != 0) || (mysql_num_rows($query11) == 0)){
				if(mysql_num_rows($query) != 0){
					?><p align="center"> <? echo "This username had been registered.";?></p><?
				}
				if(mysql_num_rows($query1) != 0){
					?><p align="center"> <? echo "This username had been registered.";?></p><?
				}
				if(mysql_num_rows($query11) == 0){
					?><p align="center"> <? echo "This code security is not true.";?></p><?
				}
			}
			
			else{
				$sql = "INSERT INTO user (firstname , lastname , username , password , email , UI_ID , C_ID) VALUES('$fn' , '$ln' , '$u' , '$p' , '$e' , '$sl' , '$c_id')";
				$query = mysql_query("$sql")or die(mysql_error());
				//header("Location: signin_success.php");
				//echo $c_id;
				//mysql_close($connect);
				
				//$connect =mysql_connect("localhost" , "hoanghhvnu" , "123456")or die(mysql_error());
				//mysql_select_db("se5");
				//$sql2= "SELECT U_ID FROM user WHERE username = $u";
				//$result2 =mysql_query ($sql2) or die ("hehe".mysql_error());
				//$row2 = mysql_fetch_array($result2);
				//echo $row2['U_ID'];
				//$_SESSION['username'] = $u;
				//echo $_SESSION['firstname'];
				echo "Register success!";
                echo "<form action = 'Student.php' method = 'post'>";
				echo "<input type = 'hidden' name = 'hidden1' value = '$fn' />";
				echo "<input type = 'submit' name = 'submit1' value = 'Continue' />";
				echo "</form>";
				
			}
		
		}
	}
?>
<!--
<html>
<body>
<center>
	<?php //echo "<form action='check1.php' method='post'>";?>
	<table width="290" height="29" border="0" align="center">
	<tr>
		<td width="259"><a href="login.php">Home</a></td>
		<td width="310"><a href="login.php">Login</a></td>
	</tr>
	<tr>
		<td width="159" height="10">Firstname</td>
		<td width="279"><input type=text name = firstname size=15 /></td>
		<td width="310" height="10">Lastname</td>
		<td width="350"><input type=text name = lastname size=15 /></td>
	</tr>
	<tr>
		<td width="159" height="10">Username</td>
		<td width="279"><input type=text name=username size=25 /></td>
	</tr>
	
	
	<tr>
		<td width="159" height="10">Password</td>
		<td width="270"><input type=password name=password size=25 /></td>
	</tr>
	<tr>
		<td width="130" height="10">Re-type</td>
		<td width="279"><input type=password name=repassword size=25 /></td>
	</tr>
	<tr>
		<td width="159" height="10">Email</td>
		<td width="279"><input type=text name=email size=25 /></td>
	</tr>
	<tr>
		<td width="159" height="10">Security</td>
		<td width="279"><input type="text" name="code" size="10"></td>
	</tr>
	<tr>
		<td><input type="submit" name="dangky" value="Register"></td>
	</tr>
	<?php //echo "</form>"; ?>
</center>
</body>
</html>
-->