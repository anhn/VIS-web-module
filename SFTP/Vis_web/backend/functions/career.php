<?
function InsertCareer($careerCode, $engHeader, $tChnHeader, $sChnHeader, $engContent, $tChnContent, $sChnContent, $queue, $status){
	$SQL = "INSERT INTO Career SET CareerCode = '$careerCode', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngContent = '$engContent', TChnContent = '$tChnContent', SChnContent = '$sChnContent', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateCareer($careerID, $careerCode, $engHeader, $tChnHeader, $sChnHeader, $engContent, $tChnContent, $sChnContent, $queue, $status) {
	$SQL = "UPDATE Career SET CareerCode = '$careerCode', EngHeader = '$engHeader', TChnHeader = '$tChnHeader', SChnHeader = '$sChnHeader', EngContent = '$engContent', TChnContent = '$tChnContent', SChnContent = '$sChnContent', Queue='$queue', ActiveStatus='$status', ModifyDate=NOW() WHERE CareerID=$careerID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchCareer($careerID) {
	$SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career WHERE CareerID='$careerID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo() {
	$SQL = "SELECT * FROM Career";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}


function SelectAllCareerInPage($searchText, $selectField, $criteria, $startRow, $pageSize) {
	if ($criteria == "All")  {
	  $SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career ORDER BY Queue LIMIT $startRow, $pageSize";
	} else  {		
	  switch ($selectField)  {
	    case 1:
	      $SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career WHERE CareerCode='$searchText' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 2:
	      $SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career WHERE EngHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 3:
	      $SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career WHERE TChnHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
		case 4:
	      $SQL = "SELECT CareerID, CareerCode, EngHeader, TChnHeader, SChnHeader, EngContent, TChnContent, SChnContent, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Career WHERE SChnHeader LIKE '%$searchText%' ORDER BY Queue LIMIT $startRow, $pageSize";
		  break;
		
	  }
	}
	  
	$result = mysql_query($SQL);
	return $result;
}

?>
