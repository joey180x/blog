<?php
	require_once(__DIR__ . "/../model/config.php");

	$query = "SELECT = FROM posts";
	$result = $_SESSION["connection"]->query($query);
	//now it can retrieve the posts from the database

	if($result) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div class='post'>";
			echo "<h2" . $row['title'] . "</h2>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br/>";
			echo "</div>";
			//echos blog posts and makes them show
		}
	}