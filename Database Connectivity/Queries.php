<?php
    mysql_connect('localhost','root','') or Die('Error In Server Connection');
	mysql_select_db('demo') or Die("Database Could not Found");
     if(isset($_POST['Insert']) && !empty($_POST['Insert'])){
		 $name = $_POST['Insert'];
		$query = "INSERT INTO `student`(Name) VALUES('$name')";
		if(mysql_query($query)){
			echo "Record Inserted Successfuly.";
		}else{
			echo mysql_error();
		}
	 }
	 
	if(isset($_POST['Select']) && !empty($_POST['Select'])){
		$name = $_POST['Select'];
		$query = "Select `Id` FROM `student` WHERE `name`='$name'";
		if($select_name = mysql_query($query)){
			$num_rows = mysql_num_rows($select_name);
			if($num_rows == 0){
				echo 'No Data Found.';
			}else{
				$result = mysql_fetch_row($select_name);
				$id = $result[0];
				echo 'Id = '.$id;
			}
		}
	}
	
	if(isset($_POST['Delete']) && !empty($_POST['Delete'])){
		$name = $_POST['Delete'];
		$query = "DELETE FROM `student` WHERE `name` = '$name'";
		if($delete = mysql_query($query)){
			Echo 'Deleted';
		}
	}
	if(isset($_POST['Where'],$_POST['Set']) && !empty($_POST['Where']) && !empty($_POST['Set'])){
		$Where = $_POST['Where'];
		$Set   = $_POST['Set'];
		$query = "UPDATE `student` SET `name`='$Set' WHERE `name`='$Where'";
		if($query_result = mysql_query($query)){
			echo ' Rows Updated.';
		}
	}
?>
<form action="Queries.php" Method="POST">
Insert Name:<br/><input type="text" name="Insert" /><input type="Submit" value="Insert"/> <br/><br/><br/><br/>
</form>

<form action="Queries.php" Method="POST">
Select Name:<br/><input type="text" name="Select" /><input type="Submit" value="Select"/><br/><br/><br/><br/>
</form>

<form action="Queries.php" Method="POST">
Update Name:<br/>
Old_Name:<input type="text" name="Where" size="10" />
New_Name<input type="text" name="Set" size="10" />
<input type="Submit" value="Update"/><br/><br/><br/><br/>
</form>


<form action="Queries.php" Method="POST">
Delete Name:<br/><input type="text" name="Delete" /><input type="Submit" value="Delete"/><br/><br/><br/><br/>
</form>

