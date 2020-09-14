<!--
   Hidden fields allow a coder to pass values to form elements in a subtle manner. 
   An experienced web developer will utilize these fields to pass temporary, or session-based data, 
   from one form to another or to store information that has already been entered in by the user.

<form name="myWebForm" action="mailto:youremail@email.com" method="post">
First: 
<input title="Please Enter Your First Name" id="first" name="first" type="text" size="12" maxlength="12" /> 
Last: 
<input title="Please Enter Your Last Name" id="last" name="last" type="text" size="18" maxlength="24" /><br />
Password: 
<input type="password" title="Please Enter Your Password" size="8" maxlength="8" /><br /><br />

<input type="hidden" name="orderNumber" id="orderNumber" value="0024" /><br />
<input type="submit" value="SUBMIT" />
<input type="reset" value="RESET" />
</form>
-->
<?php echo @$_POST['hiddendata'];?>
<form action="HiddenField.php" method='post'>
  <input type="hidden" name= "hiddendata" value="Hidden Fields Data"/>
  <input type='Submit' value='Click'/>
</form>