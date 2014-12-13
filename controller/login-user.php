<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//now have username and password that was send in by the form

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	//select where our username is equal to the username the user submitted through the form
	//will retrieve info from database

	if ($query->num_rows === 1) {
		$row = $query->fetch_array();
		//triple = checks if it is the same type
		//getting array of information and storing it in $row

		if ($row["password"] === crypt($password, $row["salt"])) {
				$_SESSION["authenticated"] = true;
				echo "<p>Login Successful!</p>";
			//checking if the hashed password is equal to the new 
			//hashed password using the original salt and if it 
			//is we can echo that it will be successful
			//checking if the user has been authenticated
		}
		else {
			echo "<p>Invalid username and password";
		}	
	}
	else {
		echo "<p>Invalid username and password</p>";
	}
