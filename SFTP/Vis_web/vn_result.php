<?php
//coded by THAI
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/products.php");

productSearch();

function searchByName($keyword, $ProductCategory, $ProductFamily, $ProductCountry, $pricemin, $pricemax, $sorting){
	$page = $_GET['page'];
	if($page == NULL){
		$pagestart = 0;
	}
	else{
		$pagestart = ($page-1)*15;
	}

	$sql = "SELECT DISTINCT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID = Detail.ProductID
			JOIN ProductCategory AS Category
			ON Master.CategoryID = Category.CategoryID
			JOIN ProductFamily AS Family
			ON Master.FamilyID = Family.FamilyID
			JOIN ProductCharacteristics AS Charac
			ON Master.ProductID = Charac.ProductID
			WHERE Master.ProductName LIKE '%$keyword%'
			AND Master.ViewStatus = 'T'";
	
	if($ProductCategory != "All"){
		$sql .= " AND Category.CategoryID = $ProductCategory";
	}
	
	if($ProductFamily != "All"){
		$sql .= " AND Family.FamilyID = $ProductFamily";
	}
	
	if($ProductCountry != "All"){
		$sql .= " AND Charac.Name = '$ProductCountry'";
	}
	
	if($pricemin != NULL){
		$sql .= " AND Detail.Price1 >= $pricemin";
	}
	
	if($pricemax != NULL){
		$sql .= " AND Detail.Price1 <= $pricemax";
	}
	
	if($sorting != NULL){
		$sql .= " ORDER BY $sorting DESC";
	}
	
	//echo $sql."<br>";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) == 0){
		echo "Không tìm thấy sản phẩm!";
		return;
	}

	$totalproduct = mysql_num_rows($result);
	if($totalproduct%15 == 0){
		$totalpage = $totalproduct/15;
	}
	else{
		//echo "total products:".$totalproduct."<br>";
		$totalpage = (int)($totalproduct/15) + 1;
		//echo "total page:".$totalpage."<br>";
	}
	
	$sql = "SELECT DISTINCT  * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID = Detail.ProductID
			JOIN ProductCategory AS Category
			ON Master.CategoryID = Category.CategoryID
			JOIN ProductFamily AS Family
			ON Master.FamilyID = Family.FamilyID
			JOIN ProductCharacteristics AS Charac
			ON Master.ProductID = Charac.ProductID
			WHERE Master.ProductName LIKE '%$keyword%'
			AND Master.ViewStatus = 'T'";
	
	if($ProductCategory != "All"){
		$sql .= " AND Category.CategoryID = $ProductCategory";
	}
	
	if($ProductFamily != "All"){
		$sql .= " AND Family.FamilyID = $ProductFamily";
	}
	
	if($ProductCountry != "All"){
		$sql .= " AND Charac.Name = '$ProductCountry'";
	}
	
	if($pricemin != NULL){
		$sql .= " AND Detail.Price1 >= $pricemin";
	}
	
	if($pricemax != NULL){
		$sql .= " AND Detail.Price1 <= $pricemax";
	}
	
	if($sorting != NULL){
		$sql .= " ORDER BY $sorting DESC";
	}
	
	$sql .= " LIMIT $pagestart,15";

	$result = mysql_query($sql);
	
	echo "<table width='100%' border='0'>";
	echo "<tr bgcolor='#990000' style='font-weight:bold; color:#FFFFFF'>";
	echo "<td width='25%' height='25px'>&nbsp;</td>";
	echo "<td width='60%'>Tên sản phẩm</td>";
	//echo "<td width='15%'>Product Type</td>";
	echo "<td width='15%' align='center'>Giá</td>";
	echo "</tr>";
	
	while($rows = mysql_fetch_array($result)){
		echo "<tr bgcolor='#CCCCCC'>";
		echo "<td><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='67px' height='100px' /></td>";
		echo "<td><a href='productdetail.php?pid=".$rows['ProductID']."' style='font-weight:bold; text-decoration:none;'>".$rows['ProductName']."</a><br>".$rows['Description']."<br><a href='productdetail.php?pid=".$rows['ProductID']."' style='text-decoration:none;'>More Information</a></td>";
		//echo "<td>".$rows['Type']."&nbsp;</td>";
		echo "<td align='center'>$ ".$rows['Price1']."&nbsp;</td>";
		echo "</tr>";
	}
	echo "</table><br>";
	echo "<div style='width:100%; text-align:right; padding-right:10px;'>Trang ";
	for($i=0; $i<$totalpage; $i++){
		echo "<a href='product.php?page=".($i+1)."'>".($i+1)."</a>&nbsp;";
	}
	echo "</div>";
}

