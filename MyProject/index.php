
<html>
	<head>
	    <link rel="stylesheet" href="main.css">
	</head>
	<body>
		<?php
			 
			 require 'Core.inc.php';
			 require 'Connect.inc.php';
			
			 
			 
			 if(logedin()) {
				 
				  $name = getfield('User_Name');
				 echo $name.' You loged in Successfuly. <br/> <a href="Logout.php"> Logout</a>';
				 
			 } else {
				  include 'LoginForm.php';
			 }
			
			
		?>
	</body>
<html>