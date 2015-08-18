<?php #this script contains the class for database connection and passing queries ?>
<?php
	class Database
	{
		public $host;
		public $user;
		public $password;
		public $database;
		public $connection;
		
		function __construct()
		{
			switch ($_SERVER['HTTP_HOST']) 
			{
				case 'localhost:60':
									$this->host="localhost";
									$this->user="root";
									$this->password="";
									$this->database="chalkstreet";
									break;
			}
		}

		function connect()
		{
			$this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database) or die(mysqli_error());
		}

		function execute($query)
		{
			return mysqli_query($this->connection,$query);
		}
		
		function disconnect()
		{
			mysqli_close($this->connection);
		}
	}
?>