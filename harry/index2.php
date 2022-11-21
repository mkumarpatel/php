<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <?php
     // error_reporting(0);
    $ftr= readfile("file.txt","r");

      echo fgets("$ftr");
    ?>
</body>
</html>