function searchByType($keyword, $ProductCategory, $ProductFamily, $ProductCountry, $pricemin, $pricemax, $sorting){
	$page = $_GET['page'];
	if($page == NULL){
		$pagestart = 0;
	}
	else{
		$pagestart = ($page-1)*15;
	}

	$sql = "SELECT DISTINCT  * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID = Detail.ProductID
			JOIN ProductCategory AS Category
			ON Master.CategoryID = Category.CategoryID
			JOIN ProductFamily AS Family
			ON Master.FamilyID = Family.FamilyID
			JOIN ProductCharacteristics AS Charac
			ON Master.ProductID = Charac.ProductID
			WHERE Master.Type LIKE '%$keyword%'
			AND Master.ViewStatus = 'T'";
	
	if($ProductCategory != "All"){
		$sql .= " AND Category.CategoryID = $ProductCategory";
	}
	
	if($ProductFamily != "All"){
		$sql .= " AND Family.FamilyID = $ProductFamily";
	}
	
	if($ProductCountry != "All"){
		$sql .= " AND Charac.Name = '$ProductCountry'";
	}
	
	if($pricemin != NULL){
		$sql .= " AND Detail.Price1 >= $pricemin";
	}
	
	if($pricemax != NULL){
		$sql .= " AND Detail.Price1 <= $pricemax";
	}
	
	if($sorting != NULL){
		$sql .= " ORDER BY $sorting";
	}
	
	//echo $sql."<br>";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) == 0){
		echo "Không tìm thấy sản phẩm!";
		return;
	}

	$totalproduct = mysql_num_rows($result);
	if($totalproduct%15 == 0){
		$totalpage = $totalproduct/15;
	}
	else{
		//echo "total products:".$totalproduct."<br>";
		$totalpage = (int)($totalproduct/15) + 1;
		//echo "total page:".$totalpage."<br>";
	}
	
	$sql = "SELECT DISTINCT  * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID = Detail.ProductID
			JOIN ProductCategory AS Category
			ON Master.CategoryID = Category.CategoryID
			JOIN ProductFamily AS Family
			ON Master.FamilyID = Family.FamilyID
			JOIN ProductCharacteristics AS Charac
			ON Master.ProductID = Charac.ProductID
			WHERE Master.Type LIKE '%$keyword%'
			AND Master.ViewStatus = 'T'";
	
	if($ProductCategory != "All"){
		$sql .= " AND Category.CategoryID = $ProductCategory";
	}
	
	if($ProductFamily != "All"){
		$sql .= " AND Family.FamilyID = $ProductFamily";
	}
	
	if($ProductCountry != "All"){
		$sql .= " AND Charac.Name = '$ProductCountry'";
	}
	
	if($pricemin != NULL){
		$sql .= " AND Detail.Price1 >= $pricemin";
	}
	
	if($pricemax != NULL){
		$sql .= " AND Detail.Price1 <= $pricemax";
	}
	
	if($sorting != NULL){
		$sql .= " ORDER BY $sorting";
	}
	
	$sql .= " LIMIT $pagestart,15";

	$result = mysql_query($sql);
	
	echo "<table width='100%' border='0'>";
	echo "<tr bgcolor='#990000' style='font-weight:bold; color:#FFFFFF'>";
	echo "<td width='25%' height='25px'>&nbsp;</td>";
	echo "<td width='60%'>Tên sản phẩm</td>";
	//echo "<td width='15%'>Product Type</td>";
	echo "<td width='15%' align='center'>Giá</td>";
	echo "</tr>";
	
	while($rows = mysql_fetch_array($result)){
		echo "<tr bgcolor='#CCCCCC'>";
		echo "<td><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='67px' height='100px' /></td>";
		echo "<td><a href='productdetail.php?pid=".$rows['ProductID']."' style='font-weight:bold; text-decoration:none;'>".$rows['ProductName']."</a><br>".$rows['Description']."<br><a href='productdetail.php?pid=".$rows['ProductID']."' style='text-decoration:none;'>More Information</a></td>";
		//echo "<td>".$rows['Type']."&nbsp;</td>";
		echo "<td align='center'>$ ".$rows['Price1']."&nbsp;</td>";
		echo "</tr>";
	}
	echo "</table><br>";
	echo "<div style='width:100%; text-align:right; padding-right:10px;'>Trang ";
	for($i=0; $i<$totalpage; $i++){
		echo "<a href='product.php?page=".($i+1)."'>".($i+1)."</a>&nbsp;";
	}
	echo "</div>";
}

function productSearch(){
	$SearchBy = $_POST['SearchBy'];
	$keyword = $_POST['keyword'];
	$ProductCategory = $_POST['ProductCategory'];
	$ProductFamily = $_POST['ProductFamily'];
	$ProductCountry = $_POST['ProductCountry'];
	$pricemin = $_POST['pricemin'];
	$sorting = $_POST['SortingBy'];
	if($sorting == "Cat"){
		$sorting = "Category.CategoryName";
	}
	elseif($sorting == "Cou"){
		$sorting = "Charac.Name";
	}
	else{
		$sorting = "Detail.Price1";
	}
	if($pricemin == NULL){
		$pricemin = 0;
	}
	$pricemax = $_POST['pricemax'];
	if($pricemax == NULL){
		$pricemax = 9999999;
	}
	
	switch($SearchBy){
		case "Name":
			searchByName($keyword, $ProductCategory, $ProductFamily, $ProductCountry, $pricemin, $pricemax, $sorting);
			break;
		case "Type":
			searchByType($keyword, $ProductCategory, $ProductFamily, $ProductCountry, $pricemin, $pricemax, $sorting);
			break;
		default:
			searchByCategory($ProductCategory);
	}
}
//end coded by THAI
?>