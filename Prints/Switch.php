<?php
   
   $a = 10;
   $b = 20;
   $n = 3;
   switch($n) {
	   case 1:
	    echo 'Additon of '.$a.' And '.$b.' is '.($a+$b);
		  break;
	   case 2:
	    echo 'Subtration  of '.$a.' And '.$b.' is '.($a-$b);
		  break;
       case 3:
	     echo 'Multiplicaton of '.$a.' And '.$b.' is '.($a*$b);
		  break;
       case 4:
	    echo 'Division of '.$a.' And '.$b.' is '.($a/$b);
		  break;
       default :
         echo 'Enter The Valid Number To Perform Operation.';	   
   }

?>
<!--

output :
   Multiplicaton of 10 And 20 is 200
   -->