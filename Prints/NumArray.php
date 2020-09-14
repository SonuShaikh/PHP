<?php

   $numbers = Array(9,8,7,6,5,4,3,2,1);
   
   $count = count($numbers);
   echo 'Unsorted Array:<br/>';
      for($i=0;$i<$count;$i++) {
		  echo $numbers[$i].'<br/>';
		   
	  }
	  sort($numbers);
	  echo 'sorted Array:<br/>';
      for($i=0;$i<$count;$i++) {
		  echo $numbers[$i].'<br/>';
		   
	  }

?>
<!--
OutPut:
Unsorted Array:
9
8
7
6
5
4
3
2
1
sorted Array:
1
2
3
4
5
6
7
8
9
-->