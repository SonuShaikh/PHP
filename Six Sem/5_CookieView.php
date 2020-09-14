<?php
   
  if(isset($_COOKIE['Name']) AND !empty($_COOKIE['Name'])){
	  echo 'Welcome '.$_COOKIE['Name'];
  }else{
	  echo 'Your Cookie Has been Expiered';
  }
?>