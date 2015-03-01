<?

function getAboutUsContent() {
	$SQL = "SELECT SChnDesc, TChnDesc, EngDesc, SChnContent, TChnContent, EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, AboutUsID FROM AboutUS";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateAboutUs($engContent, $auID) {
	$SQL = "UPDATE AboutUS SET EngContent='$engContent', ModifyDate=NOW() WHERE AboutUsID=$auID";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateWel($engDesc, $auID) {
	$SQL = "UPDATE AboutUS SET EngDesc='$engDesc', ModifyDate=NOW() WHERE AboutUsID=$auID";
	$result = mysql_query($SQL);
	return $result;
}


?>
