<?php
  function __autoload($name){
      require "auto/". $name . ".php";
  }
  $test= new first();
  $test1=new second();
?>