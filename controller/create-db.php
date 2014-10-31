<?php
	//require_once("../model/database.php");
	//Above Line isnt direct connection below line is
	
	require_once(__DIR__ . "/../model/database.php");
	//for direct connection to database

	$connection = new mysqli($host, $username, $password);

	
	if($connection->connect_error) {
		//If statement checks for error
		die("<p>Error: " . $connection->cennect_error . "</p>");
	}
	
	$exists = $connection->select_db($database);
	//try to access database on mysql

	//Checks if it can connect to database
	//If nothing comes up it means it dosent exist
	//After you put ! it inverts the true to false 
	//and false to true
	
		
	#selects database and return if true or nah
	$exists = $connection->select_db($database);

	if(!$exists) {
		//command to database
		$query = $connection->query("CREATE DATABASE $database");


		if($query) {
		echo "<p>Succesfully created database: " . $database . "</p>";	
			
		}
	}
	else{
		//telling you its already has been created
		echo "<p>Database already exists.</p>";
	}

	//query id for each post
	//makes it go 1,2,3,4 ect.
	//max length of title is 255
	//not null means title cant be empty
	$query = $connection->query("CREATE TABLE posts ("
		. "id  int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");
	//Primary key = way tables are connected to each other
	//every post has to have a id, title, and post text

	if($query) {
		echo "<p>Succesfully created table: posts</P.";
	}
	//echos if it has been succesfully created
	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();