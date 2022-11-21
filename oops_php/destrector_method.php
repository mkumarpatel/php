<?php 
  class abc{

  	function __construct(){
      echo "this is __construct function <br>";
  	}
  	function hello(){
      echo "this is hello personal function <br>";
  	}
  	function __destruct(){
      echo "this is __destruct function <br>";
  	}
  }
  $test = new abc();
  $test->hello();


  class abcd{

  	private $conn;

  	function __construct(){
  		$this->conn=mysqli_query();
  	}
  	function hello(){
        echo "this is hello personal function <br>";

  	}
  	function __destruct(){
  		$this->conn=mysqli_close();
  	}
  }
  $test = new abcd();
  $test->abcd();
?>