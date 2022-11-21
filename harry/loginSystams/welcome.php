<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome- <?php $_SESSION['email'];   ?></title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
   <?php
      include'connection.php';
      session_start();

      if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'])!=true){
        header("location: login.php");
        exit:
      }
                

   ?>
</head>
<body>
    <?php include'header.php'; ?>
     welcome- <?php echo $_SESSION['email'];   ?>
    
 <div class="container my-4">
 	      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['email']?></h4>
      <p>Hey how are you doing? Welcome to iSecure. You are logged in as <?php echo $_SESSION['username']?>. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php"> using this link.</a></p>
 </div>

</body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</html>