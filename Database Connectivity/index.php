<?php
require 'Connect.inc.php';
session_start();
 if(isset($_POST['username'],$_POST['password'])){
	 $user_name = $_POST['username'];
	 $user_pass = md5($_POST['password']);
	 if(!empty($user_name) And !empty($user_pass)){
		 $query = "SELECT `id` FROM `Login_tbl` WHERE `user_name`='".mysql_real_escape_string($user_name)."' AND `password`='".mysql_real_escape_string($user_pass)."'";
		 if($query_run = mysql_query($query)){
			 $query_num_rows = mysql_num_rows($query_run);
			 if($query_num_rows == 0){
				 echo 'Wrong username/password Combinations.';
			 }else if($query_num_rows >=1){
				 $query_result = mysql_result($query_run,0,'id');
			     
				 $_SESSION['user_id']= $query_result;
			 }
		 }else{
			 echo mysql_error();
		 }
	 }else{
		 echo 'Fill In All Fields';
	 }
 }
 
 function Loggedin(){
	 if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		 return true;
	 }else{
		 return false;
	 }
 }
  if(Loggedin()){
	  echo '<br/>Log in successful. <br/>';
  }
?>
<form Action="index.php" Method="POST">
	   UserName:<input type="text" name="username"/>
	   Password:<input type="password" name="password"/>
	   <input type="submit" name="submit" value="Login"/> <br/>
	   <a href='Register.php'>Register New User</a>
	   
</form>
