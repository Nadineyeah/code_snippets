<?php

class Person{
	public $idnum;
	public $fname;
	public $lname;
	
	function setname($xfname,$xlname){
		$this->fname = $xfname;
		$this->lname = $xlname;
	}
	
	function getfname(){
		return $this->fname;
	}
	
	function getlname(){
		return $this->lname;
	}
}

//child class
class Student extends Person{
	var $subjs;
	
	function setsubjs($subj){
		$this->subjs=$subj;
	}
	
	function getstudyload(){
		return $this->subjs;
	}
	
}

//child class
class Faculty extends Person{
	var $teachload;
	
	function setload($subj){
		$this->teachload=$subj;
	}
	
	function getload(){
		return $this->teachload;
	}
}


$student = new Student();
$faculty = new Faculty();

$student->setname("John","Doe");
$faculty->setname("Bruce","Wayne");

$subjs= array("ICT141"=>2.0,"ICT212"=>1.5,"IT144" => 1.8);
$student->setsubjs($subjs);

$tload = array("ICT212","ICT141");
$faculty->setload($tload);

echo "Student: " . $student->getlname() . ", " . $student->getfname() . "<br />";

foreach($student->getstudyload() as $key => $item){
	echo $key . "=" . $item . "<br />";
}

echo "Faculty: " . $faculty->getlname() . ", " . $faculty->getfname() . "<br />";
foreach($faculty->getload() as $key => $item){
	echo $key . "=" . $item . "<br />";
}


