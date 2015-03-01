<?

function getPubContent() {
	$SQL = "SELECT EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, PubID FROM Publishers";
	$result = mysql_query($SQL);
	return $result;
}

function UpdatePub($engContent, $pubID) {
	$SQL = "UPDATE Publishers SET EngContent='$engContent', ModifyDate=NOW() WHERE PubID=$pubID";
	$result = mysql_query($SQL);
	return $result;
}

?>
