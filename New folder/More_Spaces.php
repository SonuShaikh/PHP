<?php
  function has_space($string){
	  if(preg_match('/ /',$string)){
		  return true;
	  }
	  else{
		  return false;
	  }
  }
  
   $string = 'this has no spaces';
	  
	  if(has_space($string)){
		  echo 'Has at least one Space';
	  }
	  else{
		  echo 'Has no spaces';
	  }
?>