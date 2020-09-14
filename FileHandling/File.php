<?php
  if(isset($_POST['Name']) ){
	  $name = $_POST['Name'];
	  if(!empty($name)){
		  $fhandle = fopen('DataFile.txt','a');
		  fwrite($fhandle,$name."\n");
		  fclose($fhandle);
		  $count = 1;
		  $fread = file('DataFile.txt');
		  $file_count = count($fread);
          foreach($fread as $value){
			  echo trim($value);
			  if($count < $file_count){
				  echo ', ';
			  }
			  $count++;
		  }		  
	  }else{
		  echo 'Enter A Name Please';
	  }
  }

?>
<form action = 'file.php' method = 'POST'>
    <label>Enter Name</label> <input type = 'Text' name = 'Name' maxlength = '15'/>
	<input type = 'submit' value ='Submit'/>
</form>