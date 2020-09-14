<?php
  /* $time = time();
  const $time_now = date('H:i:s A',$time);
  const $time_modified = date('H:i:s A',$time+(30));
  
   echo 'Time Now '.$time_now.' And Time Modified '.$time_modified.'<br/>';
  
   if($time_now < $time_modified){
	  echo $time_now.' is small Time';
   } else {
	   echo $time_modified.' is greater Time';
   } */
   
   
   class Example {
	   public function __construct($saysomething) {
		   $this->SaySomething($saysomething);
	   }
	   
	   public function SaySomething($saysomething) {
		   echo $saysomething;
	   }
   }
   $obj = new Example('Shaikh Sonu');
   
?>