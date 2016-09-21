<?php

$num =$_POST['num'];
echo $num;
$str="";

for($i=1;$i<=$num;$i++){
	$str .="<tr>";
	for($j=1;$j<=$num;$j++){
		$str .="<td>" .	$j*$i . "</td>";
	}
	
	$str.="</tr>";
}

echo $str;