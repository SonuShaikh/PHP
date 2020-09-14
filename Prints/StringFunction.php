<?php

    $string = 'This is My First php String programs.';
	
	echo 'Original String :  '.$string.'<br/>';
	echo 'Length Of The String is : '.strlen($string).'<br/>';
	echo 'String in Upper Case: '.strtoupper($string).'<br/>';
	echo 'String in Upper Case: '.strtolower($string).'<br/>';
	echo 'First  \'M\' In A String Appera At '.strpos($string,'M').' Position. <br/>';
	echo 'String After Replacing :<br/>'.str_replace('String','String Function',$string);

?>
<!--
Output:
 Original String : This is My First php String programs.
Length Of The String is : 37
String in Upper Case: THIS IS MY FIRST PHP STRING PROGRAMS.
String in Upper Case: this is my first php string programs.
First 'M' In A String Appera At 8 Position. 
String After Replacing :
This is My First php String Function programs.
-->