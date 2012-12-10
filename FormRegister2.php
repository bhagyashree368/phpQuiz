<html>
<body>
<center>
	<?php echo "<form action='check1.php' method='post'>";?>
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
	<?php echo "</form>"; ?>
</center>
</body>
</html>