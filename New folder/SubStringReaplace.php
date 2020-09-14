<?php
  
   $string = 'This part don\'t search. This part search';
   $string_new = substr_replace($string,'Sonu',29,4);
   echo $string_new;
?>