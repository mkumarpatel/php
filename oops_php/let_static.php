<?php
 class base{

 	protected static $name = "Mukesh";

 	public function show(){
        echo self::$name;
        echo static::$name;
 	}
 }
  class draived extends base{
  	protected static $name=" Patel";
  }
  $test = new draived ();
  $test->show();
?>