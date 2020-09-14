<html>
<head>
  
    <title>Registration Form</title>
      <link rel= "stylesheet" href="main.css"/>
</head>
<body>
<?php
  
       mysql_connect('127.0.0.1','root','') or die('Could not connected to server');
	   mysql_select_db('s_database') or die('Database Could not Found');
		    
	   

 if(isset($_POST['Name'])&& isset($_POST['sirname'])&& isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['password1'])){
	  $name = $_POST['Name'];
	  $sirname = $_POST['sirname'];
	  $username = $_POST['username'];
	  $pass = $_POST['password'];
	 $pass1 = $_POST['password1'];
	 if(!empty($name)&& !empty($sirname)&& !empty($username) &&!empty($pass)&&!empty($pass1)){
		 if($pass == $pass1){
			
			$query = "INSERT INTO `logintble` (`Name`, `Sirname`, `username`, `password`) VALUES ('$name', '$sirname', '$username', '$pass')";
			if($runQuery = mysql_query($query)){
				echo $name.' You Register Successfuly. Try To Login';
			}
			else{
				mysql_error();
			}
			
			}else{
			 echo 'PassWord Mismatch. Fill Currect password in Both Field';
		 }
	 }
	 else{
		 echo 'fill in All Fields';
	 }
 }
?>
<hr/>
<form action = 'Register.php' Method = 'POST'> 
  <fieldset class = "personinfo">
   <legend>Personal Information</legend>
   <label>Name</label>        <input type = "text" name = "Name" maxlength = "30" /><br/><br/>
   <label>Sirname</label>     <input type = "text" name = "sirname" maxlength = "30"/><br/><br/>
   <label>UserName</label>    <input type = "text" name = "username" maxlength = "15"/><br/><br/>
   <label>Password</label>    <input type = "password" name = "password" maxlength = "15"/><br/><br/>
   <label>RT Password</label> <input type = "password" name = "password1" maxlength = "15"/><br/><br/>
   
   <input type ='submit' value ='Submit'/>
   <input type ='reset' value ='Clear'/>
   <label><a href="Login.php"/>SinIn</label>
  </fieldset>
  </form>
  
  </body>
  </html>