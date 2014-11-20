<?php
	require_once(__DIR__ . "/database.php");
	$path = "/blog/";
	//pathway to blog
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
	//Database variables and information
	//helping us connect to database

	$connection = new Database($host, $username, $password, $database);
	//new object stored in connection
	//having access to having access to function in database.php
?>
