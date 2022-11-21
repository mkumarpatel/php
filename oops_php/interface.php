<?php 
  interface parent1{

  	   function calc($a ,$b);
  	  
  }
  interface parent2 {
  	function sub($a,$b);
  }
  class childClass implements parent1 ,parent2 {
  	public function calc($a,$b){
  		echo $a + $b."<br>";
  	}
  	public function sub($a,$b){
  		echo $a - $b;
  	}
  }
   $test= new childClass();
   $test->calc(10,20)."<br>";
   $test->sub(50,30);
?>