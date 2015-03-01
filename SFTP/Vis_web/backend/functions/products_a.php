<?
function InsertProduct($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status, $vnfeat, $remarkVn){
	$SQL = "INSERT INTO Product SET ProdCode = '$prodCode', EngHeader = '$engHeader', TChnSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', TChnFeat='$vnfeat', SChnFeat='$remarkVn', CreateDate = NOW(), ModifyDate = NOW()";
//	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProduct($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status, $vnheader, $vnfeat, $remarkVn, $prodid) {
	$SQL = "UPDATE Product SET ProdCode = '$prodCode', EngHeader = '$engHeader', TChnSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', TChnSDesc='$vnheader', TChnFeat='$vnfeat', SChnFeat='$remarkVn', ModifyDate = NOW() WHERE ProdID=$prodid";
	$result = mysql_query($SQL);
	return $result;
}


function SearchProduct($categoryID) {
	$SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.TChnHeader, Product.SChnHeader, Product.EngSDesc, Product.TChnSDesc, Product.SChnSDesc, Product.EngLDesc, Product.TChnLDesc, Product.SChnLDesc, Product.EngSpec, Product.TChnSpec, Product.SChnSpec, Product.EngFeat, Product.TChnFeat, Product.SChnFeat, Product.RegionID, Product.CatID, Product.Remark, Product.sPhoto, Product.lPhoto, Product.Queue, Product.ActiveStatus, Product.ShowInIndex, DATE_FORMAT(Product.CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(Product.ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Product WHERE Product.ProdID=$categoryID";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInProduct($searchText, $criteria) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT * FROM Product";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT * FROM Product";
	    break;
	}
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
	
	return $recordCount;
}

function SelectAllProductInPage($searchText, $criteria, $startRow, $pageSize) {
	switch ($criteria)  {
	  case ("All") :
	    $SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.ShowInIndex, Product.ActiveStatus FROM Product ORDER BY Product.Queue LIMIT $startRow,$pageSize";
	    break;
	  
	  case ("Search") :
	    $SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.ShowInIndex, ProductCategory.CategoryID, Category.EngName FROM Product, ProductCategory, Category WHERE Product.ProdID = ProductCategory.ProdID AND ProductCategory.CategoryID = Category.CategoryID ORDER BY Product.Queue LIMIT $startRow,$pageSize";
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

?>
