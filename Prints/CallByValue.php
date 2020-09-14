<?php
// Function Using Call By value
   
    function Addition($num1,$num2) {
		$add = $num1 + $num2;
		echo 'Addition Of Two Numbers is '.$add.'<br/>';
	}
	
	Addition(20,30);
	Addition(10,16);
?>
<!--
Output :
Addition Of Two Numbers is 50
Addition Of Two Numbers is 26
-->