<!-- SELECT RECORED FROM TABLE USING SELECT CAULSE -->
<?php
  mysql_connect('localhost','root','') or die('Could not connected to server');
  mysql_select_db('demo') or die('Database Could not found');
    if(isset($_POST['emp_name'],$_POST['emp_des'])){
		 $emp_name    = $_POST['emp_name'];
		
		 $emp_des     = $_POST['emp_des'];
		 
		if(!empty($emp_name)  && !empty($emp_des)){
			$query = "	DELETE FROM `employee` WHERE `emp_name` = '".$emp_name."' AND `emp_des`= '".$emp_des."'";
			if($query_result = mysql_query($query)){
				$num_rows = mysql_num_rows($query_result);
				if($num_rows == 0){
					echo 'User Dont Exist.';
				}else{
					echo 'Data Deleted Successfuly.';
				}
			}else{
				echo mysql_error();
			}
		}else{
			echo 'Fill In All Field';
		}
	}
?>
<form Action = "12_DeleteRecord.php" Method="POST">
   Emp Name:  <br/><input type="text" name="emp_name"/> <br/><br/>
   
   Designation: <br/><input type="text" name="emp_des"/> <br/><br/>
  
     <input type="Submit" value="Show Record"/>
   
</form>