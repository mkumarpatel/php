<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Introdaction</title>
	<?php
	if(isset($_POST['save'])){
		if(empty($_POST['name'])){

			$name="name is requard";
		}else{
			 $name=test_input($_POST['name']);
		}

		 return false;
	}
	  function test_input(){

	  }

	  ?>
</head>
<body>
        <form method="post" action="index.php">
        	<div class="form-group">
        	    <label>Name</label>
        	    <input type="text" name="name">
            </div>
            <div class="form-group">
            	 <label>Email</label>
            	 <input type="email" name="email">
            </div>
            <div class="form-group">
            	<input type="submit" name="Submit" value="save">
            </div>
        </form>
</body> 
   <script type="text/javascript"></script>
</html>