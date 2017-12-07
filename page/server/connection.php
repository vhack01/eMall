<?php
		class Connection
		{
			private $host="localhost";
			private $username="root";
			private $pass="";
			private $database="e_mall";
			public $link;
			function __construct()
			{
				$this->link=mysqli_connect($this->host,$this->username,$this->pass,$this->database);
				if(mysqli_connect_error())
				{
					die("Unable to connect with server");
				}
			}
		}
?>