<?php
   $food = array('Helthy'=> 
							array('salad','soop','banana','greps'),
				 'Unhelthy'=>
							array('Pizaa','Meet','bacon'));
							
	   foreach($food as $element => $innerArry){
		   echo '<strong>'.$element.' Food </strong> <br/>';
		   foreach($innerArry as $item){
			   echo $item.'<br/>';
		   }
	   }
   
?>
<!--
Output:
Helthy Food  
salad
soop
banana
greps
Unhelthy Food  
Pizaa
Meet
bacon
-->