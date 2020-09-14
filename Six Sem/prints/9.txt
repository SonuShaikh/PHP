<!-- SELECT RECORED FROM TABLE USING SELECT CAULSE -->
<?php
  mysql_connect('localhost','root','') or die('Could not connected to server');
  mysql_select_db('demo') or die('Database Could not found');
    if(isset($_POST['emp_name'],$_POST['emp_des'])){
		 $emp_name    = $_POST['emp_name'];
		
		 $emp_des     = $_POST['emp_des'];
		 
		if(!empty($emp_name)  && !empty($emp_des)){
			$query = "	SELECT * FROM `employee` WHERE `emp_name` = '".$emp_name."' AND `emp_des`= '".$emp_des."'";
			if($query_result = mysql_query($query)){
				$num_rows = mysql_num_rows($query_result);
				if($num_rows == 0){
					echo 'No Record Found For The Combination';
				}else{
				    while($data = mysql_fetch_assoc($query_result)){
						$emp_id       = $data['emp_id'];
						$emp_name = $data['emp_name'];
						$emp_salary = $data['emp_salary'];
						$emp_des   = $data['emp_des'];
						$emp_dept_id = $data['emp_dept_id'];
						
						echo 'Employee Id :'.$emp_id.'<br/>';
						echo 'Employee Name :'.$emp_name.'<br/>';
						echo 'Employee Salary :'.$emp_salary.'<br/>';
						echo 'Employee Designation :'.$emp_des.'<br/>';
						echo 'Employee Department Id :'.$emp_dept_id.'<br/><br/>';
					}				
				}
			}else{
				echo mysql_error();
			}
		}else{
			echo 'Fill In All Field';
		}
	}
?>
<form Action = "8_SelectRecordPHP.php" Method="POST">
   Emp Name:  <br/><input type="text" name="emp_name"/> <br/><br/>
   
   Designation: <br/><input type="text" name="emp_des"/> <br/><br/>
  
     <input type="Submit" value="Show Record"/>
   
</form>