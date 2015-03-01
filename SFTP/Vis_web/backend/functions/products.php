<?
function InsertProduct($master,$detail,$outlet,$outletprice,$chartype,$charname){
	$SQL = "INSERT INTO ProductMaster SET ";
	foreach ($master as $key=>$val) {
		$SQL .= $key."='".$val."',";
	}
	$SQL[strlen($SQL)-1] = ' ';
// 	echo $SQL;
	$result = mysql_query($SQL);
	
	// get the PID
	$SQL = "SELECT MAX(ProductID) as MAXID FROM ProductMaster";
	$result = mysql_query($SQL);
	$row = mysql_fetch_array($result);
	$pid = $row['MAXID'];
	
	$detail["ProductID"] = $pid;
	$SQL = "INSERT INTO ProductDetail SET ";
	foreach ($detail as $key=>$val) {
		$SQL .= $key."='".$val."',";
	}
	$SQL[strlen($SQL)-1] = ' ';
// 	echo $SQL;
	$result = mysql_query($SQL);
	if (is_array($outlet))
	foreach ($outlet as $key=>$val) {
		$SQL = "INSERT INTO ProductInOutlet SET ProductID=".$pid.", OutletID=".$val.", Price=".$outletprice[$key];
// 		echo $SQL;
		$result = mysql_query($SQL);
	}
	
	if (is_array($chartype))
	foreach ($chartype as $key=>$val) {
		if ($val != "") {
		$SQL = "INSERT INTO ProductCharacteristics SET ProductID=".$pid.", CharacteristicTypeID=".$val.", Name='".$charname[$key]."'";
// 		echo $SQL;
		$result = mysql_query($SQL);
		}
	}
	return $result;
}



function UpdateProduct($pid, $master,$detail,$outlet,$outletprice,$chartype,$charname) {
	$SQL = "UPDATE ProductMaster SET ";
	foreach ($master as $key=>$val) {
		$SQL .= $key."='".$val."',";
	}
	$SQL[strlen($SQL)-1] = ' ';
	$SQL .= " WHERE ProductID=".$pid;
// 	echo $SQL;
	$result = mysql_query($SQL);
	
	$SQL = "UPDATE ProductDetail SET ";
	foreach ($detail as $key=>$val) {
		$SQL .= $key."='".$val."',";
	}
	$SQL[strlen($SQL)-1] = ' ';
	$SQL .= " WHERE ProductID=".$pid;
// 	echo $SQL;
	$result = mysql_query($SQL);
	$SQL = "DELETE FROM ProductInOutlet WHERE ProductID=".$pid;
// 	echo $SQL;
	$result = mysql_query($SQL);
	if (is_array($outlet))
	foreach ($outlet as $key=>$val) {
		$SQL = "INSERT INTO ProductInOutlet SET ProductID=".$pid.", OutletID=".$val.", Price=".$outletprice[$key];
// 		echo $SQL;
		$result = mysql_query($SQL);
	}
	$SQL = "DELETE FROM ProductCharacteristics WHERE ProductID=".$pid;
	$result = mysql_query($SQL);
	if (is_array($chartype))
	foreach ($chartype as $key=>$val) {
		if ($val != "") {
		$SQL = "INSERT INTO ProductCharacteristics SET ProductID=".$pid.", CharacteristicTypeID=".$val.", Name='".$charname[$key]."'";
// 		echo $SQL;
		$result = mysql_query($SQL);
		}
	}
	return $result;
}


function SearchProductMaster($categoryID) {
	$SQL = "SELECT * FROM ProductMaster WHERE ProductID=$categoryID";
	$result = mysql_query($SQL);
	return $result;
}

function SearchProductDetail($categoryID) {
	$SQL = "SELECT * FROM ProductDetail WHERE ProductID=$categoryID";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInProduct($searchText, $criteria) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM ProductMaster";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM ProductMaster";
	    break;
	}
	$result = mysql_query($SQL);
	if ($result) $recordCount = mysql_num_rows($result);
	else $recordCount = 0;
	
	return $recordCount;
}

