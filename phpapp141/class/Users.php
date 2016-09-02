<?php
include("Database.php");

class Users{
	var $userid;
	var $fname;
	var $lname;
	var $gender;
	var $email;
	var $contact_no;
	var $password;
	var $odb;
	
	function __construct(){
		$this->odb = new Database();
	}
	
	function adduser($fname,$lname,$gender,$email,$contact,$user,$pass){
		$sql = "INSERT INTO users VALUES('".$user."','".$fname."','".$lname."',
		'".$gender."','".$email."','".$contact."','".$pass."',CURRENT_TIMESTAMP)";
		
		if($this->odb->insertquery($sql)){
			return true;
		}else{
			return false;
		}
	}
	
	function getuser(){
	}

}