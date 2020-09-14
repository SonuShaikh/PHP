<?php
   header('Content-type:image/png');
   $myimage = imagecreate(250,250);
   $myimage = imagecreatefrompng('dog.png');
   $mycolor = imagecolorallocate($myimage,134,125,134);
   imagepng($myimage);
   imagedestroy($myimage);
   

?>