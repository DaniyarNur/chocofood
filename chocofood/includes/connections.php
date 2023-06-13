<?php 
 
	$server="localhost"; 
	$user="root"; 
	$pass=""; 
	$db="chocofood"; 
	 
	// connect to mysql 
	 
	$conn = mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
	 
	// select the db 
	 
	mysqli_select_db($conn, $db) or die("Sorry, can't select the database."); 
 
?>