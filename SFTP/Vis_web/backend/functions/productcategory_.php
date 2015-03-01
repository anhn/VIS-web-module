<?
function InsertProductCategory($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status){
	$SQL = "INSERT INTO ProductCategory SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ViewStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
//	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProductCategory($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status, $CategoryID) {
	$SQL = "UPDATE ProductCategory SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ViewStatus='$status', ModifyDate = NOW() WHERE CategoryID=$CategoryID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchProductCategory($FamilyID) {
	$SQL = "SELECT ProductCategory.CategoryID, ProductCategory.TChnHeader, ProductCategory.SChnHeader, ProductCategory.EngSDesc, ProductCategory.TChnSDesc, ProductCategory.SChnSDesc, ProductCategory.EngLDesc, ProductCategory.TChnLDesc, ProductCategory.SChnLDesc, ProductCategory.EngSpec, ProductCategory.TChnSpec, ProductCategory.SChnSpec, ProductCategory.EngFeat, ProductCategory.TChnFeat, ProductCategory.SChnFeat, ProductCategory.RegionID, ProductCategory.CatID, ProductCategory.Remark, ProductCategory.sPhoto, ProductCategory.lPhoto, ProductCategory.Queue, ProductCategory.ViewStatus, DATE_FORMAT(ProductCategory.CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ProductCategory.ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductCategory WHERE ProductCategory.CategoryID=$FamilyID";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInProductCategory($PCID) {
	$SQL = "SELECT COUNT(ProductCategoryInFamilyID) AS num FROM ProductCategoryInFamily WHERE FamilyID = $PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_fetch_array($result);
	return $recordCount[num];
}

function SelectAllProductCategoryInPage($PCID, $startRow, $pageSize) {
	$SQL = "SELECT ProductCategoryInFamily.ProductCategoryInFamilyID, ProductCategoryInFamily.FamilyID AS PCID, ProductCategoryInFamily.ViewStatus AS PCAS, ProductCategory.CategoryID, ProductCategory.CategoryName, ProductCategory.CategoryNameVn, ProductCategory.ViewStatus FROM ProductCategoryInFamily, ProductCategory WHERE ProductCategoryInFamily.CategoryID = ProductCategory.CategoryID AND ProductCategoryInFamily.FamilyID = $PCID ORDER BY ProductCategory.CreateDate LIMIT $startRow,$pageSize";
	#$SQL = "SELECT ProductCategory.CategoryID, ProductCategoryInFamily.FamilyID, Category.EngName FROM ProductCategory, ProductCategoryInFamily, Category WHERE ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID AND ProductCategoryInFamily.FamilyID = Category.FamilyID ORDER BY ProductCategory.CreateDate LIMIT $startRow,$pageSize";
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllProductCategoryInComb() {
	$SQL = "SELECT ProductCategory.CategoryID, ProductCategory.CategoryName, ProductCategory.ViewStatus FROM ProductCategory ORDER BY ProductCategory.CategoryName ASC";
	$result = mysql_query($SQL);
	return $result;
}


?>
