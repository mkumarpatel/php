<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validaton Form</title>
	<style type="text/css">
		form{
			width: 50%;
			margin: auto;
			border: 1px solid grey;
			border-radius: 10px;
			padding: 6px 15px;
		}
		input{
			width: 100%;
			padding: 10px 0px;
			margin-bottom: 10px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
     	<div class="form-group">
     		<label>Name</label>
     		<input  type="text" name="name">
     		<span><?php echo $nerror; ?></span>
     	</div>
     	<div class="form-group">
     		<label>Class</label>
     		<input type="text" name="class">
     		<span><?php echo $cerror; ?></span>

     	</div>
     	<div class="form-group">
     		<label>Number</label>
     		<input type="text" name="number">
     		<span><?php echo $numerror; ?></span>

     	</div>
     	<div class="form-group">
     		<label>Email</label>
     		<input type="text" name="email">
     		<span><?php echo $eerror; ?></span>

     	</div>
     	<div class="form-group">
     		<label>Password</label>
     		<input type="text" name="password">
     		<span><?php echo $perror; ?></span>

     	</div>
     	<div class="form-group">
     		<label>Confirm</label>
     		<input type="text" name="Confirm">
     		<span><?php echo $conerror; ?></span>

     	</div>
     	<div class="form-group">
     		<label>pincode</label>
     		<input type="text" name="pincode">
     		<span><?php echo $pinerror; ?></span>

     	</div>
     	<div style="margin:auto; width: 100%;">
     	 <button style="width:50%; margin: auto 25%; padding: 10px 0px; border-radius: 10px;">Submit</button>
     	</div>
     </form> 
</body>
<?php
         $nerror= $cerror= $eerror= $conerror= $pinerror= $perror= $numerror="";
         $name= $class= $number= $email= $password= $cofirm= $pincode="";
         
         if($_SERVER["REQUEST_METHOD"] == "POST"){
      	if(empty($_POST['name'])){
      		$nerror= 'name is requard';
      	}else{
      		$name=test_input($_POST['name']);
      	}
      	
      	if(empty($_POST['class'])){
      		$cerror="name is Requard";
      	}else{
      		$email=test_input($_POST['class']);
      	}
      	
      	if(empty($_POST['email'])){

           $eerror="email Requard";   
      	}else{
      		  $email = test_input($_POST["email"]);  
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)){  
               $emailErr = "Invalid email format";  
          } 

      	}
      }


       function test_input($data){

          $data=htmlspecialchars($data);
       }
 ?>
</html>