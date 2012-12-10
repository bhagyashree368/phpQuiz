<?php 
		$e = NULL;
		if(isset($_POST['nut'])){
		if($_POST['user'] == NULL){
			echo "dien username cua ban<br>";
		}
		else{
			$u = $_POST['user'];
		}
		if($_POST['fillemail'] == NULL){
			echo "hay dien dia chi email<br>";
		}
		else{
			$e = $_POST['fillemail'];
		}
		if($u && $e){
			mysql_connect("localhost" , "hoanghhvnu" ,"123456")or die(mysql_error());
			mysql_select_db("se5")or die(mysql_error());
			
			$sql = "SELECT * FROM user WHERE username = '$u' && email = '$e'";
			$query = mysql_query($sql);
			if(mysql_num_rows($query) == 0){
				echo "user or email khong dung hoac chua dang ky <br>";
			}
			else{
				function getRandomString()
				{
					$length = 10 ;
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzQWERTYUIOPASDFGHJKLZXCVBNM!@#$%^&*()';
					$String = '';
					for($p = 0 ; $p < $length ; $p++)
					{
						$String .= $characters[mt_rand(0, strlen($characters))];
					}
					return $String;
				}
				$p = getRandomString();
				echo "mat khau thay the ==:  ".$p;
				$query2 = mysql_query("SELECT * FROM user")or die(mysql_error());
				while($row = mysql_fetch_array($query2)){
					
					if($row['email'] == $e && $row['username'] == $u){
						$pa = $row['password'];
						$sql1 = "UPDATE user SET password='$p' WHERE password='$pa'";
						$query1 = mysql_query($sql1)or die(mysql_error());
					}
				}
				
			}	
		}
	}
	
?>
<form action="loadpassword.php" method="post">
<table width="200" height="20" align="center" border="0">
<tr>
	<td width="159" height="10">Username*</td>
	<td width="279"><input type="text" name="user" size="40"></td>
</tr>
<tr>
	<td width="159" height="10">Email*:</td>
	<td width="279"><input type=text name=fillemail size="40"></td>
</tr>
<tr>
	<td><input type=submit name=nut value="Find password"></td>
</tr>
</table>
<center><a href = "login.php">Back home</a></center>
</form>