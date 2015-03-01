<?

function GetRecNo() {
	$SQL = "SELECT * FROM Support";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllDLInPage($startRow, $pageSize) {

    $SQL = "SELECT SupportID, EngName, ActiveStatus FROM Support LIMIT $startRow, $pageSize";			


	$result = mysql_query($SQL);
	return $result;
}

?>
