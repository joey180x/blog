<?php
	require_once(__DIR__ . "/../model/config.php");

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//makes it so blog dosent get hacked and filters input
	//and where to grab it from
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//saving inputs in variables

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//for inserting information in to table
	//set values in post table
	//when we run query the if else will tell it if the information is stored

	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
		//checking if its true and information gets stored
		//if false it couldnt insert information
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>