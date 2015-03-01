<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');

?>
<script language="javascript1.2" src="fxmenu.js"></script>
<script language="javascript1.2">
var addpath="";
if(OP5)      dt.write("<sc"+"ript language=javascript1.2 src=fxopera.js><\/sc"+"ript>");
else if(NN4) dt.write("<sc"+"ript language=javascript1.2 src=fxnetscape.js><\/sc"+"ript>");
else         dt.write("<sc"+"ript language=javascript1.2 src=fxdom.js><\/sc"+"ript>");
</script>
<?
$javascript_menu_start= '
					<script language="javascript1.2">
					ordernumber="";
					emptyimage="transparent.gif";
					showdelay=200;
					hidedelay=800;

					with(itemStyle=new fxstyle()){
width=390;
height=50;
color="#000000";
coloron="#7b2612";
bgcolor="#dcdcdc";
bgcoloron="#efefef";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=3;
paddingleft=3;
arrow="arrowblack.gif";
arrowon="arrowwhite.gif";
arrowright=20;
arrowtop=0;
}
	
		with(menuStyle=new fxmenustyle()){
filterover="Alpha(opacity=90)";
menubgcolor="#E8E8FF";
menuborderwidth=0;
menubordercolor="#3366CC";
separatorsize=1;
separatorcolor="#cccccc";
highlightpath=true;
wiseposition=true;
}
';
					
echo $javascript_menu_start;

$javascript_menu0.= '
                    with(new fxmenu("Liquor_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_menu0;					
echo 'fx("text=Liquors By Country;show=LiquorsByCountry;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Liquors By Color;show=LiquorsByColor;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Liquors By Price;show=LiquorsByPrice;fontweight=bold;target=iframe;height=20");';
echo'}';

# Start Liquors By Country
$javascript_menu1='';
$javascript_menu_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '3' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_menu_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_menu1.= 'with(new fxmenu("LiquorsByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_menu_item1.'
							}';
echo $javascript_menu1;

# End Vine By Country

# Start Liquors By Color
$javascript_menu2='';
$javascript_menu_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '3' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_menu_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_menu2.= 'with(new fxmenu("LiquorsByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_menu_item2.'
							}';
echo $javascript_menu2;

# End Vine By Color

# Start Liquors By Price
$javascript_menu2='';
$javascript_menu_item2 = '';
$javascript_menu2.= 'with(new fxmenu("LiquorsByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=liquor&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=liquor&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=liquor&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=liquor&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=liquor&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=liquor&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=liquor&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=liquor&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_menu2;

# End Vine By Price

# Start Water
$javascript_water.= '
                    with(new fxmenu("Water_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_water;					
echo 'fx("text=Waters By Country;show=WatersByCountry;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Waters By Color;show=WatersByColor;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Waters By Price;show=WatersByPrice;fontweight=bold;target=iframe;height=20");';
echo'}';

# Start Waters By Country
$javascript_water1='';
$javascript_water_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '4' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_water_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_water1.= 'with(new fxmenu("WatersByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_water_item1.'
							}';
echo $javascript_water1;

# End Vine By Country

# Start Waters By Color
$javascript_water2='';
$javascript_water_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '4' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_water_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_water2.= 'with(new fxmenu("WatersByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_water_item2.'
							}';
echo $javascript_water2;

# End Vine By Color

# Start Waters By Price
$javascript_water2='';
$javascript_water_item2 = '';
$javascript_water2.= 'with(new fxmenu("WatersByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=water&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=water&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=water&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=water&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=water&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=water&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=water&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=water&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_water2;

# End Water


# Start Accessories
$javascript_Accessories.= '
                    with(new fxmenu("Accessories_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_Accessories;					
echo 'fx("text=Accessories By Country;show=AccessoriessByCountry;fontweight=bold;target=iframe;height=30");';
echo 'fx("text=Accessories By Color;show=AccessoriessByColor;fontweight=bold;target=iframe;height=30");';
echo 'fx("text=Accessories By Price;show=AccessoriessByPrice;fontweight=bold;target=iframe;height=30");';
echo'}';

# Start Accessoriess By Country
$javascript_Accessories1='';
$javascript_Accessories_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '5' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_Accessories_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_Accessories1.= 'with(new fxmenu("AccessoriessByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Accessories_item1.'
							}';
echo $javascript_Accessories1;

# End Vine By Country

# Start Accessoriess By Color
$javascript_Accessories2='';
$javascript_Accessories_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '5' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_Accessories_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_Accessories2.= 'with(new fxmenu("AccessoriessByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Accessories_item2.'
							}';
echo $javascript_Accessories2;

# End Vine By Color

# Start Accessoriess By Price
$javascript_Accessories2='';
$javascript_Accessories_item2 = '';
$javascript_Accessories2.= 'with(new fxmenu("AccessoriessByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=accessories&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=accessories&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=accessories&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=accessories&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=accessories&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=accessories&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=accessories&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=accessories&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_Accessories2;

