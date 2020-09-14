<?php
 
  $find = array('is','sonu','Anita');
  $replace = array('IS','SOnu','ANtita');
  $string = 'Hey My Name is sonu and Anita is my Friend';
  $new_string = str_replace($find,$replace,$string);
  echo $new_string;
?>