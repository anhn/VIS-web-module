<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/products.php");

if ($_GET[id]=="" || $_GET[id]==0) {$id=1;} 
else {
$id=$_GET[id];}

$SQL = "SELECT * FROM Menu WHERE CategoryID=39";
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
<FORM id=Form name=Form action=../S-Portal.aspx?tabid=27 method=post encType=multipart/form-data>
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td height="25">
	<? if($id!=1)
	
	{
	
	echo '<a href="vn_menuhome.php?id=0">Home(Vn)</a>&nbsp;&gt;&nbsp;<a href="contact_.php?id=88">Vine Cellar (Vn)</a>';
	//MenuProducts($_GET[id]);
	}
			
	?>
	</td>
	</tr>
	<tr>


<td>
<table width="100%" height="204" border="0">
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
            <td width="80%"> 
	
<? if ($_GET[search]=='winesbycountry')
{
?>		
	<!-- Start Wines By Country-->
<?			
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

//Total of record
#$recordCount = GetRecNo("", "All");
//$recordCount = GetRecNo($id);
//$SQL = "SELECT * FROM Product where CategoryID=$_GET[id] AND ActiveStatus = 'T' AND VineCellar = 'T'";
$SQL = "SELECT * FROM Product where CategoryID=$_GET[id] AND ActiveStatus = 'T' AND ShowInVineCellar = 'T'";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
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
			<table>
			<tr>
			<td width="552">
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
                   
                    <? echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=".$id."&search=winesbycountry class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=".$id."&search=winesbycountry class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=".$id."&search=winesbycountry class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
                </tr>
              </table>
  
 	 </td>
		</tr>
			<tr>
			<td>
			
  
              <table width="99%" border="0" align="left">
                <tr bgcolor="#990000"> 
                  <td width="1%" >&nbsp;</td>
                  <td width="71%"><strong><font color="#FFFFFF">Item Name</font></strong></td>
                  <td width="19%"><div align="center"><strong><font color="#FFFFFF">Price</font></strong></div></td>
                        <td width="9%"><strong></strong></td>
                </tr>
                <?

//$result = SelectAllCategoryInPage($startRow, $pageSize, $id);
 
//$SQL3 = "SELECT * FROM Product where CategoryID=$_GET[id] AND ActiveStatus = 'T' AND VineCellar = 'T' LIMIT $startRow, $pageSize";
$SQL3 = "SELECT * FROM Product where CategoryID=$_GET[id] AND ActiveStatus = 'T' AND ShowInVineCellar = 'T' LIMIT $startRow, $pageSize";
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
echo '<div align="left">'.$row3["VnHeader"].'<br><br>';
echo '<div align="left">'.$row3["EngSpec"].'<br>
<a href=vn_vn_productdetail.php?id='.$row3["ProdID"].'>More information...</a></div>';
echo '</td>';

echo '<td valign="middle"><div align="center">';
echo $row3["Price1"];
echo '</div></td>';
echo '<td valign="middle">';
//echo '<img src="button_buy_now.gif" width="60" height="16">';
echo '</td>';
echo '</tr>';
$i++;
}
?>
              </table>
              </td>
			</tr>
			<tr>
			<td>
			
			  
			  
			  
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
						  echo "<td class='nav_control'>Page <font color=#993300> $pageNo</font> of <font color=#993300>$maxPage</font></td>";
						  if ($pageNo > 1) {
						?>
                   
                    <? echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=".$id."&search=winesbycountry class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=".$id."&search=winesbycountry class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=".$id."&search=winesbycountry class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
                </tr>
              </table>
      
	  </td>
			</tr>
			
			</table>
<?}else {?>		

       <table>
       <tr> 
          <td width="73%"><strong><font color="#FF0000">Không tìm thây!</font></strong></td>
        </tr>
      </table>

<?}?>
	  
	<!-- End Wines By Color -->      
<?
}
elseif ($_GET[search]=='winesbycolor')
{
?>
<?			
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

//Total of record
#$recordCount = GetRecNo("", "All");
//$recordCount = GetRecNo($id);
//$SQL = "SELECT * FROM Product where SubCategoryID=$_GET[id] AND ActiveStatus = 'T' AND VineCellar = 'T'";
$SQL = "SELECT * FROM Product where SubCategoryID=$_GET[id] AND ActiveStatus = 'T' AND ShowInVineCellar = 'T'";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
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
			<table>
			<tr>
			<td width="552">
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
                  
                    <? echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=".$id."&search=winesbycolor class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=".$id."&search=winesbycolor class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=".$id."&search=winesbycolor class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
                </tr>
              </table>
  
 	 </td>
		</tr>
			<tr>
			<td>
			
  
              <table width="99%" border="0" align="left">
                <tr bgcolor="#990000"> 
                  <td width="1%" >&nbsp;</td>
                  <td width="71%"><strong><font color="#FFFFFF">Item Name</font></strong></td>
                  <td width="19%"><div align="center"><strong><font color="#FFFFFF">Price</font></strong></div></td>
                        <td width="9%"><strong></strong></td>
                </tr>
                <?

//$result = SelectAllCategoryInPage($startRow, $pageSize, $id);
 
//$SQL3 = "SELECT * FROM Product where SubCategoryID=$_GET[id] AND ActiveStatus = 'T' AND VineCellar = 'T' LIMIT $startRow, $pageSize";
$SQL3 = "SELECT * FROM Product where SubCategoryID=$_GET[id] AND ActiveStatus = 'T' AND ShowInVineCellar = 'T' LIMIT $startRow, $pageSize";
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
echo '<div align="left">'.$row3["VnHeader"].'<br><br>';
echo '<div align="left">'.$row3["EngSpec"].'<br>
<a href=vn_vn_productdetail.php?id='.$row3["ProdID"].'>More information...</a></div>';
echo '</td>';

echo '<td valign="middle"><div align="center">';
echo $row3["Price1"];
echo '</div></td>';
echo '<td valign="middle">';
//echo '<img src="button_buy_now.gif" width="60" height="16">';
echo '</td>';
echo '</tr>';
$i++;
}
?>
              </table>
              </td>
			</tr>
			<tr>
			<td>
			
			  
			  
			  
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
						  echo "<td class='nav_control'>Page <font color=#993300> $pageNo</font> of <font color=#993300>$maxPage</font></td>";
						  if ($pageNo > 1) {
						?>
                   
                    <? echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=".$id."&search=winesbycolor class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=".$id."&search=winesbycolor class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=".$id."&search=winesbycolor class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
                </tr>
              </table>
      
	  </td>
			</tr>
			
			</table>
<?}else {?>		

       <table>
       <tr> 
          <td width="73%"><strong><font color="#FF0000">Không tìm thây!</font></strong></td>
        </tr>
      </table>

<?}?>
	  
	<!-- End Wines By Color -->      


