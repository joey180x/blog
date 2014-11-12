<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database);
	//so we have acccess to these variables in databse.php
	//using variables from the seporate file
	//able to run queries
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//makes it so blog dosent get hacked and filters input
	//and where to grab it from
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//saving inputs in variables

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post";
	//recieves from database

	$connection->close();
	//closes connection to database.php	


?>