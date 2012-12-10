<?
//session_start();
$sl = 2;
?>
<?php 
	$ln = $fn = $u = $p = $e = NULL;
	if(isset($_POST['dangky'])){
		if(($_POST['firstname'] == NULL) || ($_POST['lastname'] == NULL)){
			?> <font color="#CC0000"><p align="center"> <? echo "Enter your First and Lastname <br />";?> </p><?
		}
		else{
			$fn = $_POST['firstname'];
			$ln = $_POST['lastname'];
		}
		if($_POST['username'] == NULL){
			?><p align="center"> <? echo "Username has to more 6 charaters <br>";?></p><?
		}
		else if(strlen ($_POST['username']) < 6 ){
			?><p align="center"> <? echo "Username has to more 6 charaters <br>";?></p><?
		}
		else{
			$u = $_POST['username'];
		}
		
		
		if($_POST['password'] == NULL){
			?><p align="center"><? echo "Password has to more 6 charaters <br />";?></p><?
		}
		else if(strlen ($_POST['password']) < 6 ){
			?><p align="center"><? echo "Password has to more 6 charaters <br />";?><?
		}
		else{
			$p = $_POST['password'];
		}
		
		if($_POST['repassword'] == NULL){
			?><p align="center"><? echo "Fill in re-type password <br />";?></p><?
		}
		else if($_POST['password'] != $_POST['repassword']){
			?><p align="center"><? echo "The password is not same the re-type password! Try again <br />";?></p><?
		}
		
		if($_POST['email'] == NULL){
			?><p align="center"><? echo "Fill in email <br />";?></p><?
		}
		else{
			$e = $_POST['email'];
		}
		if($fn && $ln && $u && $p && $e){
			mysql_connect("localhost" , "hoanghhvnu" , "123456") or die(mysql_error());
			mysql_select_db("se5")or die(mysql_error());
		
			$sql = "SELECT * FROM user WHERE username ='$u'";
			$query = mysql_query($sql);
			$sql1 = "SELECT * FROM user WHERE email='$e'";
			$query1 = mysql_query($sql1);
			if((mysql_num_rows($query) != 0) || (mysql_num_rows($query1) != 0)){
				if(mysql_num_rows($query) != 0){
					?><p align="center"> <? echo "This username had been registered.";?></p><?
				}
				if(mysql_num_rows($query1) != 0){
					?><p align="center"> <? echo "This username had been registered.";?></p><?
				}
			}
			
			else{
				$sql = "INSERT INTO user (firstname , lastname , username , password , email , UI_ID) VALUES('$fn' , '$ln' ,
				'$u' , '$p' , '$e' , '$sl' )";
				$query = mysql_query("$sql")or die(mysql_error());
				
// Bo sung      ===========================================
                //$_SESSION['username'] = $u;
                echo "Register success!";
                echo "<form action = 'Teacher.php' method = 'post'>";
				echo "<input type = 'hidden' name = 'hidden1' value = '$fn' />";
				echo "<input type = 'submit' name = 'submit1' value = 'Continue' />";
				echo "</form>";
				
				//header("Location: signin_success.php");
			}
		}
	}
?>
<!--
<html>
<body>
<center>
	<form action="check.php" method="post">
	<table width="290" height="29" border="0" align="center">
	<tr>
		<td width="259"><a href="login.php">Home</a></td>
		<td width="310"><a href="login.php">Login</a></td>
	</tr>
	<tr>
		<td width="159" height="10">First name</td>
		<td width="279"><input type=text name = firstname size=15 /></td>
		<td width="310" height="10">Lastname</td>
		<td width="350"><input type=text name = lastname size=15 /></td>
	</tr>
	<tr>
		<td width="159" height="10">User name</td>
		<td width="279"><input type=text name=username size=25 /></td>
	</tr>
	<tr>
		<td width="159" height="10">Password</td>
		<td width="270"><input type=password name=password size=25 /></td>
	</tr>
	<tr>
		<td width="140" height="10">Re-type</td>
		<td width="279"><input type=password name=repassword size=25 /></td>
	</tr>
	<tr>
		<td width="159" height="10">Email</td>
		<td width="279"><input type=text name=email size=25 /></td>
	</tr>
	<tr>
		<td><input type="submit" name="dangky" value="Register"></td>
	</tr>
	</form>
</center>
</body>
</html>

-->