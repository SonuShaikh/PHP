<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
<>
	<?php
			 
		if(isset($_POST['userInput']) && isset($_POST['password'])) {
			$username = $_POST['userInput'];
			$password = md5($_POST['password']);
			
			if(!empty($username) And !empty($password)) {
				$query = "SELECT `id` FROM `login` WHERE `User_Name`='$username' AND `Password` = '$password'";
				if($query_run = mysql_query($query)) {
					$query_num_rows = mysql_num_rows($query_run);
					if($query_num_rows == 0) {
						echo 'Wrong username/password Combination';
					}elseif ($query_num_rows >= 1){
						$query_id = mysql_result($query_run,0,'Id');
						$_SESSION['userid'] = $query_id;
						header('Location: index.php');
					}
				} else {
					echo mysql_error();
				}
			} else {
				echo 'Fill In All Fields.';
			}
		}
	?> 

	  
		  <fieldset>  
			<form action = '<?php echo $scriptname ?>' method = 'POST'>
			  <div class="username"> UserName :</div><br/><input type='text' name ='userInput' /><br/>
			  <div class="password">Password :</div><br/><input type='password' name ='password' /><br/>
			   <input type= 'submit' value= 'Login'/> <br/>
			   <label><a href="Register.php">Register New User</a></label>
			</form>
		  </fieldset>
	 
</body>
</html>	  