<?php

   /*  $string = 'Hey Anita .. What are You Studing Now...';	
	if(preg_match('/Anita/',$string)){
		echo 'Match Found...';
	}else{
		echo 'Match Not Found...';
	} */
	
	
	function has_space($string){
		if(preg_match('/ /',$string)){
				return true;
		}else{
			return false;
		}
	}
	 $string = 'thisstringdoesnothaveanyspace s';
	 if(has_space($string)){
		 echo 'Has At Least One Space';
	 }else{
		 echo 'Has No Spaces';
	 }

?>