<?
function InsertRegion($regionName, $status){
	$SQL = "INSERT INTO Region SET RegionName = '$regionName', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateRegion($regionID, $regionName, $status) {
	$SQL = "UPDATE Region SET RegionName = '$regionName', ActiveStatus='$status', ModifyDate=NOW() WHERE RegionID='$regionID'";
	$result = mysql_query($SQL);
	return $result;
}


function InsertRegionArea($regionID, $areaID){
	$SQL = "INSERT INTO RegionArea SET RegionID = '$regionID', AreaID = '$areaID'";
	$result = mysql_query($SQL);
	return $result;
}

function DeleteAreaGroup($regionID) {
	$SQL = "DELETE FROM Region WHERE RegionID=$regionID";
	$result = mysql_query($SQL);
	return $result;
}

function DeleteRegionArea($regionID) {
	$SQL = "DELETE FROM RegionArea WHERE RegionID=$regionID";
	$result = mysql_query($SQL);
	return $result;
}

function SearchRegion($regionID) {	
	$SQL = "SELECT RegionID, RegionName, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Region WHERE RegionID='$regionID'";
	$result = mysql_query($SQL);
	return $result;
}

function SearchRegionID($regionName) {	
	$SQL = "SELECT RegionID FROM Region WHERE RegionName='$regionName'";
	$result = mysql_query($SQL);
	return $result;
}

function SearchRegionGroup($regionID, $areaID) {	
	$SQL = "SELECT RegionArea.RegionID, RegionArea.AreaID, Area.EngArea FROM `RegionArea`, `Area` WHERE RegionArea.AreaID=Area.AreaID and RegionArea.RegionID='$regionID' and RegionArea.AreaID='$areaID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInRegion() {
	$SQL = "SELECT * FROM Region";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllRegionInPage($startRow, $pageSize) {
	$SQL = "SELECT RegionID, RegionName, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Region LIMIT $startRow,$pageSize";
	$result = mysql_query($SQL);
	return $result;
}

?>
