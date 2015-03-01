<?

function getSupportContent() {
	$SQL = "SELECT EngType, SChnContent, TChnContent, EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, SupportID FROM Support";
	$result = mysql_query($SQL);
	return $result;
}

function insertFile($type=0, $path, $name=0, $desc, $active) {
	$SQL = "INSERT INTO SupportFile SET SupportID=$type, FilePath='$path', EngName='$name', EngContent='$desc', CreateDate=NOW(), ModifyDate=NOW(), ActiveStatus='$active'";
	$result = mysql_query($SQL);
	return $result;
}

function getFile($ID=0) {
	$SQL = "SELECT FileID, SupportID, FilePath, EngName, EngContent, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, ActiveStatus FROM SupportFile";
	IF ($ID!=0) { $SQL=$SQL." WHERE FileID=$ID";}
	$result = mysql_query($SQL);
	return $result;
}

function updateFile($ID, $type, $desc, $status, $path=null) {
	if ($path==null) {
		$SQL = "UPDATE SupportFile SET SupportID=$type, EngContent='$desc', ModifyDate=NOW(), ActiveStatus='$status' WHERE FileID=$ID";
	} else {
		$SQL = "UPDATE SupportFile SET SupportID=$type, EngContent='$desc', ModifyDate=NOW(), ActiveStatus='$status', FilePath='$path' WHERE FileID=$ID";
	}
	$result = mysql_query($SQL);
	return $result;
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
	if ($SupportID>0) { $SQL=$SQL." WHERE SupportID=$SupportID";}
	$SQL=$SQL." LIMIT $startRow, $pageSize";
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllSupportInCombo($id) {
	$SQL = "SELECT EngName, EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, SupportID, ActiveStatus FROM Support";
	$result = mysql_query($SQL);
	echo "<select name='type' id='type'>";
	while ($row = mysql_fetch_array($result)) {
		echo "<option value=".$row[SupportID];
		if ($row[SupportID]==$id) { echo " selected"; }
		echo ">".$row[EngName]."</option>";
	}
	echo "</select>";
}

?>
