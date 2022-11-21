<?php 
  class base{
      public $name = "Mukesh";
  function calc($a,$b){
  	return $a+$b;
  }
  
  }
   class draived extends base{
      public $name = "Mukesh";

   	   function calc($a,$b){
  	   return $a*$b;
  }

   }
   $test=new draived();
   echo $test->calc(10,15)."<br>";
   echo $test->name;
?>