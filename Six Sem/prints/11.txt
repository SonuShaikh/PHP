<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>Hidden Field In Html</title>
<head>
<body>
 
     <?php
	     echo 'Name : '.@$_POST['first'].'<br/>';
		 echo 'Last Name : '.@$_POST['last'].'<br/>';
		 echo 'Password : '.@$_POST['password'].'<br/>';
		 echo 'Order Number : '.@$_POST['orderNumber'].'<br/>';
	 ?>
            <hr/>
     <form name="myWebForm" action="11_HiddenField.php" method="post">
		First:<br/> <input title="Please Enter Your First Name" id="first" name="first" type="text" size="12" maxlength="12" Required /> <br />
		Last: <br/><input title="Please Enter Your Last Name" id="last" name="last" type="text" size="12" maxlength="12" Required/><br />
		Password:<br/> <input type="password" name="password" title="Please Enter Your Password" size="8" maxlength="8" Required /><br /><br />
		<input type="hidden" name="orderNumber" id="orderNumber" value="0024" /><br />
		<input type="submit" value="SUBMIT" />
		<input type="reset" value="RESET" />
	  </form>
</body>
</html>