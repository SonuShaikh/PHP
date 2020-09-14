<?php
  //change the page content type to image format by using header function
  header('Content-type: image/jpeg');
  if(isset($_GET['source'])) {
	  $source = $_GET['source'];
	  
	  $watermark = imagecreatefrompng('logo.png');
	  
	  $watermark_width = imagesx($watermark);
	  $watermark_heigth = imagesy($watermark);
	  
	  $image = imagecreatetruecolor($watermark_width,$watermark_heigth); 
	  $image = imagecreatefrompng($source);
	  
	  $image_size = getimagesize($source);
	  $x = $image_size[0] - $watermark_width - 10;
	  $y = $image_size[1] - $watermark_heigth - 10;
	  
	  imagecopymerge($image,$watermark,$x,$y,0,0,$watermark_width,$watermark_heigth,60);
	  imagepng($image);
	  
  }  
?>