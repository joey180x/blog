<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//makes it so blog dosent get hacked and filters input
	//and where to grab it from
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//saving inputs in variables
?>