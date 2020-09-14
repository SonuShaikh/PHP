<?php
$find = array('is','string','example');
$replace = array("IS","STRING", "EXAMPLE");
$string = ' This is a string and an example';
$new_string = str_replace($find,$replace,$string);
echo $new_string;
?>