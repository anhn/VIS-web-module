<?
function InsertCategory($engName, $PCID, $photo, $queue, $status, $show){
	$SQL = "INSERT INTO Advertise SET EngName = '$engName', PCID = $PCID, ShowInIndex = '$show', Photo = '$photo', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateCategory($categoryID, $engName, $PCID, $photo, $queue, $status, $show) {
	$SQL = "UPDATE Advertise SET EngName = '$engName', PCID = $PCID, ShowInIndex = '$show', Photo = '$photo', Queue='$queue', ActiveStatus='$status', ModifyDate=NOW() WHERE CategoryID=$categoryID";
	#echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchCategory($categoryID) {
	$SQL = "SELECT CategoryID, EngName, TChnName, SChnName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, PCID FROM Advertise WHERE CategoryID='$categoryID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($PCID=0) {
	$SQL = "SELECT * FROM Advertise WHERE PCID=$PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllCategoryInPage($startRow, $pageSize, $PCID=0) {
	  $SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Advertise WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT CategoryID, EngName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Advertise WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT CategoryID, EngName FROM Advertise WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[EngName]</option>";
		$sql1="SELECT CategoryID, EngName FROM Advertise WHERE PCID=$row[CategoryID]";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) {
			echo "<option value=$row1[CategoryID]";
			if ($PCID == $row1[CategoryID]) { echo " selected"; }
			echo ">---- $row1[EngName]</option>";
		}
		#echo "<option value=0>------</option>";
	}
	echo '</select>';
}

?>
