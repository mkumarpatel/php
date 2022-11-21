<?php
   class assec{

   	    private $name;

   	    public function __construct($n){
   	    	$this->name=$n;
   	    }
   	    private function show(){
   	    	echo "Public Name =".$this->name;
   	    }
   	    

   }
     class draived extends assec {
   	    	public function get(){
   	    	echo "Public Name = ".$this->name;
   	    }
   	    }
    $test= new draived('mukesh');
     $test->get();
?>