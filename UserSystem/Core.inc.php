<?php
  ob_start();
  session_start();
  if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
	  $http_referer = $_SERVER['HTTP_REFERER'];
  }
  
  $scriptname = $_SERVER['SCRIPT_NAME'];
 
     function Logedin() {
		 if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
		    return true;			
		 } else {
			 return false;			
		 }
	 }
    function getfield($field) {
		
		   $query = "SELECT `$field` FROM `login` WHERE `Id`='".$_SESSION['userid']."'";
		 if($run_query = mysql_query($query)) {
			 if($query_result = mysql_result($run_query,0,$field)) {
				 echo $query_result;
			 }
		 }  
	 }
?>