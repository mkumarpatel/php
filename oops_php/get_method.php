<?php 
   
     // class abc{
     //     public  $data=['name'=>'mukesh','village'=>'nai undary','distic'=>'barmer','country'=>'india'];
     // 	 public function __get($proparty){
     // 	 	echo "You are traying to access non Exiting to Parivet Proprty($proparty)";
     // 	 }
     // }
     // $test= new abc();
     //  echo $test->mukesh;


    class abcd{

         public  $data=['name'=>'mukesh','village'=>'nai undary','distic'=>'barmer','country'=>'india'];
         public function __get($key){
              if(array_key_exists($key, $this->data)){
              	return $this->data[$key];
              }else{
              	echo "this key ($key) not defiends";
              }
         }

    }
     $test= new abcd();
      echo $test->village,name;

 ?>