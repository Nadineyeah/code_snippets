<?php

class Database{
	var $host="localhost";
	var $username="root";
	var $password="";
	var $db_name="ict141";
	var $omysqli;
	
	function __construct(){
		$this->omysqli = new mysqli($this->host,$this->username,$this->password,$this->db_name);
		
		if($this->omysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" 
			. $this->omysqli->connect_errno . ") "
			. $this->omysqli->connect_error;
		}

	}
	
	function insertquery($sqlstr){
		if($this->omysqli->query($sqlstr)){
			echo "Error in executing SQL statement: " . $this->omysqli->error;
			return false;
		}
		
		return true;
	}
}