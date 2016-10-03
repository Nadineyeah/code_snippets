<?php 
$TARGET_DIR = "uploads/";
$file = $_FILES["file"];
$filename = $file["name"];
$fileext = pathinfo($filename,PATHINFO_EXTENSION);//gets file extension
$newfilename = date("Y-m-d-h-i-sa"). "." . $fileext;

$target_file = $TARGET_DIR . $newfilename;//creates a new file name and target path

$filesize= $file["size"];

//uploads the file to target path
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //save filename to database
    //$sqlstr = "UPDATE users SET profilepic='"+$newfilename +"' WHERE userid='"+ $userid +"'";
    
    //$odb->insertquery($sqlstr);
    
	//returns the link of the image
    echo $TARGET_DIR . $newfilename . "." . $fileext;
	
} else {
	echo "Sorry, there was an error uploading your file.";
}
