<?
function InsertUserAccount($loginID, $pwd, $userName, $email, $status, $group){
	$SQL = "INSERT INTO UserAccount SET LoginID = '$loginID', Password = '$pwd', UserName='$userName', Email='$email', ActiveStatus='$status', AdminGroup='$group', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateUserAccount($userID, $loginID, $pwd, $userName, $email, $group, $status) {
	$SQL = "UPDATE UserAccount SET LoginID = '$loginID', Password='$pwd', UserName='$userName', Email='$email', AdminGroup='$group', ActiveStatus='$status', ModifyDate=NOW() WHERE UserID=$userID";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateUserAccountwoPWD($userID, $loginID, $userName, $email, $group, $status) {
	$SQL = "UPDATE UserAccount SET LoginID = '$loginID', UserName='$userName', Email='$email', AdminGroup='$group', ActiveStatus='$status', ModifyDate=NOW() WHERE UserID=$userID";
	$result = mysql_query($SQL);
	return $result;
}

function SearchUserAccount($userID) {
	$SQL = "SELECT UserID, LoginID, UserName, Email, ActiveStatus, AdminGroup, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM UserAccount WHERE UserID='$userID'";
	$result = mysql_query($SQL);
	return $result;
}

function ChangeUserActiveStatus($UserID) {
	$SQL = "SELECT * FROM UserAccount WHERE UserID=$UserID";
	$query = mysql_query($SQL);
	$userInfo =  mysql_fetch_array($query);
	switch ($userInfo[active])  {
		case 'T' : 
			$SQL = "UPDATE UserAccount SET UserActiveStatus='F' WHERE UserID=$UserID";
			break;
		case 'F' :
			$SQL = "UPDATE UserAccount SET UserActiveStatus='T' WHERE UserID=$UserID";
			break;
	}
	$query = mysql_query($SQL);
	$result =  $query;
	return $result;
}

function GetRecNo($searchText, $criteria) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM UserAccount";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM UserAccount WHERE UserName LIKE '$searchText%' ";
	    break;
	}
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}

function SelectAllOperatorInPage($searchText, $criteria, $startRow, $pageSize) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM UserAccount LIMIT $startRow,$pageSize";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM UserAccount WHERE UserName LIKE '$searchText%' LIMIT $startRow,$pageSize";
	    break;
	}
	$result = mysql_query($SQL);
	return $result;
}

function UserLogin($LoginID, $UserPwd) {
//	$SQL = "SELECT LoginID, UserName, DATE_FORMAT(LastLoginDate, '%M %d, %Y') AS LastLoginDate FROM UserAccount Where LoginID='$LoginID' AND Password='$UserPwd' AND ActiveStatus='T'";
	$SQL = "SELECT LoginID, UserName, AdminGroup FROM UserAccount Where LoginID='$LoginID' AND Password='$UserPwd' AND ActiveStatus='T'";

	$query = mysql_query($SQL);
	If (mysql_num_rows($query) == 0) {
		$result = array (
			'success'=>0,
			'msg'=>"Login Fail"
		);
	} else {
		$row = mysql_fetch_array($query);
		$result = array (
			'success'=>1,
			'loginid'=>$row[LoginID],
			'username'=>$row[UserName],
			'group'=>$row[AdminGroup],
			'lastlogindate'=>$row[LastLoginDate],			
			'msg'=>"Login Success"
		);
	}
	#echo $SQL;
	return $result;
}


?>
