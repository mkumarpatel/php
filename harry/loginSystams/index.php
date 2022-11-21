 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ragistration From</title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">

</head>
<body>
 <?php
    $showalert= false;
    $showArror=false;
    $conn=mysqli_connect('localhost','root','','harry');
     if($conn){
     	echo "connect";
     }else{
     	echo "not connect";
     }

   if(isset($_POST['submit'])){
   	 $email=$_POST['email'];
   	 $pass=$_POST['password'];
   	 $cpass=$_POST['cpassword'];
        
        $existsql="SELECT * FROM `contactus` where email = '$email'";
        $result= mysqli_query($conn,$existsql);
        $numExistRows = mysqli_num_rows($result);
         if($numExistRows > 0){
             $showArror = "email alredy exists";
         }else{
   	       if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
   	 	$sql= "INSERT INTO `contactus`(`email`,`pass`,`dt`) VALUES ('$email','$hash',current_timestamp())";

   	    $result=mysqli_query($conn,$sql);
   	      if($result){
   	      	$showalert= true;
   	    }
   	  }else{
   	 	 $showArror = "password do not match";
   	}
   }
 }
   ?>
   <?php include "header.php";?>
    <?php
    if($showalert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>successs!</strong> You account is now created and you can login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
   if($showArror){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> password is no match:-
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

 ?>
 <div class="container">
 	<h3 class="text-center">Registration Form</h3>
     <form  method="post" class="w-50 m-auto">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
   <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>

</body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</html>