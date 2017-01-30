<?php

class Database{
	
	public $name;
	public $author;
	public $year;
	public $connect;
	
	public function __construct($host, $uname, $pass, $dbname){
		if(!empty("setting.php")){
			$connection = new mysqli($host, $uname, $pass, $dbname);
			$this->connect = $connection;
			if($connection->connect_error){
				die(" Connection failed " .$connection->connect_error);
			}
			
			$this->getBooks($connection);
		}
	}
	
	public function getBooks($connection){
		$sql = "SELECT * FROM books";
		$result = $connection->query($sql);
		
		while ($row = $result->fetch_assoc()){
			echo "Book number " . $row['id'] . "<br>";
			echo "Name : " . $row['name'] . "<br>";
			echo "Author : " . $row['author'] . "<br>";
			echo "Year : " . $row['year'] . "<br>";
		}
	}
	
	public function setBook($name, $author, $year){
		$this->name = $name;
		$this->author = $author;
		$this->year = $year;
		$this->save();
	}
	
	
	private function save(){
		$table = 'books';
		$sql = "INSERT INTO $table (name, author, year) 
		VALUES('$this->name', '$this->author', '$this->year');";
		
		if (mysqli_multi_query($this->connect, $sql)) {
			echo "New records created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connect);
		}
	}
}

?>