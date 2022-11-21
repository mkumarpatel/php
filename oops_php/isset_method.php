<?php 
  // class student{

  //       public $cours;	
  //       private $firstName;	
  //       private $lastName;
          


  //      public function setName($fname,$lname){
  //      	 $this->firstName=$fname;
  //      	 $this->lasttName=$lname;
  //      }

  //      public function __isset($property){
  //         echo isset($this->$property);
  //      }	
  // }
  //  $test = new student();
  //  $test->setName("mukesh","kumar");
  //  echo isset($test->firstName); 


   class teacher{

   	     public $cours;
   	     private $firstName;
   	     private $lastName;
   	     private $detail =['name'=>'mukesh','age'=>'21','cours'=>'MCA'];

        public function set_name($fname,$lname){
        	$this->firstName=$fname;
        	$this->lastName=$lname;
        }
   	     public function __isset($name){

   	     	echo isset($this->detail[$name]);

   	     }
   }
    $test = new teacher();
    // $test->set_name();
    echo isset($test->name);
 ?>