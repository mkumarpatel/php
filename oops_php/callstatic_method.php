<?php 
  class students{
       
         private static function hello($name){
            echo $name;
         }

         public static function __callstatic($method, $args){
            
            if(method_exists(__class__, $method)){
            	call_user_func_array([__class__, $method], $args);
            }else{
            	echo "does not method : $method";
            }
         }

  }
    students::hello("mukesh Patel");
 ?>