<?php
   require 'Connect.inc.php';
   $user_ip = $_SERVER['REMOTE_ADDR'];
   
   
   function ip_exists($ip) {
	   global $user_ip;
	   $query = "SELECT `Ip` FROM `hit_ip` WHERE `Ip`='$user_ip'";
	   $query_run = mysql_query($query);
	   $query_num_rows = mysql_num_rows($query_run);
	   
	   if($query_num_rows == 0) {
		   return false;
	   } elseif ($query_num_rows >= 1) {
		   return true;
	   }
   }
   
   function ip_add($ip) {
	   $query = "INSERT INTO `hit_ip` VALUES('$ip')";
	   $query_run = mysql_query($query);
   }
   
   function update_count() {
	   $query = "SELECT `Count` FROM `hit_count`";
	   if($query_run = mysql_query($query)) {
		   $count = mysql_result($query_run,0,'Count');
		  $count_inc = $count + 1;
		  $update_query = "UPDATE `hit_count` SET `Count`='$count_inc'";
		  $update_query_run = mysql_query($update_query) ;
	   } 
   }
   if(!ip_exists($user_ip)) {
	   update_count();
	   ip_add($user_ip);
   } 

?>