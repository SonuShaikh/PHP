<?php
  $string = 'This is a String';
  
  if(preg_match('/is/',$string)){
	  echo 'Match Found';
  }else{
	  echo 'Match Not Found';
  }
?>