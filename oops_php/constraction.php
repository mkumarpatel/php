<?php 
  class person{
  	public $name;

  	function show(){
  		echo "name :-". $this->name;
  	}
  }
   $p1= new person();
    $p1->name = "mukesh patel";
    $p1->show();

      echo "<br>";

  class constraction{
     
      public $name = "apple";
      public $color = "red";


      function __construct($name,$color){
      	$this->name=$name;
      	$this->color=$color;
      }
      function get_name(){
      	return $this->name;
      }
      function get_color(){
      	return $this->color;
      }
  }
    $result= new constraction('banana','white');
    echo $result->get_name()."<br>";
    echo $result->get_color();
?>