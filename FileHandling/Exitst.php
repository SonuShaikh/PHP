<?php

$file = 'DataFile.txt';
   echo $filenew = md5($file);//rand(10,20).md5($file).rand(1,10);
   
   die();
   if(file_exists($file)) {
	   echo $file.' Exists';
   } else {
	   echo $file.' Does Not Exists';
   }

?>