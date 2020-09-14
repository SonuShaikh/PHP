<!-- Validate Form And Handling empty form data -->
<?php
echo "<h1>Validate Form And Handling empty form data in php</h1>";
 if(isset($_POST['username'],$_POST['password'])){
         $username = $_POST['username'];
		 $password = $_POST['password'];
		 if(!empty($username) && !empty($password)){
			 if($username = 'Admin' && $password = 'Admin'){
				 echo 'Welcome Admin';
				 header('Location: Welcome.php');
			 }else{
				 echo 'Wrong Username/Password Combination.';
			 }
		 }else{
			 echo 'Fill In All Fields.';
		 }
 }

?>
<form action="3_ValidataForm.php" method="POST">
   Username:<br/> <input type="text" name="username" title="Enter Your Name" placeholder="Enter Your User Name" size="30" maxlength="20"/> <br/><br/>
   Password: <br/> <input type="password"  name="password" size="15" maxlength="20" /> <br/><br/>
   <input type="Submit" value="Login">
</form>