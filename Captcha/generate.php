<?php
  session_start();
  header('Content:image/jpeg');
  $text = $_SESSION['secure'];
  
  $font_size = 30;
  $image_width = 120;
  $image_heigth = 40;
  
  $image = imagecreate($image_width,$image_heigth);
  imagecolorallocate($image,255,255,255);
  $text_color = imagecolorallocate($image,0,0,0);
  
    for($x=1;$x<=25:$x++){
		$x1 = rand(1,100); 
		$x2 = rand(1,100);
		$y1 = rand(1,100);
		$y2 =rand(1,100);
		
		imageline($x1,$x2,$y1,$y2,$text_color);
	}
  
  imagettftext($image,$font_size,0,15,30,$text_color,'AdobePiStd.otf',$text);
  imagepng($image);
?>