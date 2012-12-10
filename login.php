
<form action=login.php method=post>
<?php
	$u = NULL;
	$p = NULL;
	?>
	<center>
	<table width="239" height="10" border="0" align="center">
		<tr>
			<td width="10"><a href="login.php">Home</a></td>
			<td width="30"><a href="career.php">Join</a></td>
		</tr>
	</table>
	<br>
	Username: <input type=text name=username size=25 /><br>
	<? if(isset($_POST['dangnhap']))
	{
	 if($_POST['username'] == NULL || strlen($_POST['username']) < 6)
	 {
	  ?><font color="#CC0000"><? echo " My username have to more 6 charaters";?></font> <br><br><?
	 }
	 else
	 {
	  $u=$_POST['username'];
	 }
	 
	 
	 if($_POST['password'] == NULL)
	 {
	  ?><font color="#CC0000"> <? echo "My password has to more 6 charaters";?></font> <?
	 }
	 else
	 {
	  $p=$_POST['password'];
	 }
	 if($u && $p)
	 {
	 
	  mysql_connect("localhost","hoanghhvnu","123456") or die(mysql_error());
	  mysql_select_db("se5");
	  $sql="select * from user where username='$u' and password='$p'";
	  $query=mysql_query($sql);
  	  if(mysql_num_rows($query) == 0)
	  {
	   ?><p align="center"><font color="#CC0000"><br><? echo "Username or password is not true, please try again";?></font></p>
	   <?
	  }
  	  else
	  {
	  	$conn = "select * from user";
		$queryy = mysql_query($conn) or die(mysql_error);
		while($row = mysql_fetch_array($queryy)){
			if($row['username'] == $u){
				$cre = $row['UI_ID'];
			}
		}
		if($cre == 2){
			session_start();
	   		session_register("username");
	   		session_register("password");
	   		$_SESSION['username'] = $row[username];
	   		$_SESSION['password'] = $row[password];
	   		header("Location: Teacher.php");
		}
		else if($cre == 1){
			session_start();
			session_register("username");
			session_register("password");
			$_SESSION['username'] = $row[username];
			$_SESSION['password'] = $row[password];
header("Location: Student.php");
		}
		
	   //$row=mysql_fetch_array($query);
	   
	  }
	 }
	}
	?>
	
	
	<br> Password: <input type=password name=password size=25 /><br />
	 			<input type=submit name=dangnhap value="Login" /><br><br>
	<a href="loadpassword.php">Fogot password?</a>
	</form>
	</center>