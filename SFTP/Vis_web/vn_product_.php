﻿<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');

$SQL = "SELECT * FROM Category WHERE CategoryID=$_GET[id]";
$query = mysql_query($SQL);
$row =  mysql_fetch_array($query);


?>
<HTML><HEAD id=Head><TITLE>Vine Wine Boutique Bar & Café</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="" name=DESCRIPTION>
<META content=",Portal, S-Portal,DNN" name=KEYWORDS>
<META content="Copyright 2002-2004 VSS" name=COPYRIGHT>
<META content="MSHTML 6.00.2900.3020" name=GENERATOR>
<META content=Vine-group name=AUTHOR>
<META content=DOCUMENT name=RESOURCE-TYPE>
<META content=GLOBAL name=DISTRIBUTION>
<META content="INDEX, FOLLOW" name=ROBOTS>
<META content="1 DAYS" name=REVISIT-AFTER>
<META content=GENERAL name=RATING>
<STYLE id=StylePlaceholder></STYLE>
<LINK id=_portal_Portals__default_ href="./images/default2.css" type=text/css rel=stylesheet></LINK>
<LINK id=_portal_Portals_0_ href="./images/portal.css" type=text/css rel=stylesheet></LINK>
<style type="text/css">
<!--
.style7 {
	color: #7b2612;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY id=Body bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0" bgColor=#e4e4e4>
<DIV style="FONT-SIZE: 0px; Z-INDEX: -100; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px">Hacking, Viethacker ,VNhacker , Security , Bug , Advisory , Exploit , Thiet ke web, web design, cheapest web design, low cost web design, best web design, dang ky ten mien, domain, luu tru web, hosting, software, software development, phat trien phan mem, phan mem, webdesign, e-commerce, web development, Internet, e-marketing, designer, register domain, free tool. </DIV>
<FORM id=Form name=Form action=../S-Portal.aspx?tabid=27 method=post encType=multipart/form-data>
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td height="25"></td>
	</tr>
	<tr>
<?
$SQL3 = "SELECT * FROM Product INNER JOIN ProductCategory ON Product.ProdID=ProductCategory.ProdID where CategoryID=$_GET[id]";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
{
$number++;
if(!($number % 4))
		$newline="</tr><tr>";
	else
		$newline="";

?>
<td>
<?
echo '<table width="14%" border="0" align="center">';
echo '<tr>';
echo '<td>';
echo '<div align="center">'.$row3["sPhoto"].'</div>'; 
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<div align="center"><a href=vn_productdetail.php?id='.$row3["ProdID"].'>'.$row3["ProdCode"].'</a></div>';
echo '</td>';
echo '</tr>';
echo '</table>';
?>
</td>
<? echo $newline;}?>
		</tr>
	</table>
</FORM>
</BODY>
</HTML>