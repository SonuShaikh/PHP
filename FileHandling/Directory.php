<?php
  
   $directory = 'C:/Users/sonu/Desktop/Java';
   if($handle = opendir($directory.'/')){
	   echo 'Look Inside \''.$directory.'\'<br/>';
	   while($file = readdir($handle)){
		   if($file !='.'&&$file !='..'&&$file !='desktop.ini'){
			  echo $file.'<br/>';
			   echo  '<a href="'.$directory.'/'.$file.'</a><br/>';
		   }
	   }
   }
   

?>