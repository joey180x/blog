<?php
	require_once(__DIR__ . "/../model/config.php");
	//for direct connection to database

	}

	//query id for each post
	//makes it go 1,2,3,4 ect.
	//max length of title is 255
	//not null means title cant be empty
	$query = $connection->query("CREATE TABLE posts ("
		. "id  int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");
	//Primary key = way tables are connected to each other
	//every post has to have a id, title, and post text

	if($query) {
		echo "<p>Succesfully created table: posts</P.";
	}
	//echos if it has been succesfully created
	else{
		echo "<p>$connection->error</p>";
	}

