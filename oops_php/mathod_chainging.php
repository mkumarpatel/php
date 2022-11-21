 <?php 
 class change{

 	public function first(){
 		echo "This is first function <br>";
 		return $this;
 	}
 	public function second(){
 		echo "This is Second function <br>";
 		return $this;
 		
 	}
 	public function third(){
 		echo "This is third function";
 	}
 }
  $test = new change() ;
  $test->first()->second()->third();

 ?>