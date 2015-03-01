<?
function InsertProductCategory($CategoryName, $parentcategory, $description, $status){
	$SQL = "INSERT INTO ProductCategory SET CategoryName = '$CategoryName', ParentCategoryID = '$parentcategory', Description = '$description', ViewStatus = '$status'";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProductCategory($CategoryID, $CategoryName, $description, $viewstatus) {
	$SQL = "UPDATE ProductCategory SET CategoryName = '$CategoryName', Description = '$description', ViewStatus='$viewstatus' WHERE CategoryID=$CategoryID";
	//echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchProductCategory($CategoryID) {
	$SQL = "SELECT * FROM ProductCategory WHERE CategoryID='$CategoryID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($CategoryID) {
	$SQL = "SELECT * FROM ProductCategory WHERE ParentCategoryID='".$CategoryID."'";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllProductCategoryInPage($startRow, $pageSize, $CategoryID) {
	$SQL = "SELECT * FROM ProductCategory WHERE ParentCategoryID='".$CategoryID."' ORDER BY CategoryID LIMIT $startRow, $pageSize";
	//echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT CategoryID, CategoryName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductCategory WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT CategoryID, CategoryName FROM ProductCategory WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select CategoryName="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[CategoryName]</option>";
		$sql1="SELECT CategoryID, CategoryName FROM ProductCategory WHERE PCID=$row[CategoryID]";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) {
			echo "<option value=$row1[CategoryID]";
			if ($PCID == $row1[CategoryID]) { echo " selected"; }
			echo ">---- $row1[CategoryName]</option>";
		}
		#echo "<option value=0>------</option>";
	}
	echo '</select>';
}

function tree_view($tree_table, $brand_id, $brand_name, $brand_parent, $parent_id = 0, $curbrand, $cond = " 1=1 ", $level = 0) {
    $tree_list = "";

    if (($parent_id + $curbrand) == 0)
    if ($parent_id == $curbrand){
        $tree_list .= "<option value=\"".$parent_id."\" selected>-Root-";
    } else {
        $tree_list .= "<option value=\"".$parent_id."\">-Root-";
    }

    $sql = " SELECT * FROM ".$tree_table.
           " WHERE $brand_parent = '$parent_id' AND ".$cond;
    $result = mysql_query($sql);
    echo $sql;
    $pref = "";
    for ($i = 0; $i < $level; $i++) $pref .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    while ($row = mysql_fetch_array($result)) {
        
        if ($row[$brand_id] == $curbrand) {
            $tree_list .= "<option value=\"".$row[$brand_id]."\" selected>$pref|--".$row[$brand_name];
        } else {
            $tree_list .= "<option value=\"".$row[$brand_id]."\">$pref|--".$row[$brand_name];
        }
        $tree_list .= tree_view($tree_table, $brand_id, $brand_name, $brand_parent, $row[$brand_id], $curbrand, $cond, $level+1);
    }
    return $tree_list;
}

?>
