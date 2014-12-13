<?php
	require_once(__DIR__ . "/../model/config.php");

	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
		header("location: " . $path . "index.php");
		//sending header to the web browser and ocntain 
		//information about a location and to access index.php
		die();
	}

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//makes it so blog dosent get hacked and filters input
	//and where to grab it from
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//saving inputs in variables
	$data = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');
	//tells you todays data

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//for inserting information in to table
	//set values in post table
	//when we run query the if else will tell it if the information is stored

	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
		//checking if its true and information gets stored
		//if false it couldnt insert information
		echo "<p>Successfully inserted post: $title</p>";
		//displays date and time
		echo "Posted on: " . $data->format("M/D/Y") . " at " . $time->format("g:i");

	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>