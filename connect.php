<?php
	$hostname = 'Localhost';
	$username = 'root';
	$password = '';
	$dbname = 'school_registration';
	$conn = new mysqli($hostname, $username, $password, $dbname);            //create connection to database
	if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }else{
		return $conn;
	}
?>