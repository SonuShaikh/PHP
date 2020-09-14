<?php
      require 'include.inc.php';
	 foreach($ip_blocked as $ip){
		 if($ip == $ip_address){
			 die('Your Ip Address '.$ip_address.' has been blocked');
		 }
	 }
?>
<h1>Welcome</h1>