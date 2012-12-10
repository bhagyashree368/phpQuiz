<?php 
	if(isset($_POST['change'])){
		if($_POST['user'] == NULL){
			echo "dien usernam vao";
		}
		else{
			$u = $_POST['user'];
		}
		if($_POST['oldpass'] == NULL){
			echo "dien password cu vao";
		}
		else{
			$op = $_POST['oldpass'];
		}
		if($_POST['newpassword'] == NULL){
			echo "dien pass moi vao";
		}
		else{
			$np = $_POST['newpassword'];
		}
		if($u && $op && $np){
			mysql_connect("localhost" , "hoanghhvnu" , "123456")or die(mysql_error());
			mysql_select_db("cnpm")or die(mysql_error());
			
			$sql = "SELECT * FROM user WHERE username ='$u' and password ='$op'";
			$query = mysql_query("$sql")or die(mysql_error());
			if(mysql_num_rows($query) == 0){
				echo "username or password is failed";
			}
			else{
				if(strlen($np) < 6){
					echo "new password doesn't appropriate";
				}
				else{
					$sql1 = "UPDATE user SET password='$np' WHERE password='$op'";
					$query1 = mysql_query($sql1);
					header("location: changesuccess.php");
				}
			}
		}
	}
?>
<form action="changepassword.php" method="post">
<table width="495" height="29" align="center" border="0">
<tr>
  	<td width="159" height="10"><font color="#CC0000">username*:</font> </td>
	<td width="279"> <input type=text name=user size="25"></td>
</tr>
<tr>
	<td width="159" height="10" ><font color="#CC0000">oldpassword*:</font></td>
	<td width="279"><input type=password name=oldpass size="25" ></td>
</tr>
<tr>
	<td width="159" height="10"><font color="#CC0000">newpassword*:</font></td>
	<td width="279"><input type=password name=newpassword size="25"></td>
</tr>
<tr>

<td><input type=submit name=change value="change password"></td>

</tr>
</form>