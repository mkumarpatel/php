<?php 
  class student{

  	 public $cours = "php";
  	 private $firstName;
  	 private $lastName;


  	 public function setName($fname,$lname){
            
            $this->firstName=$fname;
            $this->lastName=$lname;
  	 }
  	 public function __unset($property){
            unset($this->$property);
  	 }
  }
   $test = new student();
   $test->setName("mukesh","patel");

    unset($test->lastName);
    unset($test->firstName);
   echo "<pre>";
   print_r($test);
   echo "</pre>";
?>