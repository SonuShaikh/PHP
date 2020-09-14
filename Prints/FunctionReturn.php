<?php

      function Addition($num1,$num2) {
		return  $num1 + $num2;
		
	}
	  function Division ($num1,$num2) {
		  $div =  $num1 / $num2;
		  echo "$num1 / $num2 =" .$div. '<br/>';
	  }
	  
	 Division(Addition(50,50),Addition(5,5));
	  
 
?>
<!--
Output :
100 / 10 =10
-->