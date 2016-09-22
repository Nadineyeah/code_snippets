<?php

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];

$arr = array('fname'=>$fname,'lname'=>$lname);

echo json_encode($arr);