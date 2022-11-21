<?php 
 class studens {

 	private $firstName;
 	private $lastName;

   private	function setName($fname,$lname){
         $this->firstname=$fname;
         $this->lastname=$lname;
 	}
 	public function __call($method ,$arge ){
           if(method_exists($this, $method)){
           	 call_user_func_array([$this , $method], $arge);
           }else{
           	 echo "method does not exits : $method";
           }
 	}
 }
  $test = new studens();
  $test->setName("mukesh","patel");

  echo "<pre>";
   print_r($test);
  echo "</pre>";
?>