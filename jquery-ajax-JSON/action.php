<?php

$num =$_POST['num'];

$str=array();

for($i=1;$i<=$num;$i++){
	for($j=1;$j<=$num;$j++){
	//assign value to 2D array
		$str[$i-1][$j-1] = $j*$i;
	}
}

//returns the result
echo json_encode($str);
