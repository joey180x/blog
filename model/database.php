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
	//global variables

	public function __construct($host, $username, $password, $database ) {
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
			//The constructor is called on an object after it has been created

			//establishing connection and want to store 
			//this information to our global variable
			//accesses "private host;"
			//only exsists in function
			//want to store the local information in the global information
			//use classes to create objects
			//when you use functions you have to call it every time
			//when using classes you only have to call it once
		}

		public function openConnection() {
			//Opens connection
		}

		public function closeConnection() {
			//Closes connection
		}

		public function query($string)		

		}
?>