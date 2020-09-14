<form action = 'SearchEng.php' Method = 'POST'>
    Name: <input type='text' name ='Search_Name'/>   <input type='submit' value='Search'/>
</form>
<?php
     require 'Connect.inc.php';
     if(isset($_POST['Search_Name'])) {
         $Search_Name = $_POST['Search_Name'];
          if(!empty($Search_Name)) {
			   if(strlen($Search_Name)>=4) {
				   $query = "SELECT `Name` FROM `NAMES` WHERE `Name` LIKE '%".mysql_real_escape_string($Search_Name)."%'";
                   $query_run = mysql_query($query);
				   $query_num_rows = mysql_num_rows($query_run);
				   
				      if($query_num_rows >= 1){
						  echo $query_num_rows.' result found.<br/>';
						  while($query_row = mysql_fetch_assoc($query_run)) {
							  echo $query_row['Name'].'<br/>';
						  }
					  } else {
						  'Search Not Found';
					  }
				  
				 } else {
				     echo 'Name Must be more than 3 charactors';
			     }
			  
			  } else {
				  echo 'Please Fill in Name Field';
			  }
			     
			       
	     }		 
	 

?>