# End Accessories

# Start WineStore
$javascript_WineStore.= '
                    with(new fxmenu("WineStore_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_WineStore;					
echo 'fx("text=WineStores By Country;show=WineStoresByCountry;fontweight=bold;target=iframe;height=30");';
echo 'fx("text=WineStores By Color;show=WineStoresByColor;fontweight=bold;target=iframe;height=30");';
echo 'fx("text=WineStores By Price;show=WineStoresByPrice;fontweight=bold;target=iframe;height=30");';
echo'}';

# Start WineStores By Country
$javascript_WineStore1='';
$javascript_WineStore_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '6' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_WineStore_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_WineStore1.= 'with(new fxmenu("WineStoresByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_WineStore_item1.'
							}';
echo $javascript_WineStore1;

# End Vine By Country

# Start WineStores By Color
$javascript_WineStore2='';
$javascript_WineStore_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '6' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_WineStore_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_WineStore2.= 'with(new fxmenu("WineStoresByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_WineStore_item2.'
							}';
echo $javascript_WineStore2;

# End Vine By Color

# Start WineStores By Price
$javascript_WineStore2='';
$javascript_WineStore_item2 = '';
$javascript_WineStore2.= 'with(new fxmenu("WineStoresByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=winestore&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=winestore&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=winestore&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=winestore&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=winestore&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=winestore&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=winestore&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=winestore&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_WineStore2;

# End WineStore

# Start Foods
$javascript_Foods.= '
                    with(new fxmenu("Foods_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_Foods;					
echo 'fx("text=Foods By Country;show=FoodsByCountry;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Foods By Color;show=FoodsByColor;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Foods By Price;show=FoodsByPrice;fontweight=bold;target=iframe;height=20");';
echo'}';

# Start Foods By Country
$javascript_Foods1='';
$javascript_Foods_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '7' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_Foods_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_Foods1.= 'with(new fxmenu("FoodsByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Foods_item1.'
							}';
echo $javascript_Foods1;

# End Vine By Country

# Start Foods By Color
$javascript_Foods2='';
$javascript_Foods_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '7' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_Foods_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_Foods2.= 'with(new fxmenu("FoodsByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Foods_item2.'
							}';
echo $javascript_Foods2;

# End Vine By Color

# Start Foods By Price
$javascript_Foods2='';
$javascript_Foods_item2 = '';
$javascript_Foods2.= 'with(new fxmenu("FoodsByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=food&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=food&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=food&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=food&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=food&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=food&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=food&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=food&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_Foods2;

# End Foods
# Start Cigar
$javascript_Cigar.= '
                    with(new fxmenu("Cigar_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_Cigar;					
echo 'fx("text=Cigars By Country;show=CigarsByCountry;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Cigars By Color;show=CigarsByColor;fontweight=bold;target=iframe;height=20");';
echo 'fx("text=Cigars By Price;show=CigarsByPrice;fontweight=bold;target=iframe;height=20");';
echo'}';

# Start Cigars By Country
$javascript_Cigar1='';
$javascript_Cigar_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '8' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_Cigar_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cellar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_Cigar1.= 'with(new fxmenu("CigarsByCountry")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Cigar_item1.'
							}';
echo $javascript_Cigar1;

# End Vine By Country

# Start Cigars By Color
$javascript_Cigar2='';
$javascript_Cigar_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '8' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_Cigar_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cellar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_Cigar2.= 'with(new fxmenu("CigarsByColor")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_Cigar_item2.'
							}';
echo $javascript_Cigar2;

# End Vine By Color

# Start Cigars By Price
$javascript_Cigar2='';
$javascript_Cigar_item2 = '';
$javascript_Cigar2.= 'with(new fxmenu("CigarsByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cellar.php?type=cigar&id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cellar.php?type=cigar&id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cellar.php?type=cigar&id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cellar.php?type=cigar&id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cellar.php?type=cigar&id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cellar.php?type=cigar&id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cellar.php?type=cigar&id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cellar.php?type=cigar&id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_Cigar2;

# End Cigar

$javascript_AdvSearch= '
                    with(new fxmenu("AdvSearch_Cellar")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=155;
					height=20;
					';
echo $javascript_AdvSearch;					
echo 'fx("text=Advanced Search;url=advsearch_cellar.php?type=liquors;fontweight=bold;target=iframe;height=20");';
echo'}';
$javascript_menu_end='
buildMenus();
</script>';
echo $javascript_menu_end;

?>
<table>
<tr>
<td>
<script language="javascript1.2">fixMenu("Liquor_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("Water_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("Accessories_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("WineStore_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("Foods_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("Cigar_Cellar")</script>
</td>
</tr>
<tr>
<td align="left"><hr width="155" noshade color="#CCCCCC"></td>
</tr>
<tr>
<td><script language="javascript1.2">fixMenu("AdvSearch_Cellar")</script>
</td>
</tr>
</table>
