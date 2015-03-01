<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><HTML>
<HEAD id=Head>
<TITLE>Vine Wine Boutique Bar & Café</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">

</HEAD>
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
color="#7b2612";
coloron="#000000";
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
separatorcolor="#ffffff";
highlightpath=true;
wiseposition=true;
}
';
					
echo $javascript_menu_start;

$javascript_menu0.= '
                    with(new fxmenu("Product_subcategory")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=0;
					left=0;
					width=145;
					height=20;
					';
echo $javascript_menu0;					
echo 'fx("text=Cigars By Country;show=VinesByCountry;fontweight=bold;target=iframe");';
echo 'fx("text=Cigars By Color;show=VinesByColor;fontweight=bold;target=iframe");';
echo 'fx("text=Cigars By Price;show=VinesByPrice;fontweight=bold;target=iframe");';
echo 'fx("text=Advanced Search;url=advsearch_cigar.php;fontweight=bold;target=iframe");';
echo'}';

# Start Vines By Country
$javascript_menu1='';
$javascript_menu_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '8' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$javascript_menu_item1.='fx("text='.$row1['CategoryName'].' ;url=search_cigar.php?id='.$row1['CategoryID'].'&search=winesbycountry;target=iframe;width=140");';
}
$javascript_menu1.= 'with(new fxmenu("VinesByCountry")){
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

# Start Vines By Color
$javascript_menu2='';
$javascript_menu_item2 = '';

$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '8' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$javascript_menu_item2.='fx("text='.$row2['SubCategoryName'].' ;url=search_cigar.php?id='.$row2['SubCategoryID'].'&search=winesbycolor;target=iframe;width=140");';
		 
}
$javascript_menu2.= 'with(new fxmenu("VinesByColor")){
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

# Start Vines By Price
$javascript_menu2='';
$javascript_menu_item2 = '';
$javascript_menu2.= 'with(new fxmenu("VinesByPrice")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							fx("text=Under $10 ;url=search_cigar.php?id=39&value1=0&value2=10&search=winesbyprice;target=iframe;width=140");
							fx("text=$10 - $15 ;url=search_cigar.php?id=39&value1=10&value2=15&search=winesbyprice;target=iframe;width=140");
							fx("text=$15 - $20 ;url=search_cigar.php?id=39&value1=15&value2=20&search=winesbyprice;target=iframe;width=140");
							fx("text=$20 - $30 ;url=search_cigar.php?id=39&value1=20&value2=30&search=winesbyprice;target=iframe;width=140");
							fx("text=$30 - $50 ;url=search_cigar.php?id=39&value1=30&value2=50&search=winesbyprice;target=iframe;width=140");
							fx("text=$50 - $75 ;url=search_cigar.php?id=39&value1=50&value2=70&search=winesbyprice;target=iframe;width=140");
							fx("text=$75 - $100 ;url=search_cigar.php?id=39&value1=75&value2=100&search=winesbyprice;target=iframe;width=140");
							fx("text=Over $100 ;url=search_cigar.php?id=39&value1=100&value2=999999999999&search=winesbyprice;target=iframe;width=140");
							
							}';
echo $javascript_menu2;

# End Vine By Price

$javascript_menu_end='
buildMenus();
</script>';
echo $javascript_menu_end;

?>
<script language="javascript1.2">fixMenu("Product_subcategory")</script>
