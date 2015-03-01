<?php

include_once("./functions/dblink.php");
include_once("./functions/productsubcategory_.php");

session_start();

$pcid = $_GET[pcid];


if ($_SESSION[logInfo][success]==1) { 
	if (isset($_POST["submit"]))  {
	  $pcid = $_POST[pcid];
	  if ($_POST["submit"] == "Add")  {
	  $SQL_a="select * from ProductSubCategoryInFamily where SubCategoryID=$_POST[SubCategoryID]";
	  $query_a = mysql_query($SQL_a);
	  $row_a = mysql_fetch_array($query_a);
	  if ($row_a[SubCategoryID] != $_POST["SubCategoryID"])
	  	{
	  	$SQL = "INSERT INTO `ProductSubCategoryInFamily` (FamilyID, SubCategoryID) VALUES ($pcid, $_POST[SubCategoryID])";
		$query = mysql_query($SQL);
		}
		#header("location: ./addproduct.php");		   
		#exit();
	  }
	  
	  $action = $_POST["action"];
      $a = $_GET['PageNo'];
	  
  	    $checkid = $_POST["row_to_delete"];	
				 	  
		if ($action == "disable")  {		
		  if (count($checkid) >0)  {
		    foreach($checkid as $productid)  {
		      $SQL = "UPDATE ProductSubCategoryInFamily SET ViewStatus='F' WHERE SubCategoryID=$productid";
			  $query = mysql_query($SQL);			  
			}
		  }
	    } elseif ($action == "active") {
		  if (count($checkid) >0)  {
		    foreach($checkid as $productid)  {
		      $SQL = "UPDATE ProductSubCategoryInFamily SET ViewStatus='T' WHERE SubCategoryID=$productid";
			  $query = mysql_query($SQL);			  
			}
		  }
		} elseif ($action == "delete")  {
		  if (count($checkid) >0)  {
		    foreach($checkid as $productid)  {
		      $SQL = "DELETE FROM ProductSubCategoryInFamily WHERE SubCategoryID=$productid";
			  $query = mysql_query($SQL);			  
			}
		  }		
		}
		  			 
	}
	
	$username=$_SESSION[logInfo][username];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];		
	
	//Set the page size
	$pageSize = 10;
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
	$recordCount = GetRecNoInProductSubCategory($pcid);

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

	if ($_POST["submit"]=='Search' && $_POST[searchname]<>'') {
	  $result = SelectAllProductSubCategoryInPage($_POST[searchname], "Search", $startRow, $pageSize);
	} else  {
	  $result = SelectAllProductSubCategoryInPage($pcid, $startRow, $pageSize);
	  $result1 = SelectAllProductSubCategoryInComb();
	}

} else {
	header("location: ./index.php");	
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<script type="text/javascript">
<!--
var SESSIONURL = "";
var IMGDIR_MISC = "images";
var vb_disable_ajax = parseInt("0", 10);
// -->
</script>

<script src="functions.js" type="text/javascript" language="javascript"></script>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="vbulletin_global.js"></script>
<script type="text/javascript" src="vbulletin_menu.js"></script>
</head>


<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td width="46%" align="left" valign="middle"><span class="homepage_login"><a href="./viewproductfamily.php" class="homepage_login">View Product Family</a></span></td>
          <td width="46%" align="right" valign="top"><span class="general-body">Welcome <? echo $username ?><br />
Your Last Login on <?php echo $lastlogindate; ?> </span></td>
          <td width="4"></td>
        </tr>
      </table>
      <table height="10" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="30"></td>
          <td width="557" align="left" valign="middle"><p class="general-body"><br />
          </p></td>
          <td width="190"></td>
        </tr>
      </table>
<!--
      <table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="8%"></td>
          <td width="92%" align="left" valign="top"><table width="596" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <form action="viewnews.php" method="post" enctype="multipart/form-data" name="searchForm" id="searchForm">
                  <td class="general-search" width="60">Search:</td>
                  <td width="176" align="left"><input name="searchname" type="text" id="searchname" value="" style="background-color:#FFFFFF; border-width:thin; text-align:left" /></td>
                  <td width="201" align="left"><label>
                    <select name="selectfield" id="selectfield">
                      <option value="1">News Code</option>
                      <option value="2">Header (English)</option>
                      <option value="3">Header (Traditional Chinese)</option>
                      <option value="4">Header (Simplified Chinese)</option>
                    </select>
                  </label></td>
                  <td width="79" align="left"><input name="submit" type="submit" class="general-body" id="submit" value="Search"/></td>
                  <td width="80" align="left"><input name="submit" type="submit" class="general-body" id="submit" value="Display All"/></td>
                </form>
              </tr>
          </table></td>
          <td width="4"></td>
        </tr>
      </table> //-->
      <table width="100%" height="20" border="0" align="center" cellpadding="1"  cellspacing="1" >
        <tr>
          <td width="8%" align="left">&nbsp;</td>
          <td width="92%" align="left"><? if ($_GET[msg]!='') { echo "<font class='general-body'>".$_GET[msg]."</font><br>"; } ?></td>
        </tr>
      </table>
      <table width="100%" height="32" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td width="8%"></td>
          <td width="88%" align="left" valign="top"><form action="./viewProductSubCategory_.php" method="post" name="prodform">
              <table width="592" height="30" border="0" cellpadding="1" cellspacing="1">
                <tbody>
                  <tr bgcolor="#cccccc"> 
                    <td width="51"> <input name="checkallbox" value="" onclick="JavaScript: docheckall(document.prodform,'prodform');" type="checkbox" /> 
                      <span class="field-title">All</span></td>
                    <td width="160" class="field-title">Family ID. </td>
                    <td width="160" class="field-title"> SubCategoryName (English) 
                    </td>
                    <!-- <td width="160" class="field-title"> Category (English) </td> //-->
                    <td width="30" align="center" class="field-title">&nbsp;</td>
                    <td width="44" align="center" class="field-title">Edit</td>
                    <td width="42" align="center" class="field-title">View 
                      Status</td>
                    <td width="42" align="center" class="field-title">&nbsp;</td>
                  </tr>
                  <? $i=0; 		
				   while ($row = @mysql_fetch_array($result)) { 			
				     if ($i%2 == 0)  {
				       $bgColor = "#f9f9f9";				
				     }  else  { 
					   $bgColor = "#ffffff";  
					 }
				?>
                  <tr onmouseover="setPointer(this, <? echo $i ?>, 'over', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');" 
				    onmouseout="setPointer(this, <? echo $i ?>, 'out', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');" 
					onmousedown="setPointer(this, <? echo $i ?>, 'click', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');"> 
                    <td width="51" bgcolor="<? echo $bgColor ?>" > <input id="id_rows<? echo $i ?>" name="<? echo "row_to_delete[".$i."]" ?>" 
					 onclick="copyCheckboxesRange('prodform', 'id_rows<? echo $i ?>','l');"
					 value="<? echo $row[SubCategoryID] ?>" type="checkbox" /> 
                    </td>
                    <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');">
                      <? echo $row[PCID]; ?>
                    </td>
                    <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');">
                      <? echo $row[SubCategoryName]; ?>
                    </td>
                    <!-- <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[EngName]; ?> </td> //-->
                    <td width="30" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="#"> 
                      </a> </td>
                    <td width="44" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="./modProductSubCategory.php?id=<? echo $row[SubCategoryID] ?>"><img src="images/edit.png" width="16" height="16" border="0" /></a> 
                    </td>
                    <td width="42" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="#"> 
                      <? if ($row[PCAS] == "T")  { ?>
                      <img src="images/tick.gif" width="16" height="16" border="0" /> 
                      <? } else { ?>
                      <img src="images/cross.png" width="12" height="12" border="0" /> 
                      <? } ?>
                      </a> </td>
                    <td width="42" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="#"> 
                      </a> </td>
                  </tr>
                  <? $i++;} ?>
                </tbody>
              </table>
            <table width="592" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="left" ><select name="SubCategoryID" id="SubCategoryID">
                    <option value=0> </option>
					<? while ($row1 = mysql_fetch_array($result1)) {
							echo "<option value=".$row1[SubCategoryID].">".$row1[SubCategoryName]."</option>";
						}
					?>
                  </select>
                  <input name="submit" type="submit" value="Add" class="general-body" />
                  </td>
                  <td align="right" ><table height="15" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td></tbody></td>
                    </tr>
                    <tr>
                      <?php 
						  echo "<td class='nav_control'>Page $pageNo of $maxPage</td>";
						  if ($pageNo > 1) {
						?>
                      <td class="alt1"><? echo "<a href=viewProductSubCategory.php?PageNo=".($pageNo-1)." class='nav'>&lt;</a>&nbsp;"; ?> </td>
                      <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=viewProductSubCategory.php?PageNo=$j class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=viewProductSubCategory.php?PageNo=".($pageNo+1)." class='nav'>&gt;</a>";
							echo "</td>";
						  }
						?>
                      <td style="cursor: pointer;" id="pagenav" class="nav_control" title=""><script type="text/javascript"> vbmenu_register("pagenav");</script></td>
                    </tr>
                    <tr>
                      <td></tbody></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
                <table width="582" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><span class="general-search">Do the following action: </span>
                      <select name="action">
                        <option value="delete">Delete </option>
                        <option value="disable">Disable </option>
                        <option value="active">Active </option>
                      </select>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit" value="Submit" class="general-body" />
  <input name="pcid" type="hidden" id="pcid" value="<? echo $pcid; ?>" /></td></tr>
                </table>
                </form></td>
          <td width="4"></td>
        </tr>
      </table></td>
  </tr>
</table>

<div align="center">
	<div class="page" style="width: 100%; text-align: left;">
		<div style="padding: 0px;">

	<div class="vbmenu_popup" id="pagenav_menu" style="display: none; position: absolute; z-index: 50;">
		<table border="0" cellpadding="4" cellspacing="1">
		<tbody><tr>
			<td class="thead" nowrap="nowrap">Goto Page...</td>
		</tr>
		<tr>
			<td class="vbmenu_option" title="">
			<form action="viewProductSubCategory.php" method="GET" id="pagenav_form" name="frmpagenav">
				<input class="bginput" name="PageNo" id="pagenav_itxt" style="font-size: 12px;" size="4" type="text">
				<input type="submit" name="submit" value="Go" >
			</form>
			</td>
		</tr>
		</tbody></table>
	</div>



		</div>	
	</div>
</div>

<script type="text/javascript">
<!--
	// Main vBulletin Javascript Initialization
	vBulletin_init();
//-->
</script>
</body>
</html>
