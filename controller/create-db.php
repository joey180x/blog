<?php
	//require_once("../model/database.php");
	//Above Line isnt direct connection below line is
	
	require_once(__DIR__ . "/../model/database.php");
	//for direct connection to database

	$connection = new mysqli($host, $username, $password);

	
	if($connection->connect_error) {
		//If statement checks for error
		die("Error: " . $connection->cennect_error);
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
		echo "Succesfully created database: " . $database;	
			
		}
	}
	else{
		//telling you its already has been created
		echo "Database already exists";
	}



	$connection->close();