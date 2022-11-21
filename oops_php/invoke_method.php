<?php
  
   class student{

   	   public $a,$b;



   	  public function __construct($a,$b){
          $this->a=$a;   
          $this->b=$b;   
   	   }

   	  public function sum(){
   	  	echo $this->a + $this->b;
   	  }
   	  public function __invoke(){
   	  	echo $this->a + $this->b;
   	  	
   	  }

   } 
   $obj = new student(10,20);
   // $obj->sum();
   $obj();
?>