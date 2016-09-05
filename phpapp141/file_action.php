<?php 

include('/calss/database.php');

$odb = new Database();
$userid = $_SESSION["username"];

$TARGET_DIR = "uploads/";
$file = $_FILES["profilepic"];
$filename = $file["name"];
$newfilename = date("Y-m-d-h-i-sa");

$fileext = pathinfo($filename,PATHINFO_EXTENSION);//gets file extension
$newfilename .= $fileext;

$target_file = $TARGET_DIR . $newfilename;//creates a new file name and target path

$filesize= $file["size"];

echo $filesize;


//uploads the file to target path
if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {

    //save filename to database

    $sqlstr = "UPDATE users SET profilepic='"+$newfilename +"' WHERE userid='"+ $userid +"'";
    
    $odb->insertquery($sqlstr);
    
    echo "The file has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}
