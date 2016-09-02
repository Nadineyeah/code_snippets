<?php

require('action.php');

$uname = $_POST["username"];
$pword=$_POST["password"];

$ret = checkcredentials($uname,$pword);

if($ret===true){
	//route the page to home.php
	header('Location:home.php');
}else{
	displayerror($ret);
}