<?php

  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_pass = '';
  $mysql_db = 's_database';
     if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) Or !@mysql_select_db($mysql_db)) {
		 echo mysql_error();
	 } 

?>