<?php 
   
    abstract class basic{
    	public $name;

     // abstract protected functi2on calc($a,$b);
     
    }
    class draived extends basic{
     	public function calc($a,$b){
              echo $a + $b;
     	}
     }

    $test= new draived();
    $test->calc(5,10);
?>