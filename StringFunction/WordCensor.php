<?php
	
	 $find = Array('anita','sonu','shaikh');
	 $replace = Array('A****','S****','Sh****');
	 if(isset ( $_GET['User_Input']) And !empty ($_GET['User_Input'])){
		 $string = $_GET['User_Input'];
		 $newString = str_ireplace($find,$replace,$string);
		 echo $newString;
	 }
	
?>
<hr>
<form action = "WordCensor.php"   method = "GET">
       <textarea name= "User_Input" rows = "6" cols = "30"><?php echo $string?> </textarea><br><br>
	   <input type ="Submit"  value = "Submit">
</form>
 

