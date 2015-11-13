<?php

class DB {
	private static $instance = NULL;

	private $cn;

	private function __construct() {
		$this->cn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DBNAME, MYSQL_PORT);
		$this->cn->query('SET NAMES utf8');
	}

	private function get_data($operation) {		
		$data = array(); 
		$result = mysqli_query($this->cn, $operation) or die(mysqli_error($this->cn));
		while ($row = mysqli_fetch_object($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	private function do_operation($operation, $class = NULL) {
		$result = mysqli_query($this->cn, $operation) ;
		//if(!$result) {$this->throw_sql_exception($class);}	
	}

	public function select($class, $case, $data = NULL) {
		$query = NULL;
		
		switch ($class) {
			
			case "User":
			switch ($case) {
				
				case "all":
					$query = "SELECT * FROM user";
					break;

				case "login":
					$username = $data['username'];
					$password = $data['password'];
					$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
					break;
				
				default:
					break;
			}
		}
		return $this->get_data($query);
	}

	public function insert($case, $object) {
		$query = NULL;
		$class = get_class($object);
		
		switch ($class) {
			
			case "User":
			switch ($case) {
				
				case "normal":
					$id = $object->id;
					$name = $object->name;
					$username = $object->username;
					$password = $object->password;
					$email = $object->email;
					$birthday = $object->birthday;
					$query = "INSERT INTO user (id, name, username, password, email, birthday) VALUES ('$id', '$name', '$username', '$password', '$email', '$birthday');";
					break;
				
				default:
					break;
			}
		}
		$this->do_operation($query, $class);
	}

	public function delete($case, $object) {
		$query = NULL;
		$class = get_class($object);
		
		switch ($class) {
			
			case "User":
			switch ($case) {
				
				case "normal":
					$id = $object->id;
					$query = "DELETE FROM user WHERE id = '$id';";
					break;
				
				default:
					break;
			}
		}
		$this->do_operation($query, $class);
	}

	public function update($case, $object) {
		$query = NULL;
		$class = get_class($object);
		
		switch ($class) {
			
			case "User":
			switch ($case) {
				
				case "normal":
					$id = $object->id;
					$name = $object->name;
					$username = $object->username;
					$password = $object->password;
					$email = $object->email;
					$birthday = $object->birthday;
					$query = "UPDATE user SET name = '$name', username = '$username', password = '$password', email = '$email', birthday = '$birthday' WHERE id = '$id';";
					break;
				
				default:
					break;
			}
		}
		$this->do_operation($query, $class);
	}

	public static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new DB();
		}
		return self::$instance;
	}
}