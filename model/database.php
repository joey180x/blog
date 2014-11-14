<?php
class Database {
	private $connection;
	//don't want other other files accessing this information
	//want to store host, username, password, and name of database
	private host;
	private username;
	private $password;
	private $database;
	//files are hidden from other files
	//when new object is created all files are hidden
	//makes code easier to maintain and read
	//set visibility these variables can only be accessed in this class
	//using classes makes your code cleaner and creates objects
	//so you can see everything you're doing in a small area
}
?>