<?php 
 class student{

 	 public $cours;
 	 public $firstName;
 	 public $lastName;
        

 	 public function __construct($n){
         $this->firstName=$n;
 	 }

         public function setCourse(cours $c){
                $this->cours=$c;
         }

         public function __clone(){

         $this->cours = clone $this->cours;
         }
 }
      class cours{
        public $cname;
         public function __construct($c){
         $this->cname =$c;
      }
      }
  $student1 = new student("mukesh");
  $cours1= new cours("php");
   $student1->setCourse($cours1);
  $student2= clone $student1;
  $student2->firstName ="ram kumar";
  $student2->cours->cname = 'paythan';
echo "<pre>";
  print_r($student1);
  print_r($student2);
echo "</pre>";

?>