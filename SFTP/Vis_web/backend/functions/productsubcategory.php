<?
function InsertProductSubCategory($SubCategoryName, $vnSubCategoryName, $Note, $status){
	$SQL = "INSERT INTO ProductSubCategory SET SubCategoryName = '$SubCategoryName', SubCategoryNameVn = '$vnSubCategoryName', Note = '$Note', ViewStatus = '$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProductSubCategory($SubCategoryID, $SubCategoryName, $SubCategoryNameVn, $Note, $viewstatus) {
	$SQL = "UPDATE ProductSubCategory SET SubCategoryName = '$SubCategoryName', SubCategoryNameVn = '$SubCategoryNameVn', Note = '$Note', ViewStatus='$viewstatus', ModifyDate=NOW() WHERE SubCategoryID=$SubCategoryID";
	#echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchProductSubCategory($SubCategoryID) {
	$SQL = "SELECT SubCategoryID, SubCategoryName, SubCategoryNameVn, Note, ViewStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductSubCategory WHERE SubCategoryID='$SubCategoryID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($SubCategoryID) {
	$SQL = "SELECT * FROM ProductSubCategory";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllProductSubCategoryInPage($startRow, $pageSize, $SubCategoryID) {
	  $SQL = "SELECT SubCategoryID, SubCategoryName, SubCategoryNameVn, Note, ViewStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductSubCategory ORDER BY SubCategoryID LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT SubCategoryID, SubCategoryName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductSubCategory WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT SubCategoryID, SubCategoryName FROM ProductSubCategory WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select SubCategoryName="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[SubCategoryID]";
		if ($PCID == $row[SubCategoryID]) { echo " selected"; };
		echo ">$row[SubCategoryName]</option>";
		$sql1="SELECT SubCategoryID, SubCategoryName FROM ProductSubCategory WHERE PCID=$row[SubCategoryID]";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) {
			echo "<option value=$row1[SubCategoryID]";
			if ($PCID == $row1[SubCategoryID]) { echo " selected"; }
			echo ">---- $row1[SubCategoryName]</option>";
		}
		#echo "<option value=0>------</option>";
	}
	echo '</select>';
}

?>
