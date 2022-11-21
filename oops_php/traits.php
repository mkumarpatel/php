<?php 
  // trait hello{

  // 	function seyhello(){
  // 		echo "hello everyone <br>";
  // 	}
  // }
  // trait bay{

  // 	function seybay(){
  // 		echo "bay bay everyone";
  // 	}
  // }
  // class base{
  // 	use hello,bay;
  // }
  // $test= new base();
  // $test->seyhello()."<br>";
  // $test->seybay();







  // trait base{
  // 	private function show(){
  // 		echo "hi hello mukesh";
  // 	}
  // }
  //  class person{
  //  	use base{
  //  		base::show as public;
  //  	}
  //  }
  //  $test = new person();
  //  $test->show()

  trait add{

  	public function add($a,$b){
        return $a + $b;
  	}
  }
  	trait writer{
  	public function  multi($a,$b){
  		return $a * $b;
  	}
  }
   class file{
   	use add;
   	use writer;
   	 public function calc($a,$b){
   	 	echo "Result Of Addition".$this->add($a,$b)."\n \n \n";
   	 	echo "Result Of Multplication".$this->multi($a,$b);
   	 }
   }
   $show=new file();
   $show->calc(10,5);
   // $show->writer(5,5);
?>