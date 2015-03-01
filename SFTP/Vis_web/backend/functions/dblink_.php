<?php
	$servername = "localhost";  	
	$dbusername = "root";		
	$dbpassword = "vertrigo";			
	$dbname = "ftvine";			
	
	
	$link = mysql_connect($servername, $dbusername, $dbpassword);
	
	if ($link)  {
		$db_selected = mysql_select_db($dbname);
		if (!$db_selected)  {
			$msg="Could not connect Database ";
		header("location: ./login.php?msg=$msg");			
		}
	} else {
		$msg="Could not connect MySQL";
		header("location: ./login.php?msg=$msg");
		exit();		
	}
?>
