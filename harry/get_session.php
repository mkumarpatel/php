<?php 
               

               session_start();


              if(isset($_SESSION['username'])){
              echo "welcome".$_SESSION['username'];
               echo "<br>";
              echo "Your Favorite is categoary". $_SESSION['favtcat'];
              echo "<br>";
          }else{
          	echo "please again try";
          }
?>