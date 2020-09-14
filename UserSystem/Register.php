<?php
  require 'Core.inc.php';
  require 'Connect.inc.php';
  
  if(Logedin() == true) {
	  echo 'You are allready loged in.'; 
  } elseif (Logedin() == false) {
	  if(isset($_POST['Uname']) && isset($_POST['pass']) && isset($_POST['passA']) && isset($_POST['FirstName']) && isset($_POST['SurName'])) {
		  $uname = $_POST['Uname'];
		  $pass = $_POST['pass'];
		  $pass_hash = md5($pass);
		  $passA = $_POST['passA'];
		  $FirstName = $_POST['FirstName'];
		  $SurName = $_POST['SurName'];
		  
		  if(!empty($uname) && !empty($pass) && !empty($passA) && !empty($FirstName) && !empty($SurName)) {
			  if(strlen($uname)>30 || strlen($FirstName) > 30 || strlen($SurName) > 30 ) {
				  echo 'Please aheare maxlength.';
			  }	 else {
				 if($pass != $passA) {
					  echo 'Password do not match.';
				  } else {
					    if(strlen($pass)<=4) {
							echo 'Password Should be longer than 4 character.';
						} else {
					  
					  $query = "SELECT `User_Name` FROM `login` WHERE `User_Name` = '".$uname."'";
					  if($query_run = mysql_query($query)) {
						  if(mysql_num_rows($query_run) >= 1 ) {
							  echo 'User Name Already Exist. Try Another One.';
						  } else if (mysql_num_rows($query_run) == 0) {
							 $query2 = "INSERT INTO `login` VALUE(NULL,'".$uname."','".$pass_hash."','".$FirstName."','".$SurName."')"; 
							 if($query_run2 = mysql_query($query2)) {
								 echo 'Register Succesfully';
							 } else {
								 
								echo 'Sorry You Could\'t Register Yet. Try Later.';
							 }						  
						  }
					  } 
					  
				}
						}
			  } 
				 } else {
					  echo 'All Field Are Menditory.';
				  }
	  }
  }
?>
<form action = 'Register.php' method = 'POST'>
      UserName:<br/><input type='text' name='Uname' size='25' maxlength = "30" value = '<?php if(isset($uname)){ echo $uname;} ?>' /><br/><br/>
      Password:<br/><input type='password' name='pass' size='25'  />  <br/><br/>
      Password Again:<br/><input type='password' name='passA' size='25'  /><br/><br/>
      First Name:<br/><input type='text' name='FirstName' size='25' maxlength = "30" value = '<?php if(isset($FirstName)){ echo $FirstName;} ?>' /><br/><br/>
      Sur Name:<br/><input type='text' name='SurName' size='25' maxlength = "30" value = '<?php if(isset($SurName)){echo $SurName;} ?>'  /><br/><br/>
	  <input type = 'submit' value = 'Register'/>
</form>