<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Class/Objects</title>
</head>
<body>
    <?php 
     error_reporting(0);
     class Fruit{
     	public $name;
     	public $color;

     	function set_name($name){
     		$this->name = $name;
     	}
     	function get_name(){
     		return $this->name;
     	}
     	function set_color($color){
     		$this->color = $color;
     	}
     	function get_color(){
     		return $this->color;
     	}
     }
       $apple = new Fruit();
       $apple-> set_name('apple');
       $apple-> set_color('red');

       echo "name=".$apple->get_name()."<br>";
       echo "color=".$apple->get_color();
    ?>
</body>
</html>