<?php
   
       @  $name = $_FILES['file']['name'];
	   @  $type = $_FILES['file']['type'];
	   @  $size = $_FILES['file']['size'];
	   @  $temp_name = $_FILES['file']['tmp_name'];
	   
	   $extension = strtolower(substr($name,strpos($name,'.') + 1));
	  
	   if(isset($name)){
		  if(!empty($name)){
			  
			  if($extension == 'png' OR $extension == 'jpeg'  OR $extension == 'jpg'){
				  
				  if($size < 2097152){
					   $location = 'Uplode/';
			    
				    if(move_uploaded_file($temp_name,$location.$name)){
					
					echo 'File Uploded Successfuly.';
					
				   } else {
					echo 'There is An Error.';
				    }
			 } else {
					  echo 'File Should Be less Than 2mb';
				  }
				 
			  } else {
				  echo 'File Should Be in png or jpeg or jpg Format';
			  }
				
		  } else {
			  echo 'Please Fill In The File';
		  }
	  } 

?>
  <form action='Uplode.php' method = 'POST' enctype = 'multipart/form-data' >
  
            <input type='file' name = 'file' /><br/><br/>
			<input type='submit' value='Submit'/>
  
  </form>