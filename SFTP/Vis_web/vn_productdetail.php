<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/products.php");

//coded by THAI
$ProductID = $_GET['pid'];
$sql = "SELECT * FROM ProductMaster AS Master JOIN ProductDetail AS Detail
		ON Master.ProductID = Detail.ProductID
		JOIN ProductFamily as Family
		ON Master.FamilyID = Family.FamilyID
		JOIN ProductCategory as Category
		ON Master.CategoryID = Category.CategoryID
		WHERE Master.ProductID=$ProductID";
//echo $sql."<br>";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$pathstr = "<a href='vn_categorydetail.php?cid=".$rows['CategoryID']."' style='color:red; text-decoration:none'>".$rows['CategoryName'] . "</a>";
$arr = $rows['ParentCategoryID'];
while($arr > 0){
	$sql = "SELECT * FROM ProductCategory
			WHERE CategoryID=" . $arr;
	$result = mysql_query($sql);
	$rows2 = mysql_fetch_array($result);
	$pathstr = "<a href='vn_categorydetail.php?cid=" . $rows2['CategoryID']. "' style='color:red; text-decoration:none'>" . $rows2['CategoryName'] . "</a> &gt; " . $pathstr;
	$arr = $rows2['ParentCategoryID'];
}
//$pathstr .= $pathstr . " -&gt; <a href='categorydetail.php?cid=" . $rows['CategoryID']. "'>" . $rows['CategoryName'] . "</a>";
echo "<div style='font-weight:bold; color:red'>Trang chủ &gt; ".$pathstr."<br /><span style='padding-left:20px;'>".$rows['ProductName']."</span></div>";
echo "<table width='100%'>";
echo "<tr>";
echo "<td width='40%' align='center'><img src='./backend/getphoto.php?id=".$rows['ProductID']."' width='200px' height='300px' /></td>";
echo "<td style='vertical-align:top; padding-top:10px; font-weight:bold'>";
if($rows['ProductMaster.Description'] == NULL){
	$rows['ProductMaster.Description'] = "Hiện tại chưa có miêu tả về sản phẩm này...";
}
echo $rows['ProductMaster.Description']."<br>";
echo "Dòng sản phẩm: ".$rows['Name']."<br>";
echo "Category: ".$rows['CategoryName']."<br>";
echo "Nhận xét: ".$rows['Remarks1']."<br>";
echo "Giá: <span style='color:red'>$&nbsp;".$rows['Price1']."</span><br>";
echo "</td>";
echo "<tr>";
echo "</table>";
//end coded by THAI
?>