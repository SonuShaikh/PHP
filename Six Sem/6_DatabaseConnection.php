<?php
  // Connecting to server 
 mysql_connect('localhost','root','') or die('Could not connected to server.');
 // Setting connection to database
 mysql_select_db('demo') or die('Database Could not Found.'); 
 
 if(!mysql_connect('localhost','root','')){
	 echo 'Could Not Connected To Sever.';
 }else{
	 if(!mysql_select_db('demo')){
		 echo 'Database Could Not Found.';
	 }else{
		 echo 'Connection Properly Established.';
	 }
 }
 
?>