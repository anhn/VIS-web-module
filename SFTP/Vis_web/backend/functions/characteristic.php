<?
function InsertCharacteristic($Name, $Notes, $ViewStatus){
	$SQL = "INSERT INTO CharacteristicType SET Name = '$Name', Notes = '$Notes', ViewStatus = '$ViewStatus', Date=NOW()";
// 	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateCharacteristic($CID, $Name, $Notes, $ViewStatus) {
	$SQL = "UPDATE CharacteristicType SET Name = '$Name', Notes = '$Notes', ViewStatus='$ViewStatus', Date=NOW() WHERE ID=$CID";
	#echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchCharacteristic($CID) {
	$SQL = "SELECT * FROM CharacteristicType WHERE ID='$CID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($CID) {
	$SQL = "SELECT * FROM CharacteristicType";
	$result = mysql_query($SQL);
	if ($result) $recordCount = mysql_num_rows($result);
	else $recordCount = 0;
	return $recordCount;
}


function SelectAllCharacteristicInPage($startRow, $pageSize, $FamilyID) {
	  $SQL = "SELECT * FROM CharacteristicType LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT FamilyID, Name, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Characteristic WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT FamilyID, Name FROM Characteristic WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[FamilyID]";
		if ($PCID == $row[FamilyID]) { echo " selected"; };
		echo ">$row[Name]</option>";
		$sql1="SELECT FamilyID, Name FROM Characteristic WHERE PCID=$row[FamilyID]";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) {
			echo "<option value=$row1[FamilyID]";
			if ($PCID == $row1[FamilyID]) { echo " selected"; }
			echo ">---- $row1[Name]</option>";
		}
		#echo "<option value=0>------</option>";
	}
	echo '</select>';
}

?>
