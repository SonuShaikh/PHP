<?php

     function Fact($num ) {
		 if($num < 2) {
			 return 1;
		 } else {
			 return ($num * Fact($num-1));
		 }
	 }
	  echo 'Factorial of 5 <br/>'.Fact(5);

?>
<!--
Output :
Factorial of 5 
120
-->