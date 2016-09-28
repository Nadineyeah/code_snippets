<?php

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$subj=$_REQUEST['subj'];
$ifname=$_REQUEST['ifname'];
$ilname=$_REQUEST['ilname'];


$arr = array(
"student" =>array('fname'=>$fname,'lname'=>$lname,'subj'=>$subj),
"instructor"=> array('fname'=>$ifname,'lname'=>$ilname)
);

echo json_encode($arr);
