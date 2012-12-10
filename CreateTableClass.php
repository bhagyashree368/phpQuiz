<?php
// Test create database
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
// Connect to host
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ('se5') or die (mysql_error());

// Create table Quiz
mysql_query ("CREATE TABLE class
    (
	    C_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		ClassName varchar (60) NOT NULL,
		secure varchar(5) NOT NULL
	)DEFAULT CHARSET=utf8
") or die (mysql_error());
	// end query
	echo "Create table Class successfuly";
?>