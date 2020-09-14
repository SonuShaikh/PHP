<?php
   
    $name = Array('Sonu'=>79.49,'Anita'=>85.23,'Ashish'=>71.00,'Mayur'=>81.85);
	
	echo 'Assesing Array Using Key Index <br/>';
	
	echo 'Sonu '.$name['Sonu'].'<br/>';
	echo 'Anita '.$name['Anita'].'<br/>';
	echo 'Displaying All Array.<br/>';
	print_r($name);
	
    
?>
<!--
 Output :
 Assesing Array Using Key Index 
Sonu 79.49
Anita 85.23
Displaying All Array.
Array ( [Sonu] => 79.49 [Anita] => 85.23 [Ashish] => 71 [Mayur] => 81.85 ) 
-->