<?
function InsertOutlet($name, $note, $status){
	$SQL = "INSERT INTO Outlet SET Name = '$name', Notes = '$note', ViewStatus = '$status', Date = NOW()";
//	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateOutlet($ID, $name, $note, $status){
	$SQL = "UPDATE Outlet SET Name = '$name', Notes = '$note', ViewStatus = '$status', Date = NOW() WHERE ID=$ID";
	//echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchOutlet($outletID) {
	$SQL = "SELECT * FROM Outlet WHERE ID=$outletID";
	//echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInOutlet($searchText, $criteria) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM Outlet";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM Outlet";
	    break;
	}
	$result = mysql_query($SQL);
	if ($result) $recordCount = mysql_num_rows($result);
	else $recordCount = 0;
	
	return $recordCount;
}

function SelectAllOutletInPage($searchText, $criteria, $startRow, $pageSize) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM Outlet LIMIT $startRow,$pageSize";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * WHERE 1=1 LIMIT $startRow,$pageSize";
	    break;
	}
	$result = mysql_query($SQL);
	return $result;
}

function ProductPath($pid) {
	$sql = "SELECT CategoryID FROM ProductMaster WHERE ProductID=$pid";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$pcid = $row["CategoryID"];
	$ret = $pcid;
	do {
		$sql = "SELECT ParentCategoryID FROM ProductCategory WHERE CategoryID=".$pcid."";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$pcid = $row["ParentCategoryID"];
		$ret = $pcid.','.$ret;
	} while ($pcid > 0);
	return $ret;
}

function ProductCatName($pid) {
	$sql = "SELECT CategoryName FROM ProductCategory WHERE CategoryID=$pid";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row['CategoryName'];
}

function MenuOutlets($id)
{
	$sql="SELECT * FROM ProductInOutlet WHERE OutletID=$id";
	$query=mysql_query($sql);
	$outmenu = array();
	while ($row=mysql_fetch_array($query)) {
		$arr = preg_split('/,/',ProductPath($row["ProductID"]),-1,PREG_SPLIT_NO_EMPTY);
		$hixhix = '$outmenu';
		foreach ($arr as $key=>$val) {
			if ($val != 0) {
				$hixhix .= "[$val]";
// 				$hixhix .= "['Name']='".ProductCatName($val)."';";
				eval($hixhix."['Name']='".ProductCatName($val)."';");
			}
		}
	}
	return ($outmenu);
}
?>
