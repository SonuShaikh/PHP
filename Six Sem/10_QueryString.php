<!-- Demonstrate the query string

https://www.facebook.com/profile.php?id=100014536090286
https://www.facebook.com/mayur.pathrikar.7?fref=ts
https://www.facebook.com/ashish.balid.5?fref=ts
https://www.facebook.com/SonuShaikh987

 -->
<?php
    $name = @$_GET['name'];
	$age  = @$_GET['age'];
	
	echo 'Hello '.$name.' you are '.$age.' Year old';
?>
<form action='10_QueryString.php' method='GET'>
   Name <input type='text' name='name'/> Age <input type='text' name='age'/>
   <input type='Submit' value='Submit'/>
</form>