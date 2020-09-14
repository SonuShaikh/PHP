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
<form action = '<?php echo $scriptname ?>' method = 'POST'>
   UserName:<input type='text' name ='userInput' />
   Password:<input type='password' name ='password' />
   <input type= 'submit' value= 'Login'/>
</form>