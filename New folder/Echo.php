<?php
	function add($num1,$num2){
		$result = $num1 + $num2;
		return $result;
	}
	
//echo 'Sumation is '.add(100,200);
	
	function divide($num1, $num2){
		$result = $num1/$num2;
		return $result;
	}
	
	echo divide(add(10,10),add(5,5));
?>