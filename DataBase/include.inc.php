<html>
<head>

<title>Include Page</title>
<link rel= "stylesheet" href="main.css"/>
</head>
<body>
<?php

?>

<form action = 'Login.php' Method = 'POST'> 
  <fieldset class = "personinfo">
   <legend>LogIn</legend>
   <label> UserName:</label><input type = 'text' name = 'username' id = '1'/><br>
   <label> Password :</label><input type = 'password' name = 'password' id = '2'/><br/>
   <input type = 'submit' value ='Login'/>
   <input type = 'reset' value ='Clear'/><br/>
   
  </fieldset>
   
</form>
</body>
</html>