<html>
<head>
     <title>Log In Form</title>
      <link rel= "stylesheet" href="main.css"/>

</head>
<body>

<?php
     
	 //require 'include.inc.php' or die('Specified file not Found');
	 
     mysql_connect('localhost','root','') or die("Couldn't Connected to server");
	 mysql_select_db('S_database') or die("Couldn't Find database");
	 
     if(isset($_POST['username']) && isset($_POST['password'])){
		 $userName = $_POST['username'];
		 $Password = $_POST['password'];
		 if(!empty($userName) && !empty($Password)){
			 $query = "SELECT `Name`,`Sirname`,`username`,`password` FROM `logintble` WHERE username = '$userName' And password = '$Password'";
			 

			 if($run_query = mysql_query($query)){
			       $row = mysql_fetch_assoc($run_query);
			// while($row = mysql_fetch_assoc($run_query)){
	
				 $name = $row['Name'];
				 $sirname = $row['Sirname'];
				 $username = $row['username'];
				 $password = $row['password'];
				 
				 if($username == $userName && $Password == $password){
					  echo 'Hello MR.'.$sirname.'Your Data is As Follows <br/>';
				      echo 'Name : '.$name.'<br/>';
					  echo 'SirName : '.$sirname.'<br/>';
					  echo 'Username :'.$username.'<br/>';
				      echo 'password :'.$password.'<br/>';
				 }else{
					 echo ' SORRY I Dont Know You. Please Register First with our side ';
				 }
			// }
		 }else{
			 mysql_error();
		 }
		 		
	 }else{
		 echo 'Fill The Field';
	 }
	 
}
	 

?>
<hr/>
<form action = 'Login.php' Method = 'POST'> 
  <fieldset class = "personinfo">
   <legend>LogIn</legend>
   <label> UserName:</label><input type = 'text' name = 'username' id = '1'/> <br/>
   <label> Password :</label><input type = 'password' name = 'password' id = '2'/><br/>
   <input type = 'submit' value ='Login'/>
   <input type = 'reset' value ='Clear'/><br/>
   <label><a href ="Register.php" /> Register As New User</label>
  </fieldset>
   
</form>
</body>
</html>