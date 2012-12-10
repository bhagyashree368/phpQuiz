<?php
// Test create database
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
// Connect to host
$connect = mysql_connect ("$host", "$username", "$password") or die (mysql_error());
mysql_select_db ('se5') or die (mysql_error());

// Create table Quiz
mysql_query ("CREATE TABLE quizclass
    (
	    QC_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		C_ID varchar (60) NOT NULL,
		Q_ID varchar(5) NOT NULL
	)DEFAULT CHARSET=utf8
") or die (mysql_error());
	// end query
	echo "Create table Class successfuly";
?>