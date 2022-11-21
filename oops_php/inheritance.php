<?php

 class employee{

     public $name;
     public $age;
     public $salery;


     function __construct($n,$a,$s){
     	$this->name=$n;
     	$this->age=$a;
     	$this->salery=$s;
     }
     // function __construct(){
     // 	echo "Employee constructer";
     // }
     function info(){
     	 echo "<h3>Employee Table Profile<h3> <br>";
     	 echo "Employee Name:-".$this->name."<br>";
     	 echo "Employee age :-".$this->age."<br>";
     	 echo "Employee Salery:-".$this->salery."<br>";
     }

 }
  class manager extends employee{
  	      public $ta = 1000;
  	      public $phone = 3000;
  	      public $totalSalery;
  	    function info(){
  	    	$this->totalSalery = $this->salery+$this->ta+$this->phone;
     	 echo "<h3>Manager Table Profile<h3> <br>";
     	 echo "Employee Name:-".$this->name."<br>";
     	 echo "Employee age :-".$this->age."<br>";
     	 echo "Employee Salery:-".$this->totalSalery."<br>";
     }
     // function __construct(){
     // 	echo "Manager constructer";
     // }
  }
 $result=new employee('mukesh',21,10000);
 $manger= new manager('mukesh',22,80000);
 $result->info();
 $manger->info();

?>