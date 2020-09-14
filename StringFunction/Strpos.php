<?php
	
	$offset = 0;
	$find = 'Anita';
	$find_length = strlen($find);
	$string = '  Anita is a Cute girl and Anita is my bf';
	
	while ($string_position = strpos($string, $find,$offset)){
		echo '<strong>'. $find. ' </strong> is Fount at '.$string_position.'<br>';
		$offset = $string_position + $find_length;
	}
?>