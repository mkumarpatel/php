<?php 

   // class hello{

   // 	   public function sayhello(){

   // 	   	 echo "hello everyone";
   // 	   }
   // }
   // class bay{

   // 	  public function saybay(){
   // 	  	echo " bay everyone";
   // 	  }
   // }
   //  function wow(hello $c){
   //  	$c->sayhello();
   //  }

   //  $test= new hello();
   //  wow($test);


   class school{

   	function Myschool($names){
   		echo "<ol>";
   		foreach ($names->classment() as $name) {
   			echo "<li>".$name."</li>";
   		}
   		echo "</ol>";
   	}
   }
   class student{

   	  function classment(){
   	  	return ["mukesh","sunil","prakash","jagdish","duds"];
   	  }
   }
    $sch=new school();
    $stu=new student();
    $sch->Myschool($stu);
   
?>