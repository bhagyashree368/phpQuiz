<?php
// Test create database
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
// Connect to host
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
mysql_select_db ('se5') or die (mysql_error());

// Create table Quiz
mysql_query ("CREATE TABLE user
    (
	    U_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username varchar (60) NOT NULL,
		password varchar(60) NOT NULL,
		email varchar(60) NOT NULL,
		firstname varchar(60) NOT NULL,
		lastname varchar(60) NOT NULL,
		UI_ID int(60) NOT NULL,
		C_ID int(60) NOT NULL
	)DEFAULT CHARSET=utf8
") or die (mysql_error());
	// end query
	echo "Create table User successfuly";
?>