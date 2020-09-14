<!-- Inserting new records into tables using INSERT statements -->
<?php
  mysql_connect('localhost','root','') or die('Could not connected to server');
  mysql_select_db('demo') or die('Database Could not found');
    if(isset($_POST['emp_name'],$_POST['emp_sal'],$_POST['emp_des'],$_POST['emp_dept_Id'])){
		 $emp_name    = $_POST['emp_name'];
		 $emp_salary  = $_POST['emp_sal'];
		 $emp_des     = $_POST['emp_des'];
		 $emp_dept_id = $_POST['emp_dept_Id'];
		if(!empty($emp_name) && !empty($emp_salary) && !empty($emp_des) && !empty($emp_dept_id)){
			$query = "INSERT INTO `employee`(`emp_name`,`emp_salary`,`emp_des`,`emp_dept_id`) VALUES('".$emp_name."',".$emp_salary.",'".$emp_des."','".$emp_dept_id."') ";
			if(mysql_query($query)){
				echo 'Rocord Inseted Successfuly';
			}else{
				echo mysql_error();
			}
		}else{
			echo 'Fill In All Field';
		}
	}
?>
<form Action = "7_InsertRecordPHP.php" Method="POST">
   Emp Name:  <br/><input type="text" name="emp_name"/> <br/><br/>
   Salary  : <br/><input type="text" name="emp_sal"/> <br/><br/>
   Designation: <br/><input type="text" name="emp_des"/> <br/><br/>
   Department Id: <br/><input type="text" name="emp_dept_Id"/><br/><br/>
     <input type="Submit" value="Insert Record"/>
   
</form>