<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/products.php");

//Coded by THAI
//product page, only view products with isPromotion=1
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
if($totalproduct%5 == 0){
	$totalpage = $totalproduct/15;
}
else{
	//echo "total products:".$totalproduct."<br>";
	$totalpage = (int)($totalproduct/15) + 1;
	//echo "total page:".$totalpage."<br>";
}

$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
		ON Master.ProductID=Detail.ProductID
		WHERE Master.IsPromotion='T'
		AND Master.ViewStatus='T'
		LIMIT $pagestart,15";
//echo "SQL=".$sql."<br>";
$result = mysql_query($sql);

echo "<table width='100%' border='0'>";
echo "<tr bgcolor='#990000' style='font-weight:bold; color:#FFFFFF'>";
echo "<td width='25%' height='25px' align='center'>&nbsp;</td>";
echo "<td width='60%'>Product Name</td>";
//echo "<td width='15%' align='center'>Product Type</td>";
echo "<td width='15%' align='center'>Price</td>";
echo "</tr>";

while($rows = mysql_fetch_array($result)){
	if($rows['Description'] == NULL){
		$rows['Description'] = "This item does not currently have a description.....";
	}
	echo "<tr bgcolor='#e4e4e4'>";
	echo "<td align='center'><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='67px' height='100px' /></td>";
	echo "<td><a href='productdetail.php?pid=".$rows['ProductID']."' style='font-weight:bold; text-decoration:none;'>".$rows['ProductName']."</a><br>".$rows['Description']."<br><a href='productdetail.php?pid=".$rows['ProductID']."' style='text-decoration:none;'>More Information</a></td>";
	//echo "<td align='center'>".$rows['Type']."&nbsp;</td>";
	echo "<td align='center'>$ ".$rows['Price1']."&nbsp;</td>";
	echo "</tr>";
}
echo "</table><br>";
echo "<div style='width:100%; text-align:right; padding-right:10px;'>Page ";
for($i=0; $i<$totalpage; $i++){
	echo "<a href='product.php?page=".($i+1)."'>".($i+1)."</a>&nbsp;";
}
echo "</div>";
//end coded by THAI
?>
