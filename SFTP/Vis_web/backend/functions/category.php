<?
function InsertCategory($engName, $PCID, $photo, $queue, $status, $showindex, $lphoto){
	$SQL = "INSERT INTO Category SET EngName = '$engName', PCID = $PCID, Photo = '$photo', Queue='$queue', ActiveStatus='$status', ShowInIndex='$showindex', lPhoto = '$lphoto', CreateDate = NOW(), ModifyDate = NOW()";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateCategory($categoryID, $engName, $PCID, $photo, $queue, $status, $lphoto) {
	$SQL = "UPDATE Category SET EngName = '$engName', PCID = $PCID, Photo = '$photo', Queue='$queue', ActiveStatus='$status', lPhoto='$lphoto', ModifyDate=NOW() WHERE CategoryID=$categoryID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchCategory($categoryID) {
	$SQL = "SELECT CategoryID, EngName, TChnName, SChnName, Photo, Queue, ActiveStatus, ShowInIndex, lPhoto, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, PCID FROM Category WHERE CategoryID='$categoryID'";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($PCID=0) {
	$SQL = "SELECT * FROM Category WHERE PCID=$PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllCategoryInPage($startRow, $pageSize, $PCID=0) {
	  $SQL = "SELECT CategoryID, EngName, Photo, Queue, ActiveStatus, ShowInIndex, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Category WHERE PCID=$PCID  ORDER BY Queue LIMIT $startRow, $pageSize";
	  
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllCategoryInComb($PCID=0) {
	#$SQL = "SELECT CategoryID, EngName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Category WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT CategoryID, EngName FROM Category WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[EngName]</option>";
		$sql1="SELECT CategoryID, EngName FROM Category WHERE PCID=$row[CategoryID]";
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

function SelectAllCategory($PCID=0) {
	#$SQL = "SELECT CategoryID, EngName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Category WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT CategoryID, EngName FROM Category WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) {
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[EngName]</option>";
		$sql1="SELECT CategoryID, EngName FROM Category WHERE PCID=$row[CategoryID]";
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

function MenuCategory($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.'<a href="categorydetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo '<a href="categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}

  }
}


function MenuCategoryVn($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="vn_categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.'<a href="vn_categorydetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo '<a href="vn_categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}

  }
}

?>
