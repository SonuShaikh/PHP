<?php
 require 'Connect.inc.php';
 if(isset($_POST['username'],$_POST['password'],$_POST['passagain'],$_POST['email'])){
	 $username  = mysql_real_escape_string($_POST['username']);
	 $password  = mysql_real_escape_string($_POST['password']);
	 $passagain = mysql_real_escape_string($_POST['passagain']);
	 $email     = mysql_real_escape_string($_POST['email']);
	 if(!empty($username) && !empty($password) && !empty($passagain) && !empty($email)){
		 $u_len = strlen($username);
		 $p_len = strlen($password);
		 
		 if($u_len <= 4){
			 echo 'User Name Should be greate than 4 charaters';
		 }else{
			 if($p_len <= 4){
				 echo 'Password Should be greate than 4 charaters';
			 }else{
				 if($password != $passagain){
					 echo 'Password Mismatch';
				 }else{
					 $select_query = "SELECT count(`user_name`) FROM `Login_tbl` WHERE `user_name`='$username'";
					 if($select_result = mysql_query($select_query)){
						 $result = mysql_result($select_result,0);
						 if($result >= 1){
							 echo 'User Name Already Exist';
						 }else{							 
							 $password = md5($password);
							 $query = "INSERT INTO `Login_tbl`(`user_name`,`password`,`email`) VALUES ('$username','$password','$email')";
							 if($query_run = mysql_query($query)){
								 echo 'Register Successfuly. Try '."<a href='index.php'>Login</a>".'';
							 }else{
								 echo mysql_error();
							 }
				          }
					 }else{
						 echo mysql_error();
					 }
				 }
			 }
		 }
		
	 }else{ 
		 echo 'Fill In The All Fields.';
	 }
 }
?>
<form action="Register.php" method="POST">
   <label>UserName:</label> <br/>
   <input type="text" name="username" value='<?php if(isset($username)) echo $username; ?>'/><br/>
   <label>Password:</label> <br/>
   <input type="password" name="password"/ > <br/>
   <label>Password Again:</label> <br/>
   <input type="password" name="passagain"/> <br/>
   <label>Email:</label> <br/>
   <input type="text" name="email" value='<?php if(isset($email)) echo $email; ?>'/> <br/>
   <input type="submit" name="submit" value="Register"/>
</form>


