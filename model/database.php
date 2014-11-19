<?php
class Database {
	
	private $connection;
	//don't want other other files accessing this information
	//want to store host, username, password, and name of database
	private $host;
	private $username;
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
		//way to define your constructors inside a function
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
		//A function is a block of statements that can be used repeatedly
		//in a program not executed immediately when a page loads, and 
		//executed by a call to the function.


			//Opens connections->
			this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);


		if($this->connection->connect_error) {
			//If statement checks for error
			//variable
			die("<p>Error: " . $this->connection->cennect_error . "</p>");
		}
	
		}

		public function closeConnection() {
			//Closes connection
			if (isset($this->connection)) {
				//"isset" checking if theres information in the variable
				$this->connection->close();	
			}
		}

		public function query($string)		
			$this->openConnection();
			//calling on public function and executing lines above

			$query = $this->connection->query($string);
			//need to access query function
			//how we are able to refactor code
			//using a variable
			//once weve queried the database were gping to get result
			//that will be stored in query

			$this->closeConnection();

			return $query();
			//returning the result
			//easier to maintain
		}
?>