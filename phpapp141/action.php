<?php

function checkcredentials($user,$pass){
	global $err;
	if(trim($user)=="" && trim($pass)==""){
		return "Fill up fields completely";
	}else{
		return true;
	}
}

function displayerror($errmsg=NULL){
	
	if($errmsg!=NULL){
		echo "<div role='alert' class='alert alert-danger'>".$errmsg ."</div>";
	}else{
		return false;
	}
}