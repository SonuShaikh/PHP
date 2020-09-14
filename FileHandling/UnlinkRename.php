<?php
   
    $file = 'Datafile.txt';
    

	if(file_exists($file)){
		
	  $new_file = rename($file, rand (1,10).'txt');	  
	    echo 'File <strong>'.$file.'</strong> Rename To <strong>'.$new_file.'</strong>';
		  if(unlink ($new_file.'.txt')){
			  echo '<br/> and deleted ';
		  }
		 
	} else {
		  
		if($handle = fopen($file,'w')){
			echo 'File Created Yet';
		} else {
			echo 'File Not Created Yet';
		}
	}
 ?>