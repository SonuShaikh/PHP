<?php
  
   function add($num1,$num2){
	   return ($num1+$num2);
   }
   
   function division($num1,$num2){
	   return $num1/$num2;
   }
   echo division(add(10,10),add(5,5)) * 100;
?>