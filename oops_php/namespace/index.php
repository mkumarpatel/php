<?php

  require 'product.php';
  require 'testing.php';

   function wow(){
    echo "this is testing wow page";
   }

  $test= new testing\product();
  // $test= new product\product();
   testing\wow();
?>