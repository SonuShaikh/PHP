<?php
  include '4_SessionSet.php';
   if(isset($_SESSION['Name'],$_SESSION['Age'])){
	   if(!empty($_SESSION['Name']) AND !empty($_SESSION['Age'])){
		echo 'Welcome '.$_SESSION['Name'].' Your are '.$_SESSION['Age'].' Years Old.';
	   }
   else{
	   echo 'Your Session Dont Have Value.';
   }
 }else{
	// echo 'Your Session Is Unset';
 }
 
?>