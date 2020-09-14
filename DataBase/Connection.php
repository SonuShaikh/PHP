<?php
	
     mysql_connect('127.0.0.1','root','') or die('Could not connected');
	 echo 'connected to Server<br/>';
	 mysql_select_db('database') or die('Could not Find The Database');
	 echo 'connected to Database<br/>';
	 
	 $quety = "SELECT * From `field`";
	 //$insert = "INSERT INTO `database.field` Values 'Anita'";
	 mysql_query($insert);
	 if($run = mysql_query($quety)){
		
		while ($Qrow = mysql_fetch_assoc($run)){
			$Name = $Qrow['Name'];
			echo 'Computer User Are '.$Name.'<br/>';
		}
	 }
	 else{
		 echo mysql_error();
	 }
?>