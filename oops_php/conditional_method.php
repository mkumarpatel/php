<?php

  class myclass{

  }
  if(class_exists('myclass')){
  	echo "class is exits";
  }
  else{
  	echo "class is not exits";
  }
  echo "<br> <br> <br>";

  interface myinterface{

  }
  if(interface_exists('myinterface')){
  	echo "this interface is exits";

  	class myclass implement myinterface{

  	}

  }
  else{
  	echo "this interface not exits";

  }





  class method{

  	function mymethod(){

  	}
  }
  $obj = new method();

  if(method_exists($obj, mymethod)){
  	echo "this method is exits";

  }else{
  	echo "this method not is exits";

  }
?>