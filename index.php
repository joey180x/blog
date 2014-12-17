


<?php

	require_once(__DIR__ . "/controller/login-verify.php");
	require_once(__DIR__ . "/view/header.php"); //require header
	
	if (authenticateUser()) {
		require_once(__DIR__ . "/view/navigation.php"); //show navigation through blog	
		//want to make sure navigation only works if user is logged in
	}
	require_once(__DIR__ . "/view/body.php");
	//require_once(__DIR__ . "/controller/read-posts.php");
	require_once(__DIR__ . "/controller/create-db.php"); //require create-db
	require_once(__DIR__ . "/view/footer.php"); //require footer
	//direct connection
	?>
	
