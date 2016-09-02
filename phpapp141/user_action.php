<?php
include("/class/Users.php");

$oUsers = new Users();//Instantiate Users class

if(isset($_POST)){
	$fname =$_POST["fname"];
	$lname=$_POST["lname"];
	$gender=$_POST["gender"];
	$email = $_POST["email"];
	$contact=$_POST["contactno"];
	$userid=$_POST["userid"];
	$password=$_POST["password"];
}

if($oUsers->adduser($fname,$lname,$gender,$email,$contact,$userid,$password)){
	echo "User successfully added";
}