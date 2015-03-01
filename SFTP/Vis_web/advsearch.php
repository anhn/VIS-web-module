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
	echo '<a href="menuhome.php?id=0">Home</a>&nbsp;&gt;&nbsp;<a href="menudetail.php?id=5">Vine Wine</a>&nbsp;&gt;&nbsp;<a href="contact_.php?id=39">Wine list & Buy Online </a>';
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
                <? require_once("./wine.php"); ?>
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
   if ($_POST["advsearch"]!="advsearch" && $_GET[get]!="get")
   {
   ?>
			<form name="myform" method="post" action="./advsearch.php" enctype="multipart/form-data">
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
                <tr bgcolor="#C1C1C1"> 
                  <td colspan="2"><font color="#FFFFFF"><strong>&nbsp;</strong></font></td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td width="150">Country</td>
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
                  <td width="150">Color</td>
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
                  <td width="150">Min Price</td>
                  <td width="386"><input name="minPrice" type="text" size="5"> </td>
                </tr>
				<tr bgcolor="#dcdcdc"> 
                  <td width="150">Max Price</td>
                  <td width="386"><input name="maxPrice" type="text" size="5"> 
				  <input name="advsearch" type="hidden" value="advsearch">
				 
				  </td>
                </tr>
                <tr bgcolor="#dcdcdc"> 
                  <td width="150">&nbsp;</td>
                  <td width="386"><A href="javascript: submitform()"><img src="button_search.gif" width="93" height="26" border="0"></a>
                  </td>
                </tr>
              </table></p>
			  
			  </form> 
			  </td>
          </tr>
          <tr> 
            <td height="21">&nbsp;</td>
            <td>
			
<? 

}
else
{
?>			
			<!-- Start Search -->
<?		

//Set the page size
$pageSize = 4;
//Starting Row of the record displayed
$startRow = 0;	
//Set the page no
if(empty($_GET['PageNo'])){
	if($startRow == 0){
		$pageNo = $startRow + 1;
	}
}else{
	$pageNo = $_GET['PageNo'];
	$startRow = ($pageNo - 1) * $pageSize;
}

$wh="";
$msg="";
# Search following to Country
$scountry=$_POST["country"];
$scountry=str_replace("'","''",$scountry);
if ($_POST["country"] =="")
  $scountry = "6_all";

if($scountry!="")
{
if (substr($scountry,1)=="")
{
 $wh.=" CategoryID like '%".$scountry."%'";
 $msg.=",".$scountry;
}
else
{
$wh.=" FamilyID like '%".substr($scountry,0,1)."%'";
// $msg.=",".$scountry;
}
}
# Search following to Color
$scolor=$_POST["color"];
$color=$scolor;
$scolor=str_replace("'","''",$scolor);
if($scolor!="")
{
if (substr($scolor,1)=="")
{
 $wh.=" AND SubCategoryID like '%".$scolor."%' AND ActiveStatus = 'T'";
 $msg.=",".$scolor;
}
}
# Search following to Price2
$sminPrice=$_POST["minPrice"];
$minPrice=$sminPrice;
$sminPrice=str_replace("'","''",$sminPrice);
if($sminPrice!="")
{
$smaxPrice=$_POST["maxPrice"];
$maxPrice=$smaxPrice;
$smaxPrice=str_replace("'","''",$smaxPrice);
if($smaxPrice!="")
{
 $wh.=" AND Price2 BETWEEN ".$sminPrice." AND ".$maxPrice."";
 $msg.=",".$sminPrice;
}
else
{ $wh.=" AND Price2>=".$sminPrice."";
 $msg.=",".$sminPrice;
}
}

$skeySearch=$_POST["keySearch"];
$keySearch=$skeySearch;
$skeySearch=str_replace("'","''",$skeySearch);
if($skeySearch!="")
{
 $wh.=" AND EngHeader like '%".$skeySearch."%'";
 $wh.=" or EngSDesc like '%".$skeySearch."%'";
 $msg.=$skeySearch;
}



#echo $wh;

$SQL="SELECT * FROM Product ";

if ($wh != "")
  $SQL.=" WHERE ".$wh;

#echo $SQL;
	$result = mysql_query($SQL);
	$recordCount = @mysql_num_rows($result);
//Get Total Pages
if($recordCount % $pageSize == 0){
	$maxPage = $recordCount / $pageSize;
}else{
	$maxPage = ceil($recordCount / $pageSize);
}	
	
if ($pageNo > $maxPage)  {
	$pageNo = $maxPage;
	$startRow = ($pageNo - 1) * $pageSize;
}
?>
			<table width="577" border="0">
<tr>
<td width="567">
<? if ($recordCount >0) {?>	 
       <table>
                <tr> 
                  <td width="347">Displaying <font color="#993300"><?echo ($startRow+1);?></font> to 
                  <? if ($pageSize > $recordCount) 
                      $redunt =$recordCount -$startRow;
                     else {
                       if ($recordCount > ($startRow+$pageSize))
                         $redunt = $pageSize;
                       else
                         $redunt = $recordCount - $startRow; 
                     }
                  ?>
                    <font color="#993300"> 
                     <? echo $startRow+$redunt;?>
                    </font> (of <font color="#993300"> 
                    <? echo $recordCount;?>
                    </font> products)</td>
					
                  <?php 
						  echo "<td class='nav_control'>Page <font color=#993300>$pageNo</font> of <font color=#993300>$maxPage</font></td>";
						  if ($pageNo > 1) {
						?>
                   
                    <? echo "<td class='alt1'><a href=advsearch.php?PageNo=".($pageNo-1)."&id=".$id."&get=get class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=advsearch.php?PageNo=$j&id=".$id."&get=get class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=advsearch.php?PageNo=".($pageNo+1)."&id=".$id."&get=get class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
						
                </tr>
              </table></td>
          </tr>
          <tr> 
           
            <td valign="middle"> <table width="99%" border="0" align="left">
                <tr bgcolor="#990000"> 
                  <td width="1%" >&nbsp;</td>
                  <td width="73%"><strong><font color="#FFFFFF">Item Name</font></strong></td>
                  
                  <td width="21%"><div align="center"><strong><font color="#FFFFFF">Price</font></strong></div></td>
                      <td width="5%"><strong></strong></td>
                </tr>
                <?

//$result = SelectAllCategoryInPage($startRow, $pageSize, $id);

$SQL3=$SQL;
$SQL3.=" LIMIT $startRow, $pageSize";
$rs3 = mysql_query($SQL3);
$number=0;
$i=0;
while($row3 = @mysql_fetch_array($rs3))
{
if ($i%2 == 0)  {
				       $bgColor = "#dcdcdc";				
				     }  else  { 
					   $bgColor = "#e9e9e9";  
					 }
echo '<tr bgcolor='.$bgColor.'>';
echo '<td>';
echo '<div align="left">'.$row3["sPhoto"].'</div>'; 
echo '</td>';
echo '<td>';
echo '<div align="left">'.$row3["EngHeader"].'<br><br>';
echo '<div align="left">'.$row3["EngSDesc"].'<br>
<a href=productdetail.php?id='.$row3["ProdID"].'>More information...</a></div>';
echo '</td>';
echo '<td valign="middle"><div align="center">';
echo $row3["Price2"];
echo '</div></td>';
echo '<td valign="middle">';
//echo '<img src="button_buy_now.gif" width="60" height="16">';
echo '</td>';
echo '</tr>';
$i++;
}
?>
              </table></td>
          </tr>
          <tr> 
            
            <td> <table>
                <tr> 
                  <td width="347">Displaying <font color="#993300"><?echo ($startRow+1);?></font> to 
                  <? if ($pageSize > $recordCount) 
                      $redunt =$recordCount -$startRow;
                     else {
                       if ($recordCount > ($startRow+$pageSize))
                         $redunt = $pageSize;
                       else
                         $redunt = $recordCount - $startRow; 
                     }
                  ?>
                    <font color="#993300"> 
                     <? echo $startRow+$redunt;?>
                    </font> (of <font color="#993300"> 
                    <? echo $recordCount;?>
                    </font> products)</td>
					
                  <?php 
						  echo "<td class='nav_control'>Page <font color=#993300> $pageNo</font> of <font color=#993300>$maxPage</font></td>";
						  if ($pageNo > 1) {
						?>
                   
                    <? echo "<td class='alt1'><a href=advsearch.php?PageNo=".($pageNo-1)."&id=".$id."&get=get class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=advsearch.php?PageNo=$j&id=".$id."&get=get class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=advsearch.php?PageNo=".($pageNo+1)."&id=".$id."&get=get class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
						
                </tr>
              </table>
<?}else {?>		

       <table>
       <tr> 
          <td width="73%"><strong><font color="#FF0000">No Item Found</font></strong></td>
        </tr>
      </table>

<?}?>
</td>
</tr>
</table>
			<!-- End Search -->
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
