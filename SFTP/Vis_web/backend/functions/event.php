<?
function InsertEvent($eventCode, $engHeader, $tChnHeader, $sChnHeader, $engLDesc, $tChnLDesc, $sChnLDesc, $queue, $status){
	$SQL = "INSERT INTO Event SET EventCode = '$eventCode', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngLDesc = '$engLDesc', TChnLDesc = '$tChnLDesc', SChnLDesc = '$sChnLDesc', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateEvent($eventID, $eventCode, $engHeader, $tChnHeader, $sChnHeader, $engLDesc, $tChnLDesc, $sChnLDesc, $queue, $status) {
	$SQL = "UPDATE Event SET EventCode = '$eventCode', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngLDesc = '$engLDesc', TChnLDesc = '$tChnLDesc', SChnLDesc = '$sChnLDesc', Queue='$queue', ActiveStatus='$status', ModifyDate=NOW() WHERE EventID=$eventID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchEvent($eventID) {
	$SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event WHERE EventID='$eventID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo() {
	$SQL = "SELECT * FROM Event";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllEventInPage($searchText, $selectField, $criteria, $startRow, $pageSize) {
	if ($criteria == "All")  {
	  $SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event ORDER BY Queue LIMIT $startRow, $pageSize";
	} else  {		
	  switch ($selectField)  {
	    case 1:
	      $SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event WHERE EventCode='$searchText' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 2:
	      $SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event WHERE EngHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 3:
	      $SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event WHERE TChnHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 4:
	      $SQL = "SELECT EventID, EventCode, EngHeader, TChnHeader, SChnHeader, EngLDesc, TChnLDesc, SChnLDesc, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Event WHERE SChHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
	  }
	}
	  
	$result = mysql_query($SQL);
	return $result;
}

?>
