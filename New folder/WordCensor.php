<?php
  $find = array('anita','dapke');
  $replace = array("A***A","D***E");
    if(isset($_POST['User_Input']) && !empty ($_POST['User_Input'])){
		$user_input = $_POST['User_Input'];
		$user_input_lw = strtolower($user_input);
		$user_input_new = str_ireplace($find,$replace,$user_input_lw);
		
		echo $user_input_new;
		
	}
?>
<hr/>
<form action = "WordCensor.php" method ="POST">
<textarea name = "User_Input" rows="6", cols="30"> <?php echo $user_input?></textarea><br/><br/>
<input type= "submit" value = "Submit">
</form>