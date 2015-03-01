<?
function InsertProductSubCategory($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status){
	$SQL = "INSERT INTO ProductSubCategory SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ViewStatus='$status', CreateDate = NOW(), ModifyDate = NOW()";
//	echo $SQL;
	$result = mysql_query($SQL);
	return $result;
}



function UpdateProductSubCategory($prodCode, $engHeader, $engSDesc, $engLDesc, $engSpec, $engFeat, $regionID, $remark, $sPhoto, $lPhoto, $showInIndex, $queue, $status, $SubCategoryID) {
	$SQL = "UPDATE ProductSubCategory SET ProdCode = '$prodCode', EngHeader = '$engHeader', EngSDesc = '$engSDesc', EngLDesc = '$engLDesc', EngSpec = '$engSpec', EngFeat = '$engFeat', RegionID = '$regionID', Remark = '$remark', sPhoto = '$sPhoto', lPhoto = '$lPhoto', ShowInIndex = '$showInIndex', Queue='$queue', ViewStatus='$status', ModifyDate = NOW() WHERE SubCategoryID=$SubCategoryID";
	$result = mysql_query($SQL);
	return $result;
}


function SearchProductSubCategory($FamilyID) {
	$SQL = "SELECT ProductSubCategory.SubCategoryID, ProductSubCategory.TChnHeader, ProductSubCategory.SChnHeader, ProductSubCategory.EngSDesc, ProductSubCategory.TChnSDesc, ProductSubCategory.SChnSDesc, ProductSubCategory.EngLDesc, ProductSubCategory.TChnLDesc, ProductSubCategory.SChnLDesc, ProductSubCategory.EngSpec, ProductSubCategory.TChnSpec, ProductSubCategory.SChnSpec, ProductSubCategory.EngFeat, ProductSubCategory.TChnFeat, ProductSubCategory.SChnFeat, ProductSubCategory.RegionID, ProductSubCategory.CatID, ProductSubCategory.Remark, ProductSubCategory.sPhoto, ProductSubCategory.lPhoto, ProductSubCategory.Queue, ProductSubCategory.ViewStatus, DATE_FORMAT(ProductSubCategory.CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ProductSubCategory.ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM ProductSubCategory WHERE ProductSubCategory.SubCategoryID=$FamilyID";
	$result = mysql_query($SQL);
	return $result;
}

function GetRecNoInProductSubCategory($PCID) {
	$SQL = "SELECT COUNT(ProductSubCategoryInFamilyID) AS num FROM ProductSubCategoryInFamily WHERE FamilyID = $PCID";
	$result = mysql_query($SQL);
	$recordCount = mysql_fetch_array($result);
	return $recordCount[num];
}

function SelectAllProductSubCategoryInPage($PCID, $startRow, $pageSize) {
	$SQL = "SELECT ProductSubCategoryInFamily.ProductSubCategoryInFamilyID, ProductSubCategoryInFamily.FamilyID AS PCID, ProductSubCategoryInFamily.ViewStatus AS PCAS, ProductSubCategory.SubCategoryID, ProductSubCategory.SubCategoryName, ProductSubCategory.SubCategoryNameVn, ProductSubCategory.ViewStatus FROM ProductSubCategoryInFamily, ProductSubCategory WHERE ProductSubCategoryInFamily.SubCategoryID = ProductSubCategory.SubCategoryID AND ProductSubCategoryInFamily.FamilyID = $PCID ORDER BY ProductSubCategory.CreateDate LIMIT $startRow,$pageSize";
	#$SQL = "SELECT ProductSubCategory.SubCategoryID, ProductSubCategoryInFamily.FamilyID, Category.EngName FROM ProductSubCategory, ProductSubCategoryInFamily, Category WHERE ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID AND ProductSubCategoryInFamily.FamilyID = Category.FamilyID ORDER BY ProductSubCategory.CreateDate LIMIT $startRow,$pageSize";
	$result = mysql_query($SQL);
	return $result;
}

function SelectAllProductSubCategoryInComb() {
	$SQL = "SELECT ProductSubCategory.SubCategoryID, ProductSubCategory.SubCategoryName, ProductSubCategory.ViewStatus FROM ProductSubCategory ORDER BY ProductSubCategory.SubCategoryName ASC";
	$result = mysql_query($SQL);
	return $result;
}


?>
