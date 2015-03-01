<?
//modified by THAI
function InsertProductFamily($Name, $Status, $Description, $ViewStatus){
	$SQL = "INSERT INTO ProductFamily SET Name = '$Name', Status = '$Status', Description = '$Description', ViewStatus = '$ViewStatus'";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProductFamily($FamilyID, $Name, $Status, $Description, $ViewStatus) {
	$SQL = "UPDATE ProductFamily SET Name = '$Name', Status = '$Status', Description = '$Description', ViewStatus='$ViewStatus' WHERE FamilyID=$FamilyID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchProductFamily($FamilyID) {
	$SQL = "SELECT * FROM ProductFamily WHERE FamilyID='$FamilyID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($FamilyID) {
	$SQL = "SELECT * FROM ProductFamily";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllProductFamilyInPage($startRow, $pageSize) {
	$SQL = "SELECT * FROM ProductFamily ORDER BY FamilyID LIMIT $startRow, $pageSize";
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT FamilyID, Name, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductFamily WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT FamilyID, Name FROM ProductFamily WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[FamilyID]";
		if ($PCID == $row[FamilyID]) { echo " selected"; };
		echo ">$row[Name]</option>";
		$sql1="SELECT FamilyID, Name FROM ProductFamily WHERE PCID=$row[FamilyID]";
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
