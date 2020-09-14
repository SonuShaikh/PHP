<?php
   
    session_start();
	if(!isset($_POST['secure'])){
		$_SESSION['secure'] = rand(10000,99999);
	} else {
		if($_SESSION['secure'] == @$_POST['secure']) {
			echo 'Matched. <br/>';
		} else {
			echo 'Do not match ! Try Again.<br/>';
			$_SESSION['secure'] = rand(10000,99999);
		}
		
	}
	
	
   
?>
<img src="generate.php"/> <br/>
   <form action="index.php" method="POST">
      prove you're not robot<input type="text" name="secure" size="6" /> 
	  <input type="submit"  name = "Register"/>
   </form>
<?php
   echo $_SESSION['secure'];
?>