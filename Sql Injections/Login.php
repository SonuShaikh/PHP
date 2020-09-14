<?php
     mysql_connect('localhost','root','');
	 mysql_select_db('s_database');
     
	 if(isset($_POST['username']) && isset($_POST['password'])) {
		 $uname = $_POST['username'];
		 $pass = $_POST['password'];
		  if(!empty($uname) && !empty($pass)) {
			  $query = "SELECT `ID` FROM `SQL_IN` WHERE `User_Name` = '$uname' And `User_Pass` = '$pass'";
			  $query_run = mysql_query($query);
			  $query_num_rows = mysql_num_rows($query_run);
			  if($query_num_rows >=1) {
				  echo 'Login successful.';
			  } else {
				  echo 'Envalid UserName/Password combination.';
			  }
		  }else {
			  echo 'Fill in all Fields.';
		  }
 	 }
?>
<form action ='Login.php' method = 'POST'>

   User Name: <input type ='text' name ='username' />
   Password : <input type = 'text' name = 'password'>
            <input type = 'submit' value = 'Submit'/>

</form>