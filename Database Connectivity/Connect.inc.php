<?php
 $hostname = 'localhost';
 $hostUser = 'root';
 $hostPass = '';
 $database = 'Demo';
 if(!mysql_connect($hostname,$hostUser,$hostPass) or !mysql_select_db($database)){
	 echo 'Not Connected Yet';
 }
?>