<?
}
elseif ($_GET[search]=='winesbyprice')
{
if($_GET[type]=='liquor')
$kind=3;
elseif($_GET[type]=='water')
$kind=4;
elseif($_GET[type]=='accessories')
$kind=5;
elseif($_GET[type]=='winestore')
$kind=6;
elseif($_GET[type]=='food')
$kind=7;
elseif($_GET[type]=='cigar')
$kind=8;
?>  
<?			
$value1=$_GET[value1];
$value2=$_GET[value2];
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

//Total of record
#$recordCount = GetRecNo("", "All");
//$recordCount = GetRecNo($id);
//$SQL = "SELECT * FROM Product where ActiveStatus = 'T' AND VineCellar = 'T' AND FamilyID = $kind AND price2 BETWEEN $_GET[value1] AND $_GET[value2]";
$SQL = "SELECT * FROM Product where ActiveStatus = 'T' AND ShowInVineCellar = 'T' AND FamilyID = $kind AND price2 BETWEEN $_GET[value1] AND $_GET[value2]";
	$result = mysql_query($SQL);
	$recordCount = mysql_num_rows($result);
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
			<table>
			<tr>
			<td width="552">
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
                   
                    <? 
					echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; 
					?>
                  
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
						
                </tr>
              </table>
  
 	 </td>
		</tr>
			<tr>
			<td>
			
  
              <table width="99%" border="0" align="left">
                <tr bgcolor="#990000"> 
                  <td width="1%" >&nbsp;</td>
                  <td width="71%"><strong><font color="#FFFFFF">Item Name</font></strong></td>
                  <td width="19%"><div align="center"><strong><font color="#FFFFFF">Price</font></strong></div></td>
                        <td width="9%"><strong></strong></td>
                </tr>
                <?

//$result = SelectAllCategoryInPage($startRow, $pageSize, $id);
 
//$SQL3 = "SELECT * FROM Product where ActiveStatus = 'T' AND VineCellar = 'T' AND FamilyID = $kind AND price2 BETWEEN $_GET[value1] AND $_GET[value2] LIMIT $startRow, $pageSize";
$SQL3 = "SELECT * FROM Product where ActiveStatus = 'T' AND ShowInVineCellar = 'T' AND FamilyID = $kind AND price2 BETWEEN $_GET[value1] AND $_GET[value2] LIMIT $startRow, $pageSize";
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
echo '<div align="left">'.$row3["VnHeader"].'<br><br>';
echo '<div align="left">'.$row3["EngSpec"].'<br>
<a href=vn_vn_productdetail.php?id='.$row3["ProdID"].'>More information...</a></div>';
echo '</td>';

echo '<td valign="middle"><div align="center">';
echo $row3["Price1"];
echo '</div></td>';
echo '<td valign="middle">';
//echo '<img src="button_buy_now.gif" width="60" height="16">';
echo '</td>';
echo '</tr>';
$i++;
}
?>
              </table>
              </td>
			</tr>
			<tr>
			<td>
			
			  
			  
			  
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
						  echo "<td class='nav_control'>Page <font color=#993300> $pageNo</font> of <font color=#993300>$maxPage</font></td>";
						  if ($pageNo > 1) {
						?>
                   
                    <? echo "<td class='alt1'><a href=vn_search_cellar.php?PageNo=".($pageNo-1)."&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>&lt;&lt; Prev..</a>&nbsp;</td>"; ?>
                 
                  <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=vn_search_cellar.php?PageNo=$j&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=vn_search_cellar.php?PageNo=".($pageNo+1)."&id=39&value1=".$value1."&value2=".$value2."&search=winesbyprice class='nav'>.. Next &gt;&gt;</a>";
							echo "</td>";
						  }
						?>
                </tr>
              </table>
      
	  </td>
			</tr>
			
			</table>
<?}else {?>		

       <table>
       <tr> 
          <td width="73%"><strong><font color="#FF0000">Không tìm thây!</font></strong></td>
        </tr>
      </table>

<?}?>

	  
	<!-- End Wines By Color -->      


<?
}
?>  
            </td>
          </tr>
          <tr> 
            <td height="27">&nbsp;</td>
            <td valign="middle">&nbsp; </td>
          </tr>
          <tr> 
            <td height="30">&nbsp;</td>
            <td>&nbsp; </td>
          </tr>
        </table>

</td>
		</tr>
	</table>
</FORM>
</BODY>
</HTML>
