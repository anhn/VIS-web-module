<?
function InsertProduct($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status){
	$SQL = "INSERT INTO Product SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
//	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProduct($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status, $prodid) {
	$SQL = "UPDATE Product SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ActiveStatus='$status', ModifyDate = NOW() WHERE ProdID=$prodid";
	$result = mysql_query($SQL);
	return $result;
}


function SearchProduct($categoryID) {
	$SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.TChnHeader, Product.SChnHeader, Product.EngSDesc, Product.TChnSDesc, Product.SChnSDesc, Product.EngLDesc, Product.TChnLDesc, Product.SChnLDesc, Product.EngSpec, Product.TChnSpec, Product.SChnSpec, Product.EngFeat, Product.TChnFeat, Product.SChnFeat, Product.RegionID, Product.CatID, Product.Remark, Product.sPhoto, Product.lPhoto, Product.Queue, Product.ActiveStatus, Product.ShowInIndex, DATE_FORMAT(Product.CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(Product.ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Product WHERE Product.ProdID=$categoryID";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInProduct($PCID) {
	$SQL = "SELECT COUNT(ProdCatID) AS num FROM productonline WHERE CategoryID = $PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_fetch_array($result);
	return $recordCount[num];
}

function SelectAllProductInPage($PCID, $startRow, $pageSize) {
	$SQL = "SELECT productonline.ProdCatID, productonline.CategoryID AS PCID, productonline.ActiveStatus AS PCAS, Product.ProdID, Product.ProdCode, Product.EngHeader, Product.ShowInIndex, Product.ActiveStatus FROM productonline, Product WHERE productonline.ProdID = Product.ProdID AND productonline.CategoryID = $PCID ORDER BY Product.Queue LIMIT $startRow,$pageSize";
	#$SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.ShowInIndex, productonline.CategoryID, Category.EngName FROM Product, productonline, Category WHERE Product.ProdID = productonline.ProdID AND productonline.CategoryID = Category.CategoryID ORDER BY Product.Queue LIMIT $startRow,$pageSize";
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllProductInComb() {
	$SQL = "SELECT Product.ProdID, Product.ProdCode, Product.EngHeader, Product.ShowInIndex, Product.ActiveStatus FROM Product ORDER BY Product.Queue";
	$result = mysql_query($SQL);
	return $result;
}


?>
