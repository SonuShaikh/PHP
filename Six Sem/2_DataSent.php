<!-- Creating html form and Capture Data Send -->
<form action="2_DataSent.php" method="POST">
    Full Name<br/> <input type="text" name="full_name" required /> <br/><br/>
	Address <br/> <input type = "text" name="address" required />  <br/><br/>
	College Name <br/> <input type="text" name="college_name" required /> <br/><br/>
	Email <br/> <input type="email" name="mail" /> <br/><br/>
	Phone Nuber <br/> <input type="text" name="ph_no" required /> <br/><br/>
	<input type="submit" value="SendData"/>
</form>
<hr/>
<?php
        echo '<h1>Creating html form and Capture Data Send</h1>';
     echo 'Full Name: '.@$_POST['full_name'].'<br/>';
	 echo 'Address: '.@$_POST['address'].'<br/>';
	 echo 'College Name: '.@$_POST['college_name'].'<br/>';
	 echo 'Email: '.@$_POST['mail'].'<br/>';
	 echo 'Mobile Number: '.@$_POST['ph_no'].'<br/>';
?>

