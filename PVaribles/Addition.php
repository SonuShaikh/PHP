<?php
	
		if(isset($_POST['userName']) and !empty ($_POST['userName']) And isset($_POST['pass']) And !empty($_POST['pass'])){
		$Uname = $_POST['userName'];
		$pass = $_POST['pass'];
		
		if($Uname == 'Shaikh' And $pass == 'Sonu'){
			echo "Hello Mr.".$Uname;
		}
		else{
			echo 'User Name or PassWord is Wrong';
		}
	}
	
	
	
?>
<br><br><hr>
<form action = 'Addition.php' Method = 'POST'>
User_Name:<input type='Text' name = 'userName'><br><br>
PassWord :<input type='text' name = 'pass'><br><br>
		<input type='submit' name = 'Submit'value='Log In'>
</form>