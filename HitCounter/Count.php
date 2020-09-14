<?php
 
   function hit_count() {
	    $file = 'count.txt';
	   $handle = fopen($file,'r');
	   $current = fread($handle,filesize($file));
	   fclose($handle);
	   $current_inc = $current + 1;
	   
	   $handle = fopen($file,'w');
	   fwrite($handle,$current_inc);
	   fclose($handle); 
	   
	    
		
		
	   
	   /* $ip_address = $_SERVER['REMOTE_ADDR'];
	   $ip_file = file('ip.txt');
	   foreach($ip_file as $ip) {
		   $ip_single = trim($ip);
		   if($ip_address == $ip_single) {
			   $found = true;
			   break;
		   } else {
			   $found = false;
		   }
		   
		   if($found = true) {
			   echo 'Ip Found';
		   } else {
			   echo 'Ip Does Not Found';
		   }
	   } */
	   
   }

?>