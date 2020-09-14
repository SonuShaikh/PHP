<!-- Inserting new records into tables using INSERT statements -->
<?php
  mysql_connect('localhost','root','') or die('Could not connected to server');
  mysql_select_db('demo') or die('Database Could not found');
    if(isset($_POST['emp_id'],$_POST['emp_name'],$_POST['emp_sal'],$_POST['emp_des'],$_POST['emp_dept_Id'])){
		 $emp_id      = $_POST['emp_id'];
		 $emp_name    = $_POST['emp_name'];
		 $emp_salary  = $_POST['emp_sal'];
		 $emp_des     = $_POST['emp_des'];
		 $emp_dept_id = $_POST['emp_dept_Id'];
		if(!empty($emp_id) && !empty($emp_name) && !empty($emp_salary) && !empty($emp_des) && !empty($emp_dept_id)){
			$query1 = "SELECT `emp_id` FROM `employee` WHERE `emp_id`= ".$emp_id."";
			if($query_result = mysql_query($query1)){
				$num_rows = mysql_num_rows($query_result);
				if($num_rows == 0){
					echo 'Wrong Employee Id.';
				}else{
					$update_query = "UPDATE `employee` SET `emp_name`='".$emp_name."', `emp_salary`=".$emp_salary.", `emp_des`='".$emp_des."', `emp_dept_id`=".$emp_dept_id." WHERE `emp_id`=".$emp_id."";
					if(mysql_query($update_query)){
						echo 'Record Has Been Updated Successfuly.';
					}else{
						echo mysql_error();
					}
				}
			}else{
				echo mysql_error();
			}`
		
		}else{
			echo 'Fill In All Field';
		}
	}
?>
<form Action = "9_UpdateRecordPHP.php" Method="POST">
   Update By Emp Id : <br/><input type="text" name="emp_id"/> <br/><br/>
   Emp Name:  <br/><input type="text" name="emp_name"/> <br/><br/>
   Salary  : <br/><input type="text" name="emp_sal"/> <br/><br/>
   Designation: <br/><input type="text" name="emp_des"/> <br/><br/>
   Department Id: <br/><input type="text" name="emp_dept_Id"/><br/><br/>
     <input type="Submit" value="Update Record"/>
   
</form>