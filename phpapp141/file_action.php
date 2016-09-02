<?php 
$TARGET_DIR = "uploads/";
$file = $_FILES["profilepic"];
$filename = $file["name"];
$newfilename = date("Y-m-d-h-i-sa");

$fileext = pathinfo($filename,PATHINFO_EXTENSION);//gets file extension

$target_file = $TARGET_DIR . $newfilename. "." . $fileext;//creates a new file name and target path

$filesize= $file["size"];

echo $filesize;

/*
//uploads the file to target path
if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {

//save filename to database
	echo "The file has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}
*/
