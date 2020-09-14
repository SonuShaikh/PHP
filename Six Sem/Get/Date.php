<?php

require 'include.inc.php';
if(isset($_GET['Day']) && isset($_GET['Date']) && isset($_GET['Year'])){
	$day = $_GET['Day'];
	$date = $_GET['Date'];
	$year = $_GET['Year'];
	if(!empty($day) && !empty($date) && !empty($year)){
		echo 'Today is '.$day.' '.$date.' '.$year;
	}
	else{
		echo 'All Field Are Menditory';
	}
}

?>