<?php
	require_once(__DIR__ . "/../model/config.php");

	$connection = new mysqli($host, $username, $password, $database);
	//so we have acccess to these variables in databse.php
	//using variables from the seporate file
	//able to run queries and connect to database
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//makes it so blog dosent get hacked and filters input
	//and where to grab it from
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//saving inputs in variables

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//for inserting information in to table
	//set values in post table
	//when we run query the if else will tell it if the information is stored

	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
		//checking if its true and information gets stored
		//if false it couldnt insert information
		
	}

	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();
	//closes connection to database.php	
	//everytime we make a connection we have to close it


?>