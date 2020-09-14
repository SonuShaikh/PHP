<?php
  Require 'Set.php';
  
 /*  $User_name = @$_SESSION['username'];
  
  
 if(isset($User_name)){
	  echo 'Welcome, '.$User_name.' your are '.$_SESSION['age'];
  }else{
	  echo 'Please Log In';
  }  */
  
   IF(ISSET($_COOKIE['username'])){
	   ECHO 'Welcome '.$_COOKIE['username'];
   }else{
	   echo 'Your coocki has been expire.';
   }
  
?>