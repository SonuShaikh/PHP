
<?php
   session_start();
   ob_start();
   
   $url = true ;
   if($url == true)
   {
	    header("Location: header.php");
   } else {
	   echo 'Error';
   }
		echo 'What the heck';
      
?>