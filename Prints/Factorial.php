
<?php
    $fact = 1;
	$i = 1;
    do {
		echo $fact *= $i ;
		$i++;
	} while ($i<=10);
	echo 'The Factorial of First Ten Number is : '.$fact;
	

?>

<!--
OutPut:
The Factorial of First Ten Number is : 3628800
-->