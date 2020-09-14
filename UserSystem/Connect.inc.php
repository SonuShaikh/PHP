<?php
    
	 $localhost = 'localhost';
	 $username = 'root';
	 $password = '';
	 $database = 's_database';
       
    if(!mysql_connect($localhost,$username,$password) or !mysql_select_db($database)) {
		echo mysql_error();
	}  

?>