<?php 
  class set{

     public $name;
     public function hello(){

     	echo " hello everyone";
     }
  public function __get($proparty){
     echo "You are traying to access non Exiting to Parivet Proprty($proparty)";
     

  	}
  public function __set($proparty,$value){
       if(proparty_exists($this , $proparty)){
       	 $this->$proparty = $value;
       }
       else{
       	echo "proparty does not exist : $proparty";
       }
     }
   }
   $test = new set();
   $test->name = "mukesh patel";
   // $test->h?ello();
?>