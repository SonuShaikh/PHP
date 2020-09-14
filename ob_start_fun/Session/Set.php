<?php
// session data not going to work hear
//start session
 //session_start();
 // How to set data to session 
 //$_SESSION['username'] = 'Sonu';
 //$_SESSION['age']  =  19;
// unset($_SESSION['username']);
 //How to unset individual session;
 //unset($_SESSION['username']);
 // how to unset all session
 //session_destroy();

 // set coockie
 // sytax setcookie(name_of_cookie,Value_of_cookie,time_Interval)
 setcookie('username','Alex',time()+100);
 // how to unset coockie
 setcookie('username','Alex',time()-100);

?>