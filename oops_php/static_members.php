<?php
 // class personal{

 // 	  public static $name = "Mukesh Patel";

 // 	 public static function show(){
 //         echo self::$name;
 // 	 }
 // }
 // // $test= new personal();
 // // $test->show();
 //    personal::$name;
 //    personal::show();

  
  // class myCar{

  // 	public static $color= "green";

  // 	public static function getCar(){
  // 		return  self::$color;
  // 	}
  // 	public static function getCarInfo(){
  // 	   return self::$color;
  // 	}

  // }
  //  echo "myCar color = ".myCar::getCarInfo();

   class basic{

   	  public static $name="mukesh";

   }
   class draived extends basic{
      public static function show(){
      	echo "My Name Is :-". self::$name;
      }
   }
   $test = new draived();
   $test->show();
?>