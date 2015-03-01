<?

function getSupportContent($id=0) {
	$SQL = "SELECT EngName, EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, SupportID, ActiveStatus FROM Support";
	if ($id!=0) { $SQL=$SQL." WHERE SupportID=$id"; }
	$result = mysql_query($SQL);
	return $result;
}

function InsertSupport($name, $engContent=0, $active){
	$SQL = "INSERT INTO Support SET EngName='$name', EngContent='$desc', ModifyDate=NOW(), ActiveStatus='$active'";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateSupport($name, $engContent, $supportID, $status) {
	$SQL = "UPDATE Support SET EngName='$name', EngContent='$engContent', ModifyDate=NOW(), ActiveStatus='$status' WHERE SupportID=$supportID";
	$result = mysql_query($SQL);
	return $result;
}

function insertFile($type=0, $path, $name, $desc, $active) {
	$SQL = "INSERT INTO SupportFile SET SupportID=$type, FilePath='$path', EngName='$name', EngContent='$desc', CreateDate=NOW(), ModifyDate=NOW(), ActiveStatus='$active'";
	$result = mysql_query($SQL);
	return $result;
}

function getFile($ID=0) {
	$SQL = "SELECT FileID, SupportID, FilePath, EngName, SChnContent, TChnContent, EngContent,DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM SupportFile";
	if ($ID!=0) { $SQL=$SQL."WHERE FileID=$ID"; }
	$result = mysql_query($SQL);
	return $result;
}

function updateFile($ID, $type, $desc, $path, $file=0) {

}

function delFile($ID=0, $path) {
	unlink($path);
}

function GetRecNo($SupportID=0) {
	$SQL = "SELECT * FROM SupportFile";
	if ($SupportID!=0) { $SQL=$SQL." WHERE SupportID=$SupportID";}
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}

function SelectAllSupportFileInPage($startRow, $pageSize, $SupportID=0) {
	$SQL = "SELECT FileID, SupportID, FilePath, EngName, SChnContent, TChnContent, EngContent,DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate,ActiveStatus FROM SupportFile";
	if ($ID!=0) { $SQL=$SQL." WHERE SupportID=$SupportID";}
	$SQL=$SQL." LIMIT $startRow, $pageSize";
	$result = mysql_query($SQL);
	return $result;
}

?>
