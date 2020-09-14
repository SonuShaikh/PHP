<?php
$to = 'saurabhshinde92.ss@gmail.com';
$subject = 'Testing an email verifiaction';
$body = 'Hey this is the mail send by sonu shaikh and valid for only 3 Minuts';
$header = 'From: Sonu Shaikh<shaikhshahabaj987@gmail.com>';
if(mail($to,$subject,$body,$header)){
	echo "Email Has been sent to ".$to;
}else {
	echo 'There was an error occure while sending email';
}
?>