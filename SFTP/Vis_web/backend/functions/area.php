<?
function InsertArea($engArea, $tChnArea, $sChnArea, $queue, $status){
	$SQL = "INSERT INTO Area SET EngArea = '$engArea', TChnArea = '$tChnArea', SChnArea = '$sChnArea', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateArea($areaID, $engArea, $tChnArea, $sChnArea, $queue, $status) {
	$SQL = "UPDATE Area SET EngArea = '$engArea', TChnArea = '$tChnArea', SChnArea = '$sChnArea', Queue='$queue', ActiveStatus='$status', ModifyDate=NOW() WHERE AreaID=$areaID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchArea($areaID) {
	$SQL = "SELECT AreaID, EngArea, TChnArea, SChnArea, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Area WHERE AreaID='$areaID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo() {
	$SQL = "SELECT * FROM Area";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllAreasInPage($startRow, $pageSize) {
	$SQL = "SELECT AreaID, EngArea, TChnArea, SChnArea, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Area ORDER BY Queue LIMIT $startRow,$pageSize";
	$result = mysql_query($SQL);
	return $result;
}

?>
