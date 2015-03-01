<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/products.php");

if ($_GET[id]=="" || $_GET[id]==0) {$id=1;} 
else {
$id=$_GET[id];}
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
<SCRIPT language="JavaScript">
function submitform()
{
  document.myform.submit();
}
</SCRIPT>
</HEAD>
<BODY id=Body bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0" bgColor=#e4e4e4>
	<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<? 
	echo '<a href="vn_menuhome.php?id=0">Home(Vn)</a>&nbsp;&gt;&nbsp;<a href="contact_.php?id=88">Vine Cellar (Vn)</a>';
	//MenuProducts($_GET[id]);
	
	?>
	
	</td>
	</tr>
	<tr>


<td>
<table width="97%" height="465" border="0">
          <tr> 
            <td width="18%" rowspan="3" valign="top" bgcolor="#dcdcdc"> 
             <table>
			<tr>
			<td>
			<div align="left"> 
                <? require_once("./vn_cellar.php"); ?>
              </div>
			</td>
			</tr>
			<tr>
			<td>&nbsp;
			
			</td>
			</tr>
			
			<tr>
			<td>
			<div align="left"> 
                &nbsp;
              </div>
			</td>
			</tr>
			<tr>
			<td>
			<div align="left">
			<? #require_once("./email.php"); ?>
			 </div>
			</td>
			</tr>
			</table>
            </td>
            <td width="2%" height="30">&nbsp;</td>
            <td width="80%"><font color="#993300" size="4"><strong>Advanced Search 
              </strong></font></td>
          </tr>
   
		  <tr> 
            <td height="395">&nbsp;</td>
            <td valign="middle">
 <?
 if ($_GET[type]=="liquors")
 {
 ?>
 <form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
			  <table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="dcdcdc"><div align="center"><font color="#990000"><strong><font size="2">Liquors</font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="72"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=waters">Waters</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=accessories">Accessories</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=winestores">Wine 
                            Stores</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="74"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=foods">Foods</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="87"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=cigars">Cigars</a></font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '3' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="3_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '3' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="3_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch">
					 </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
            </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
            <td>
			  
			  
			
<? 
}
elseif ($_GET[type]=="waters")
{
?>
<form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
 <table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="c1c1c1"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=liquors">Liquors</a></font></strong></font></div></td>
                        <td bgcolor="dcdcdc" width="72"><div align="center"><font color="#990000"><strong><font size="2">Waters</font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=accessories">Accessories</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=winestores">Wine 
                            Stores</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="74"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=foods">Foods</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="87"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=cigars">Cigars</a></font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '4' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="4_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '4' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="4_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch"> </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
			<td height="21">&nbsp;</td>
            <td>
   
<?
}
elseif ($_GET[type]=='accessories')
{
?>
<form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
<table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="c1c1c1"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=liquors">Liquors</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="72"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=waters">Waters</a></font></strong></font></div></td>
                        <td bgcolor="dcdcdc" width="104"><div align="center"><font color="#990000"><strong><font size="2">Accessories</font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=winestores">Wine 
                            Stores</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="74"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=foods">Foods</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="87"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=cigars">Cigars</a></font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '5' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="5_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '5' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="5_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch"> </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
            <td height="21">&nbsp;</td>
			<td>

<?
}
elseif ($_GET[type]=='winestores')
{
?>
<form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
<table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="c1c1c1"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=liquors">Liquors</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="72"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=waters">Waters</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=accessories">Accessories</a></font></strong></font></div></td>
                        <td bgcolor="dcdcdc" width="104"><div align="center"><font color="#990000"><strong><font size="2">Wine 
                            Stores</font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="74"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=foods">Foods</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="87"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=cigars">Cigars</a></font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '6' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="6_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '6' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="6_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch"> </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
           <td height="21">&nbsp;</td>
		    <td>


<?
}
elseif ($_GET[type]=='foods')
{
?>
<form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
<table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="c1c1c1"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=liquors">Liquors</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="72"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=waters">Waters</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=accessories">Accessories</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=winestores">Wine 
                            Stores</a></font></strong></font></div></td>
                        <td bgcolor="dcdcdc" width="74"><div align="center"><font color="#990000"><strong><font size="2">Foods</font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="87"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=cigars">Cigars</a></font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '7' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="7_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '7' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="7_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch"> </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
            <td height="21">&nbsp;</td>
			<td>

<?
}
elseif($_GET[type]=='cigars')
{
?>
<form name="myform" method="get" action="./vn_advsearch_process.php" enctype="multipart/form-data">
			  <table width="547">
                <tr bgcolor="#990000"> 
                  <td colspan="2"><font color="#FFFFFF"><strong><font size="2">Enter 
                    Keywords</font></strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                 
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><input name="keySearch" type="text" id="keySearch" size="80"></td>
                 
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="346">&nbsp;</td>
                  <td width="189">&nbsp;</td>
                </tr>
              </table>
              
              <p>Just type in your search terms and find what you're after. Search 
                using the words themselves, or combine them with the categories 
                below. 
              <p><font color="#993300">HINT</font>: To find items that include 
                either of two search terms, type an uppercase OR between the words. 
                For example, typing Shiraz OR Bourbon will render all Sam's Shiraz 
                wines and all Sam's Bourbon Whiskies.</p>
<table width="548">
                <tr bgcolor="#dcdcdc"> 
                  <td colspan="2"><font color="#FFFFFF"><strong> 
                    <table width="541" height="27">
                      <tr> 
                        <td width="72" height="21" bgcolor="c1c1c1"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=liquors">Liquors</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="72"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=waters">Waters</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=accessories">Accessories</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="104"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=winestores">Wine 
                            Stores</a></font></strong></font></div></td>
                        <td bgcolor="c1c1c1" width="74"><div align="center"><font color="#990000"><strong><font size="2"><a href="vn_advsearch_cellar.php?type=foods">Foods</a></font></strong></font></div></td>
                        <td bgcolor="dcdcdc" width="87"><div align="center"><font color="#990000"><strong><font size="2">Cigars</font></strong></font></div></td>
                      </tr>
                    </table>
                    </strong></font></td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Country&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Country
$country_name1='';
$country_item1 = '';
$SQL1 = "SELECT * FROM ProductCategory INNER JOIN ProductCategoryInFamily ON ProductCategory.CategoryID = ProductCategoryInFamily.CategoryID where ProductCategoryInFamily.FamilyID = '8' and ProductCategoryInFamily.ViewStatus='T' order by ProductCategoryInFamily.CreateDate ASC";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	$country_item1.='<option value="'.$row1['CategoryID'].'">'.$row1['CategoryName'].'</option>';
}
$country_name1.= '<select name="country"><option value="8_all">All</option>
							'.$country_item1.'
							</select>';
