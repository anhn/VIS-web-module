<?
function InsertNews($newsCode, $newsDate, $engHeader, $tChnHeader, $sChnHeader, $engSDesc, $tChnSDesc, $sChnSDesc, $engLDesc, $tChnLDesc, $sChnLDesc, $showInIndex, $queue, $status) {
	$SQL = "INSERT INTO News SET NewsCode = '$newsCode', NewsDate='$newsDate', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngSDesc = '$engSDesc', TChnSDesc = '$tChnSDesc', SChnSDesc = '$sChnSDesc', EngLDesc = '$engLDesc', TChnLDesc = '$tChnLDesc', SChnLDesc = '$sChnLDesc', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateNews($newsID, $newsCode, $newsDate, $engHeader, $tChnHeader, $sChnHeader, $engSDesc, $tChnSDesc, $sChnSDesc, $engLDesc, $tChnLDesc, $sChnLDesc, $showInIndex, $queue, $status) {
	$SQL = "UPDATE News SET NewsCode = '$newsCode', NewsDate='$newsDate', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngSDesc = '$engSDesc', TChnSDesc = '$tChnSDesc', SChnSDesc = '$sChnSDesc', EngLDesc = '$engLDesc', TChnLDesc = '$tChnLDesc', SChnLDesc = '$sChnLDesc', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', ModifyDate=NOW() WHERE NewsID=$newsID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchNews($newsID) {
	$SQL = "SELECT NewsID, NewsCode, DATE_FORMAT(NewsDate,'%Y/%m/%d') AS NewsDate, EngHeader, TChnHeader, SChnHeader, EngSDesc, TChnSDesc, SChnSDesc, EngLDesc, TChnLDesc, SChnLDesc, ShowInIndex, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News WHERE NewsID='$newsID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo() {
	$SQL = "SELECT * FROM News";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllNewsInPage($searchText, $selectField, $criteria, $startRow, $pageSize) {
	if ($criteria == "All")  {
	  $SQL = "SELECT NewsID, NewsCode, EngHeader, TChnHeader, SChnHeader, ShowInIndex, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News ORDER BY Queue LIMIT $startRow, $pageSize";
	} else  {		
	  switch ($selectField)  {
	    case 1:
	      $SQL = "SELECT NewsID, NewsCode, EngHeader, TChnHeader, SChnHeader, ShowInIndex, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News WHERE NewsCode='$searchText' ORDER BY Queue LIMIT $startRow, $pageSize";		
		  break;
		
		case 2:
	      $SQL = "SELECT NewsID, NewsCode, EngHeader, TChnHeader, SChnHeader, ShowInIndex, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News WHERE EngHeader LIKE '$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";			
		  break;
		
		case 3:
	      $SQL = "SELECT NewsID, NewsCode, EngHeader, TChnHeader, SChnHeader, ShowInIndex, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News WHERE TChnHeader LIKE '$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";			
		  break;
		
		case 4:
	      $SQL = "SELECT NewsID, NewsCode, EngHeader, TChnHeader, SChnHeader, ShowInIndex, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM News WHERE SChnHeader LIKE '$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";			
		  break;
		
	  }
	}
	$result = mysql_query($SQL);
	return $result;
}

?>
