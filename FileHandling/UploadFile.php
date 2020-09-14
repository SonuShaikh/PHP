<?php
      @$name = $_FILES['file']['name'];
	  @$type = $_FILES['file']['type'];
	  @$size = $_FILES['file']['size'];
      @$tem_name = $_FILES['file']['tmp_name'];	
      $extension  = strtolower(substr($name,strpos($name,'.')+1));
      if(isset($name)){
		  if(!empty($name)){
			  if($extension=='png' or $extension=='jpg' or $extension=='jpeg' ){
				 if($size <= 2097152){
					$location = 'uplode/';
					if(move_uploaded_file($tem_name,$location.$name)){
						echo 'File Uploaded Successfuly';
					}else{
						echo 'Error Ocured';
					}
				 }else{
					 echo 'Too large file';
				 }
			  }else{
				  echo 'Only png or jpg or jpeg file are allowed';
			  }
		  }else{
			  echo 'Upload File';
		  }
	  }  
	 
?>
<form action="UploadFile.php" method="Post" enctype="multipart/form-data">
      <input type="file" name="file"/>
	  <input type="submit" value="submit" />
</form>