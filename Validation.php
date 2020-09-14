<?php
/*include_once('connection.php');*/
if (isset($_POST['submit']))
{
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $pass_len=strlen($pass);
 $email=$_POST['email'];
if(empty($user)){
	$msg="plzz enter username";
}
else if(empty($pass))
{
$msg="plzz enter password";	
}
else if($pass_len<=6){
$msg="pwd should be more than 6 char";	
}
else if(empty($email))
{
	$msg="plzz enter email address";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$msg="plzz enter  valid email address";
}
else{
	echo"everything is correct";
}
}
?>
<!DOCTYPE HTML> 
<html>
<body>
<form action="" method="post">
<p>Username<br/>
<input type="text"name="username"/></p>
<p>Password<br/>
<input type="password"name="password"/>password should be more than 6
<p>Email<br/>
<input type="text"name="email"/></p>
<p><input type="submit"name="submit" value="Sign up"/></p>
<p style="color:red;"><?php
if(isset($msg)){
	echo $msg;
}
?> </p>
</form>
</body>
</html>