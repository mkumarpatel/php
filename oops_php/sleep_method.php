<?php 
  class student{

  	 public $cours ="php";
  	 private $firstName;
  	 private $lastName;
  	 private $conn;


  	 public function setName($fname,$lname){
        $this->firstName=$fname;
        $this->lastName=$lname;
  	 }
  	 public function __construct(){
  	 	$this->conn =mysqli_query();
  	 }

  	 public function __sleep(){
  	 	mysqli_close($this->conn);
  	 	return array('firstName','lastName');
  	 }
  	 public function __wakeup(){
  	 	$this->conn =mysqli_query();

  	 	echo "This is __wakeup method";
  	 }
  }
  $test = new student();
  $test->setName("mukesh","patel");

   $obj = serialize($test);
   $un= unserialize($obj);

   print_r($un);
?>