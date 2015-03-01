<?
function InsertCategory($engName, $PCID, $photo, $queue, $status, $show, $position, $sphoto, $activefile, $file, $OutletID){
	$SQL = "INSERT INTO Menu SET EngName = '$engName', PCID = $PCID, ShowInIndex = '$show', Photo = '$photo', Queue='$queue', ActiveStatus='$status', Position='$position', sPhoto='$sphoto', ActiveFile='$activefile', File='$file', CreateDate = NOW(), ModifyDate = NOW(), OutletID='$OutletID'";
	$result = mysql_query($SQL);
	return $result;
}



function UpdateCategory($categoryID, $engName, $PCID, $photo, $queue, $status, $language, $position, $sphoto, $activefile, $file, $OutletID) {
	$SQL = "UPDATE Menu SET EngName = '$engName', PCID = $PCID, Photo = '$photo', Queue=$queue, ActiveStatus='$status', ShowInIndex = '$language', Position='$position', sPhoto='$sphoto', ActiveFile='$activefile', File='$file', ModifyDate=NOW(), OutletID=$OutletID WHERE CategoryID='$categoryID' ";
// 	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}


function SearchCategory($categoryID) {
	$SQL = "SELECT OutletID, CategoryID, EngName, TChnName, SChnName, ShowInIndex, Photo, Queue, ActiveStatus, Position, sPhoto, ActiveFile, File, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, PCID FROM Menu WHERE CategoryID='$categoryID' ";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNo($PCID=0) {
	$SQL = "SELECT * FROM Menu WHERE PCID=$PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	return $recordCount;
}


function SelectAllCategoryInPage($startRow, $pageSize, $PCID=0) {
	  $SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=$PCID ORDER BY Position LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$result = @mysql_query($SQL);
	return $result;
}
function SelectMenuIndexInPage($startRow, $pageSize, $PCID=0) {
	  $SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=$PCID and ActiveStatus='T' ORDER BY Queue LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$rs0 = mysql_query($SQL);
	return $rs0;
}
function SlectShowInIndex($PCID=0)
{
	$sql="SELECT DISTINCT ShowInIndex FROM Menu WHERE PCID=0  ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	echo '<select name="show">';

	if ($row[ShowInIndex]=='T')
	{ echo '<option value="T" selected >English</option>';}
	else {echo '<option value="F" selected >Viet Nam</option>';}
   echo '</select>';
}

function SelectAllCategoryInComb($PCID=0) 
{
	#$SQL = "SELECT CategoryID, EngName, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=$PCID ORDER BY Queue LIMIT $startRow, $pageSize";

	$sql="SELECT DISTINCT CategoryID, EngName FROM Menu WHERE PCID=0 ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) 
	{
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[EngName]</option>";
		$sql1="SELECT CategoryID, EngName FROM Menu WHERE PCID=$row[CategoryID]";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) 
		{
			echo "<option value=$row1[CategoryID]";
			if ($PCID == $row1[CategoryID]) { echo " selected"; }
			echo ">.. $row1[EngName]</option>";
			$sql2="SELECT CategoryID, EngName FROM Menu WHERE PCID=$row1[CategoryID]";
			$query2=mysql_query($sql2);
			while ($row2=mysql_fetch_array($query2))
			{
			echo "<option value=$row2[CategoryID]";
			if ($PCID==$row2[Category]) {echo "selected";}
			echo ">...$row2[EngName]</option>";
				$sql3="SELECT CategoryID, EngName FROM Menu WHERE PCID=$row2[CategoryID]";
				$query3=mysql_query($sql3);
				while ($row3=mysql_fetch_array($query3))
				{
				echo "<option value=$row3[CategoryID]";
				if ($PCID==$row3[Category]) {echo "selected";}
				echo ">....$row3[EngName]</option>";
				}
				
			}
		
		}
		
	}
	echo '</select>';
}

function SearchMenu($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="menudetail.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="menudetail.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo $row[EngName];}

  }
}

function SearchMenuVn($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="vn_menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="vn_menudetail.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="vn_menudetail.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="vn_menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="vn_menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo $row[EngName];}

  }
}

//end SearchMenuVn
function MenuMenu($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo $row[EngName];}

  }
}

function MenuMenuVn($id) 
{
$sql="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row[PCID]";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Menu WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
		if($row1[PCID]==0)
	{echo '<a href="vn_menudetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
		 }
	
						
    }
				
	else
	{echo $row[EngName];}

  }
}
//end MenuMenuVn

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

function MenuEngName($id) 
{
echo '<table width="98%" border="0">';

$SQL3 = "SELECT * FROM Menu where PCID=$_GET[id] and ActiveStatus='T' and ShowInIndex='T'";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
 {
	
    echo '<tr>'; 
    echo '<td><div align="justify">';
	if ($row3["Queue"]=='1'){echo '<a href=menudetail.php?id='.$row3["CategoryID"].'>'.$row3["EngName"].'</a>';}
	else {echo '<a href=contact_.php?id='.$row3["CategoryID"].'>'.$row3["EngName"].'</a>';}
	echo '</div></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><div align="justify"></div></td>';
    echo '</tr>';
    
 }
echo '</table>';
}

function MenuEngNameVn($id) 
{
echo '<table width="98%" border="0">';

$SQL3 = "SELECT * FROM Menu where PCID=$_GET[id] and ActiveStatus='T' and ShowInIndex='F'";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
 {
	
    echo '<tr>'; 
    echo '<td><div align="justify">';
	if ($row3["Queue"]=='1'){echo '<a href=vn_menudetail.php?id='.$row3["CategoryID"].'>'.$row3["EngName"].'</a>';}
	else {echo '<a href=contact_.php?id='.$row3["CategoryID"].'>'.$row3["EngName"].'</a>';}
	echo '</div></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><div align="justify"></div></td>';
    echo '</tr>';
    
 }
echo '</table>';
}


function MenuPhoto($id) 
{
echo '<table width="98%" border="0">';

$SQL3 = "SELECT * FROM Menu where PCID=$_GET[id] and ActiveStatus='T' and ShowInIndex='T'";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
 {
	
    echo '<tr>'; 
    echo '<td><div align="justify">';
	echo $row3["Photo"];
	echo '</div></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><div align="justify"><hr noshade></div></td>';
    echo '</tr>';
    
 }
echo '</table>';
}

function MenuPhotoVn($id) 
{
echo '<table width="98%" border="0">';

$SQL3 = "SELECT * FROM Menu where PCID=$_GET[id] and ActiveStatus='T' and ShowInIndex='F'";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
 {
	
    echo '<tr>'; 
    echo '<td><div align="justify">';
	echo $row3["Photo"];
	echo '</div></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><div align="justify"><hr noshade></div></td>';
    echo '</tr>';
    
 }
echo '</table>';
}

?>
