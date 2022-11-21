<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Start Opps</title>
</head>
<body>
       <?php 
         
         class calucation
         {
           public $a,$b,$c;
            
            function sum(){
            	$this->c= $this-> a + $this-> b;
            	return $this->c;
            }

            function sub(){
                $this->c = $this-> a - $this-> b;
                return $this->c;  
            }
            function man(){
            	$this->c = $this-> a * $this-> b;
            	return $this->c; 
            }
            
            }

            $c1 = new calucation();

            $c1->a=10;
            $c1->b=20;

            $c2 = new calucation();

            $c2->a=10;
            $c2->b=20;

            $c3= new calucation();
            $c3->a=10;
            $c3->b=10;


             echo "Value of sum =". $c1->sum()."<br>";
             echo $c2->sub()."<br>";
             echo $c1->sub()."<br>";
             echo $c3->man();
       ?>
</body>
</html>