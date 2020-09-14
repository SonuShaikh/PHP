<?php
 
 echo '31eeeee3af526dd890fd6f99d5234ca1'; 
 echo '<br/>--------------------------<br/>';
      if(isset($_POST['User_pass'])) {
		 $u_pass = md5($_POST['User_pass']);
		 if(!empty($u_pass)) {
			  $file = 'hash.txt';
			 $handle = fopen($file,'r');
			 $file_pass = fread($handle,filesize($file));
			 
			 if($u_pass == $file_pass) {
				 echo 'Match Found';
			 } else {
				 echo $u_pass;
				 //echo 'Match Does Not Found';
			 } 
			 
		 }
	 }  
 
?>
<form action = 'index.php' method = 'POST'>

  Password:<input type = 'text' name ='User_pass'/><br/><br/>
  <input type='submit' value = 'Submit'/>

</form>