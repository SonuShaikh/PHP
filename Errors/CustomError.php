<?php
  $mysql_server = 'localhost';
  $mysql_user = 'alex';
  $mysql_pass = '';
  $mysql_db = 's_database';
  
  class serverException extends Exception {
	  public function showSpecific() {
		  echo 'Error on line '.$this->getLine().' in '.$this->getFile();
	  }
  }
  class databaseException extends Exception {
	  public function showSpecific() {
		  echo 'Error on line '.$this->getLine().' in '.$this->getFile();
	  }
  }
  
  try{
	  if(!@mysql_connect($mysql_server,$mysql_user,$mysql_pass)){
         throw new serverException('Could not connected to server.');		  
	  } else if(!@mysql_select_db($mysql_db)){
		  throw new databaseException('Could not connected to database.');
	  } else {
		  echo 'Successfuly Connected.';
	  }
  } catch(serverException $ex) {
	  echo 'Error:'.$ex->showSpecific();
  } catch(databaseException $ex){
	  echo 'Error:'.$ex->showSpecific();
  }
?>