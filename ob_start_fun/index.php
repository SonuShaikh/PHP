<h1>hello World</h1>

<?php
 ob_start();
   $location = 'page.php';
   $header = false;
   if($header == true)
	   header('Location: '.$location);
    ob_end_flush();
?>