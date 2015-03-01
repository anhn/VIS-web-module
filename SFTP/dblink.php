<?php
	$servername = "localhost";  	
	$dbusername = "smartwis_admin";		
	$dbpassword = "wise";			
	$dbname = "smartwis_db";			
	
	
	$link = mysql_connect($servername, $dbusername, $dbpassword);
	
	if ($link)  {
		$db_selected = mysql_select_db($dbname);
		if (!$db_selected)  {
			$msg="Could not connect Database ";
			//header("location: ./login.php?msg=$msg");			
		} else {
			$msg="Connected Database";
		}
	} else {
		$msg="Could not connect MySQL";
		//header("location: ./login.php?msg=$msg");
		//exit();		
	}
?>
