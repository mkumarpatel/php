<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
   <?php
        include 'connection.php';
         $login=false;
         $showArror=false;
        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $pass=$_POST['password'];

            $sel= "SELECT * FROM `contactus` where `email`='$email' AND `pass`='$pass'";

              $result=mysqli_query($conn,$sel);
              $num=mysqli_num_rows($result);
              if($num>1){
                          while($row=mysqli_fetch_assoc($result)){
            if (password_verify($pass, $row['pass'])){ 

                 $login=true;
                  session_start();
                 $_SESSION['loggedin']=true;
                 $_SESSION['email']=$email;

                 header("location:welcome.php");

              }
          }
          }else{
            $showArror="Invalid Email and Password!";
        } 
        } 
     

   ?>
</head>
<body>
    <?php include'header.php'; ?>
    <?php
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>successs!</strong> You are logged!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
   if($showArror){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Invalid Email and Password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

 ?>
 <div class="container">
 	<h3 class="text-center">Login Pages</h3>
     <form  method="post" class="w-50 m-auto">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
   
  
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>
 </div>

</body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</html>