function SelectAllProductInPage($searchText, $criteria, $startRow, $pageSize) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM ProductMaster LIMIT $startRow,$pageSize";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM ProductMaster LIMIT $startRow,$pageSize";
	    break;
	}
	$result = mysql_query($SQL);
	return $result;
}

function MenuProducts($id)
{
$sql="SELECT * FROM Category where CategoryID=$_GET[id]";
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


function MenuProductsVn($id)
{
$sql="SELECT * FROM Category where CategoryID=$_GET[id]";
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

//end MenuProductsVn

function MenuProductDetail($id)
{
$sql0="SELECT * FROM Product where ProdID=$id";
$query0=mysql_query($sql0);
$row0=mysql_fetch_array($query0);
$ProdCode=$row0[ProdCode];
$sql="SELECT * FROM Category INNER JOIN ProductCategory ON Category.CategoryID=ProductCategory.CategoryID where ProdID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row[PCID] and ShowInIndex='T'";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
				/*
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
				*/
		if($row1[PCID]==0)
	{echo '<a href="categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.'<a href="categorydetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="product.php?id='.$row[CategoryID].'">'.$row[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$ProdCode;}
	
		 }
	
						
    }
				
	else
	{echo '<a href="categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}

  }

}

function MenuProductDetailVn($id)
{
$sql0="SELECT * FROM Product where ProdID=$id";
$query0=mysql_query($sql0);
$row0=mysql_fetch_array($query0);
$ProdCode=$row0[ProdCode];
$sql="SELECT * FROM Category INNER JOIN ProductCategory ON Category.CategoryID=ProductCategory.CategoryID where ProdID=$id";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) 
 {
 if ($row[PCID]!=0)
   {
  $sql1="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row[PCID] and ShowInIndex='F'";
  $query1=mysql_query($sql1);
  	while ($row1=mysql_fetch_array($query1)) 
		{
				/*
					$sql2="SELECT CategoryID, EngName, PCID, Queue FROM Category WHERE CategoryID=$row1[PCID]";
			  		$query2=mysql_query($sql2);
						while($row2=mysql_fetch_array($query2))
						{		
							
							if ($row2[CategoryID] > $row1[CategoryID])
								{echo '<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
							else
								{echo '<a href="category_.php?id='.$row2[CategoryID].'">'.$row2[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="category_.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}
	
						}
				*/
		if($row1[PCID]==0)
	{echo '<a href="vn_categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.'<a href="vn_categorydetail.php?id='.$row1[CategoryID].'">'.$row1[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.'<a href="product.php?id='.$row[CategoryID].'">'.$row[EngName].'</a>'.'&nbsp;&gt;&nbsp;'.$ProdCode;}
	
		 }
	
						
    }
				
	else
	{echo '<a href="vn_categorydetail.php?id=1">Vine Cellar</a>'.'&nbsp;&gt;&nbsp;'.$row[EngName];}

  }

}
function SearchFamily()
{

$sql="SELECT FamilyID, Name, NameVn FROM ProductFamily ORDER BY CreateDate DESC";
	$query1=mysql_query($sql);
	
	echo '<select name="productfamilyid">';
	while ($row1=mysql_fetch_array($query1))
	{
	echo '<option value="'.$row1[FamilyID].'" >'.$row1[Name].'</option>';

	}   
   echo '</select>';
}
function SearchCategory()
{
$sql="SELECT CategoryID, CategoryName, CategoryNameVn FROM ProductCategory ORDER BY CreateDate DESC";
	$query1=mysql_query($sql);
	
	echo '<select name="productcategoryid">';
	while ($row1=mysql_fetch_array($query1))
	{
	echo '<option value="'.$row1[CategoryID].'" >'.$row1[CategoryName].'</option>';

	}   
   echo '</select>';
}
function SearchSubCategory()
{
$sql="SELECT SubCategoryID, SubCategoryName, SubCategoryNameVn FROM ProductSubCategory ORDER BY CreateDate DESC";
	$query1=mysql_query($sql);
	
	echo '<select name="productsubcategoryid">';
	while ($row1=mysql_fetch_array($query1))
	{
	echo '<option value="'.$row1[SubCategoryID].'" >'.$row1[SubCategoryName].'</option>';

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
    //echo $sql;
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
