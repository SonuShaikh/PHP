<?php
   $file = 'DataFile.txt';
  $fhandle = fopen($file,'r');
  $datain = fread($fhandle, filesize($file));
  $name_array = explode(',',$datain);
  
  foreach($name_array as $name){
	  echo $name.'<br/>';
  }

?>