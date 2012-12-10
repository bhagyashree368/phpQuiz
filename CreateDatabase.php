
<?php
// Test create database
$host = "localhost";
$username = "hoanghhvnu";
$password = "123456";
// Connect to host
$connect = mysql_connect ("$host", "$username", "$password") or die ("cannot to connect");
// Create Database
mysql_query ('CREATE DATABASE se5');
$db = 'se5';
// Select Database
mysql_select_db ($db) or die ('cannot access database');
// Create table in database

// Create table Quiz
mysql_query ("CREATE TABLE quiz
    (
	    Q_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		QuizName varchar (60) NOT NULL,
		C_ID int NOT NULL
	)DEFAULT CHARSET=utf8
") or die ('cannot create quiz table');
	// end query
	
// Create table Question
mysql_query ("CREATE TABLE question
(
	A_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Question varchar (255) NOT NULL,
	Answer1 varchar (60) NOT NULL,
	Answer2 varchar (60) NOT NULL,
	Answer3 varchar (60),
	Answer4 varchar (60),
	CorrectAnswer varchar (60) NOT NULL,
	Q_ID int NOT NULL
) DEFAULT CHARSET=utf8
") or die ('cannot create question table');
// end query

mysql_close($connect);
echo "Create database successfuly";
?>

<a href = 'Home.php' >Continue</a>