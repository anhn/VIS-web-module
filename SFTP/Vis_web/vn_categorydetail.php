<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/category.php");

//coded by THAI
$CategoryID = $_GET['cid'];
if($CategoryID == NULL){
	$CategoryID = 1;
}
$sql = "SELECT * FROM ProductCategory
		WHERE ParentCategoryID=$CategoryID";
//echo $sql."<br>";
$result = mysql_query($sql);
if(mysql_num_rows($result) > 0){
	echo "Sub Categorys:<br>";
	while($rows = mysql_fetch_array($result)){
		echo "<a href='categorydetail.php?cid=".$rows['CategoryID']."'>" . $rows['CategoryName'] . "</a><br>";
	}
	
	$page = $_GET['page'];
	if($page == NULL){
		$pagestart = 0;
	}
	else{
		$pagestart = ($page-1)*15;
	}
	$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID=Detail.ProductID
			WHERE Master.IsPromotion='T'
			AND Master.ViewStatus='T'";
	//echo "SQL=".$sql."<br>";
			
	$result = mysql_query($sql);
	$totalproduct = mysql_num_rows($result);
	//echo "total products:".$totalproduct."<br>";
	$totalpage = (int)($totalproduct/15) + 1;
	//echo "total page:".$totalpage."<br>";
	
	$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID=Detail.ProductID
			WHERE Master.IsPromotion='T'
			AND Master.ViewStatus='T'
			LIMIT $pagestart,15";
	//echo "SQL=".$sql."<br>";
	$result = mysql_query($sql);
	echo "<br>Sản phẩm:<br>";
	echo "<table width='100%' border='0'>";
	echo "<tr bgcolor='#990000' style='font-weight:bold; color:#FFFFFF'>";
	echo "<td>&nbsp;</td>";
	echo "<td>Tên sản phẩm</td>";
	//echo "<td>Loại sản phẩm</td>";
	echo "<td>Giá</td>";
	echo "</tr>";
	
	while($rows = mysql_fetch_array($result)){
		if($rows['Description'] == NULL){
			$rows['Description'] = "Hiện tại không có mô tả về sản phẩm này...";
		}
		echo "<tr bgcolor='#CCCCCC'>";
		echo "<td><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='67px' height='100px' /></td>";
		echo "<td><a href='vn_productdetail.php?pid=".$rows['ProductID']."' style='font-weight:bold; text-decoration:none;'>".$rows['ProductName']."</a><br>".$rows['Description']."<br><a href='vn_productdetail.php?pid=".$rows['ProductID']."' style='text-decoration:none;'>Thêm thông tin</a></td>";
		echo "<td>".$rows['Type']."&nbsp;</td>";
		//echo "<td>".$rows['Price1']."&nbsp;</td>";
		echo "</tr>";
	}
	echo "</table><br>";
	echo "<div style='width:100%; text-align:right; padding-right:10px;'>Trang ";
	for($i=0; $i<$totalpage; $i++){
		echo "<a href='product.php?page=".($i+1)."'>".($i+1)."</a>&nbsp;";
	}
	echo "</div>";
}
else{
	$page = $_GET['page'];
	if($page == NULL){
		$pagestart = 0;
	}
	else{
		$pagestart = ($page-1)*15;
	}
	$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID=Detail.ProductID
			WHERE Master.CategoryID=$CategoryID
			AND Master.ViewStatus='T'";
	//echo "SQL=".$sql."<br>";
			
	$result = mysql_query($sql);
	$totalproduct = mysql_num_rows($result);
	//echo "total products:".$totalproduct."<br>";
	$totalpage = (int)($totalproduct/15) + 1;
	//echo "total page:".$totalpage."<br>";
	
	$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
			ON Master.ProductID=Detail.ProductID
			WHERE Master.CategoryID=$CategoryID
			AND Master.ViewStatus='T'
			LIMIT $pagestart,15";
	//echo "SQL=".$sql."<br>";
	$result = mysql_query($sql);
	
	echo "<table width='100%' border='0'>";
	echo "<tr bgcolor='#990000' style='font-weight:bold; color:#FFFFFF'>";
	echo "<td>&nbsp;</td>";
	echo "<td>Tên sản phẩm</td>";
	//echo "<td>Product Type</td>";
	echo "<td>Giá</td>";
	echo "</tr>";
	
	while($rows = mysql_fetch_array($result)){
		if($rows['Description'] == NULL){
			$rows['Description'] = "Hiện tại không có mô tả về sản phẩm này...";
		}
		echo "<tr bgcolor='#CCCCCC'>";
		echo "<td><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='67px' height='100px' /></td>";
		echo "<td><a href='vn_productdetail.php?pid=".$rows['ProductID']."' style='font-weight:bold; text-decoration:none;'>".$rows['ProductName']."</a><br>".$rows['Description']."<br><a href='vn_productdetail.php?pid=".$rows['ProductID']."' style='text-decoration:none;'>Thêm thông tin</a></td>";
		//echo "<td>".$rows['Type']."&nbsp;</td>";
		echo "<td>".$rows['Price1']."&nbsp;</td>";
		echo "</tr>";
	}
	echo "</table><br>";
	echo "<div style='width:100%; text-align:right; padding-right:10px;'>Trang ";
	for($i=0; $i<$totalpage; $i++){
		echo "<a href='categorydetail.php?cid=".$CategoryID."&page=".($i+1)."'>".($i+1)."</a>&nbsp;";
	}
	echo "</div>";
}
//end coded by THAI
?>