<?php
 class myCar{

 	    public $modal;
 	    public $color;

 	    function __construct($modal, $color){
 	    	$this->modal=$modal;
 	    	$this->color=$color;
 	    }
 
  public function messege(){
  	 return "My Car  = ".$this->modal.",".$this->color;
  }
}
  $car=new myCar("volvo","black");
   echo $car->messege();
   echo "<br>";
   $car=new myCar("BMW","red");
   echo $car->messege();

?>