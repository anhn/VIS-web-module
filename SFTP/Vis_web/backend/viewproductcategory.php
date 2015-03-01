<?php
include_once("./functions/session.php");
include_once("./functions/dblink.php");
include_once("./functions/productcategory.php");

//if ($_GET[lv]==3) {header("location: ./viewproduct_.php?pcid=$_GET[pcid]");}
if ($_GET[pcid]=="" || $_GET[pcid]==0) {
   $pcid=0;
   //$lv=1;
   } else {
     $pcid=$_GET[pcid];$lv=2;
   }
//if ($_GET[lv]=="") {$lv=1;} else {$lv=$_GET[lv];}

if (isset($_POST["submit"]))  {
	$pcid=$_POST[pcid];
	if ($pcid==0) {
	    $pcid=0;
	    //$lv=1;
	} else {
	   $pcid=$_POST[pcid];
	   $lv=2;
	}
	
	if ($_POST["submit"] == "Add")  {
		header("location: ./addproductcategory.php?pcid=$_POST[pcid]");
		exit();
	}

	$action = $_POST["action"];
	$a = $_GET['PageNo'];

    $checkid = $_POST["row_to_delete"];	
				 	  
	if ($action == "disable")  {		
		if (count($checkid) >0)  {
			foreach($checkid as $CategoryID)  {
				$SQL = "UPDATE ProductCategory SET ViewStatus='F' WHERE CategoryID=$CategoryID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "active") {
		if (count($checkid) >0)  {
			foreach($checkid as $CategoryID)  {
				$SQL = "UPDATE ProductCategory SET ViewStatus='T' WHERE CategoryID=$CategoryID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "delete")  {
		if (count($checkid) >0)  {
			foreach($checkid as $CategoryID)  {
				// Check the valid cat
				$SQL = "SELECT * FROM ProductCategory WHERE ParentCategoryID=$CategoryID";
				$tresult = mysql_query($SQL);
				$num = mysql_numrows($tresult);
				if ($num == 0) {
					$SQL = "SELECT * FROM ProductMaster WHERE CategoryID=$CategoryID";
					$tresult = mysql_query($SQL);
					$num = mysql_numrows($tresult);
					if ($num == 0) {
						$SQL = "DELETE FROM ProductCategory WHERE CategoryID=$CategoryID";
						$query = mysql_query($SQL);
					} else {
						header("location: ?pcid=".$_POST['pcid']."&PageNo=".$_GET['PageNo']."&msg=Delete%20failed!");
					}
				} else {
					header("location: ?pcid=".$_POST['pcid']."&PageNo=".$_GET['PageNo']."&msg=Delete%20failed!");
				}
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
#$recordCount = GetRecNo("", "All");
$recordCount = GetRecNo($pcid);

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

$result = SelectAllProductCategoryInPage($startRow, $pageSize, $pcid);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>productcategory List</title>
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
<script type="text/javascript" src="vbulletin_productcategory.js"></script>
</head>


<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
	<table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td width="46%" align="left" valign="middle"></td>
          <td width="46%" align="right" valign="top"><span class="general-body">Welcome <? echo $username ?><br />
</span></td>
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
      <table width="100%" height="20" border="0" align="center" cellpadding="1"  cellspacing="1" >
        <tr>
          <td width="8%" align="left">&nbsp;</td>
          <td width="92%" align="left"><? if ($_GET[msg]!='') { echo "<font class='general-body'>".$_GET[msg]."</font><br>"; } ?></td>
        </tr>
      </table>
      <table width="100%" height="32" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td width="8%"></td>
          <td width="88%" align="left" valign="top">
		  <form action="./viewproductcategory.php" method="post" name="catform">
              <table width="592" height="30" border="0" cellpadding="1" cellspacing="1">
                <tbody>
                  <tr bgcolor="#cccccc"> 
                    <td width="51"><input name="checkallbox" value="" onclick="JavaScript: docheckall(document.catform,'catform');" type="checkbox" /> 
                      <span class="field-title">All</span></td>
                    <td width="170" class="field-title">Name (English) </td>
                   <!-- <td width="170" class="field-title"> Name (Simplified Chinese) </td> -->
                    <td width="44" align="center" class="field-title">Edit</td>
                    <td width="44" align="center" class="field-title">Sub Cat</td>
                    <?php if ($lv!=1){?>
                    <td width="42" align="center" class="field-title">Status</td>
                   <!-- <td width="42" align="center" class="field-title">&nbsp;</td> -->
                    <?php }?>
                   <!-- <td width="42" align="center" class="field-title">&nbsp;</td> -->
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
					 onclick="copyCheckboxesRange('catform', 'id_rows<? echo $i ?>','l');"
					 value="<? echo $row[CategoryID] ?>" type="checkbox" /> </td>
                    <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"> 
                      <? echo $row[CategoryName]; ?>
                    </td>
					
                    <!-- <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[TChnName]; ?> </td>
                    <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[SChnName]; ?> </td> -->
                    <td width="44" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');">
				  <a href="./modproductcategory.php?id=<? echo $row[CategoryID] ?>"><img src="images/edit.png" width="16" height="16" border="0" /></a> 
                    </td>
                    <td width="44" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');">
				  <a href="?pcid=<? echo $row[CategoryID] ?>"><img src="images/edit.png" width="16" height="16" border="0" /></a>
                    </td>
                    <?php if ($lv!=1) { ?>
                    <td width="42" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="#"> 
                      <? if ($row[ViewStatus] == "T")  { ?>
                      <img src="images/tick.gif" width="16" height="16" border="0" /> 
                      <? } else { ?>
                      <img src="images/cross.png" width="12" height="12" border="0" /> 
                      <? } ?>
                      </a> </td>
                    <?php } ?>
                    <!--
					<td width="44" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"> 
                   <? //echo $row[CategoryID] ?>  
                     
				  <a href="./viewproductcategory.php?pcid=<? echo $row[CategoryID] ?>&lv=<? echo $lv+1; ?>"><img src="images/edit.png" width="16" height="16" border="0" /></a> 
				 	-->
                    </td>
                  </tr>
                  <? $i++;} ?>
                </tbody>
              </table>
            <table width="592" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="70" align="left" >
	
	
	<!-- 
	 			  <a href="./addproductcategory.php" class="homepage_login">Add category</a>
				  
	-->
				  <?php if ($lv!=1) { ?><input name="submit" type="submit" value="Add" class="general-body" /><?php } ?> </td>
                  <td width="543" align="right" ><table height="15" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td></tbody></td>
                    </tr>
                    <tr>
                      <?php 
						  echo "<td class='nav_control'>Page $pageNo of $maxPage</td>";
						  if ($pageNo > 1) {
						?>
                      <td class="alt1"><? echo "<a href=viewproductcategory.php?PageNo=".($pageNo-1)."&pcid=".$pcid." class='nav'>&lt;</a>&nbsp;"; ?> </td>
                      <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=viewproductcategory.php?PageNo=$j&pcid=".$pcid." class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=viewproductcategory.php?PageNo=".($pageNo+1)."&pcid=".$pcid." class='nav'>&gt;</a>";
							echo "</td>";
						  }
						?>
                      <td style="cursor: pointer;" id="pagenav" class="nav_control" title=""><script type="text/javascript"> vbproductcategory_register("pagenav");</script></td>
                    </tr>
                    <tr>
                      <td></tbody></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
                <table width="582" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><?php if ($lv!=1){ ?><span class="general-search">Do the following action: </span>
                      <select name="action">
                        <option value="delete">Delete</option>
                        <option value="disable">Disable</option>
                        <option value="active">Active</option>
                      </select>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit" value="Submit" class="general-body" /><?php } ?>
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

	<div class="vbproductcategory_popup" id="pagenav_productcategory" style="display: none; position: absolute; z-index: 50;">
		<table border="0" cellpadding="4" cellspacing="1">
		<tbody><tr>
			<td class="thead" nowrap="nowrap">Goto Page...</td>
		</tr>
		<tr>
			<td class="vbproductcategory_option" title="">
			<form action="viewproductcategory.php" method="GET" id="pagenav_form" name="frmpagenav">
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
