<?php
   if(isset($_GET['User_Name']) && !empty ($_GET['User_Name'])){
	   $user_name = strtolower($_GET['User_Name']);
	   
	   if($user_name == 'sonu'){
		   echo 'Your are the Register with Facebook '.$user_name;
	   }
	   else{
		   echo 'Your are Not Register with Facebook '.$user_name;
	   }
   }
?>


<form action = "index.php" method = "Sonu">
   Name :<input type= "text" Name = "User_Name"/>
   <input type ="Submit" value = "Submit"/>
</form>