echo $country_name1;

# End Vine By Country
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Color&nbsp;&nbsp;</div></td>
                  <td width="386"> 
                    <?
				  # Start Vines By Color
$country_name2='';
$country_item2 = '';
$SQL2 = "SELECT * FROM ProductSubCategory INNER JOIN ProductSubCategoryInFamily ON ProductSubCategory.SubCategoryID = ProductSubCategoryInFamily.SubCategoryID where ProductSubCategoryInFamily.FamilyID = '8' and ProductSubCategoryInFamily.ViewStatus='T' order by ProductSubCategoryInFamily.CreateDate ASC";
$rs2 = mysql_query($SQL2);
while($row2 = mysql_fetch_array($rs2))
{
	$country_item2.='<option value="'.$row2['SubCategoryID'].'">'.$row2['SubCategoryName'].'</option>';
}
$country_name2.= '<select name="color"><option value="8_all">All</option>
							'.$country_item2.'
							</select>';
echo $country_name2;

# End Vine By Color
?>
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Min Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="minPrice" type="text" size="5"> 
                  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right">Max Price&nbsp;&nbsp;</div></td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
                    <input name="advsearch" type="hidden" value="advsearch"> </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150"><div align="right"></div></td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a> 
                  </td>
                </tr>
              </table>
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
            <td height="21">&nbsp;</td>
			
          <td> 
            <?
}
?>
          </td>
          </tr>
        </table>

</td>
		</tr>
	</table>

</BODY>
</HTML>