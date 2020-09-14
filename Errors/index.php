<?php

   $age = 15;
   try{
	   if($age>18) {
		   echo 'You Old Enougth';
	   } else {
		   throw new Exception('You are too young..!');
	   }
   } catch(Exception $ex){
	   echo 'Error:'.$ex->getMessage();
   }
?>