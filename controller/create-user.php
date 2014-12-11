<?php
	require_once(__DIR__ . "/../model/config.php");
	//connecting to config

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	//if there are any invalid characters it will get rid of them and fix them
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//any invalid characters in strings are deleted
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


	$salt = "$5$" . "rounds=5000$" . uniqid(mt_random(), true) . "$";
	//creating a unique id to use a unique random number 
	//and make it as unique as possible
	//5000 rounds to get a unique encript password
	//starting to encrypt password
	//php recongnizes the $ sign as a variable


	$hashedpassword = crypt($password, $salt);
	//returning a value stored in variable
	//creating encrypted password

	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");
	//created a query for users
	//inserting data inside of users
	//storing encrypted password inside of the database

	if($query) {
		echo "Successfully created user: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}