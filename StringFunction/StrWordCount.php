<?php
  
   $name = 'Anita, Dapke, Shaikh, Sonu, Sahil, Salman, Khan, Anu,';
   $name_word_count = str_word_count($name,2,',');
   print_r ($name_word_count);
   
   $string = '1234567890';
   echo '<br>'.$string_shuffel = str_shuffle($string);
   
   echo '<br>Half of the Stirng '.$half = substr($string_shuffel,0,strlen($string)/2);
   
   echo '<br>Reverse String is Equal To The '.$Reverse = strrev($string);
?>