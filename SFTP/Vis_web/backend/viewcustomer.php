<?php
include_once("./functions/session.php");
include_once("./functions/dblink.php");

#if ($_GET[lv]==3) {header("location: ./viewproduct_.php?pcid=$_GET[pcid]");}
if ($_GET[lg]!=""){$lg=$_GET[lg];}


if ($_GET[pcid]=="" || $_GET[pcid]==0) {$pcid=0;$lv=1;} 
else {
$pcid=$_GET[pcid];$lv=2;}
#if ($_GET[lv]=="") {$lv=1;} else {$lv=$_GET[lv];}

 if ($_SESSION[logInfo][success]==1 && $_SESSION[logInfo][group]!='user') { 

if (isset($_POST["submit"]))  {
	$pcid=$_POST[pcid];
	if ($pcid==0) {$pcid=0;$lv=1;} else {$pcid=$_POST[pcid];$lv=2;}
	
	if ($_POST["submit"] == "Add")  {
		header("location: ./addcustomer.php?pcid=$_POST[pcid]&lg=$_POST[lg]");		   
		exit();
	}

	$action = $_POST["action"];
	$a = $_GET['PageNo'];

    $checkid = $_POST["row_to_delete"];	
				 	  
	if ($action == "disable")  {		
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "UPDATE Customer SET ActiveStatus='F' WHERE ID=$ID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "active") {
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "UPDATE Customer SET ActiveStatus='T' WHERE ID=$ID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "delete")  {
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "DELETE FROM Customer WHERE ID=$ID";
				$query = mysql_query($SQL);			  
			}
		}		
	}
}
	
$username=$_SESSION[logInfo][username];
$lastlogindate=$_SESSION[logInfo][lastlogindate];		
	
//Set the page size
$pageSize = 15;
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
#$recordCount = GetRecNo($pcid);
$SQL = "SELECT * FROM Customer";
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

#$result = SelectAllCategoryInPage($startRow, $pageSize, $pcid);
$SQL = "SELECT * FROM Customer ORDER BY ID LIMIT $startRow, $pageSize";
	 #echo $SQL;
	$result = @mysql_query($SQL);
} else {
	header("location: ./error.php");	
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>customer List</title>
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
<script type="text/javascript" src="vbulletin_customer.js"></script>
</head>


<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
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
          <td width="88%" align="left" valign="top"><form action="./viewcustomer.php" method="post" name="catform">
              <table width="653" height="30" border="0" cellpadding="1" cellspacing="1">
                <tbody>
                  <tr bgcolor="#cccccc">
                    <td width="41"> 
                      <input name="checkallbox" value="" onclick="JavaScript: docheckall(document.catform,'catform');" type="checkbox" />
                        <span class="field-title">All</span></td>
                    <td width="50" class="field-title">Name</td>
                    <!-- <td width="170" class="field-title"> Name (Traditional Chinese) </td>
                    <td width="170" class="field-title"> Name (Simplified Chinese) </td> -->
                    <td width="69" align="center" class="field-title">Email</td>
                    <?php if ($lv!=1){?>
                    <td width="154" align="center" class="field-title">Comment</td>
					<?php }?>
                    <td width="323" align="center" class="field-title">Comment</td>
                  </tr>
                  <? $i=0; 		
				   while ($row = @mysql_fetch_array($result)) { 			
				     if ($i%2 == 0)  {
				       $bgColor = "#D9F2FF";				
				     }  else  { 
					   $bgColor = "#ffffff";  
					 }
				?>
                  <tr onmouseover="setPointer(this, <? echo $i ?>, 'over', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');" 
				    onmouseout="setPointer(this, <? echo $i ?>, 'out', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');" 
					onmousedown="setPointer(this, <? echo $i ?>, 'click', '<? echo $bgColor ?>', '#CCFFCC', '#FFCC99');">
                    <td width="41" bgcolor="<? echo $bgColor ?>" >
					<input id="id_rows<? echo $i ?>" name="<? echo "row_to_delete[".$i."]" ?>" 
					 onclick="copyCheckboxesRange('catform', 'id_rows<? echo $i ?>','l');"
					 value="<? echo $row[ID] ?>" type="checkbox" />
					</td>
                    <td width="50" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[FirstName]; ?> </td>
                    <!-- <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[TChnName]; ?> </td>
                    <td width="170" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[SChnName]; ?> </td> -->
					<td width="69" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[LastName]; ?></td>
                    <?php if ($lv!=1) { ?>
                    <td width="154" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[Comment]; ?> </td>
					<?php } ?>
                    <td width="323" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><? echo $row[Comment]; ?></td>
                  </tr>
                  <? $i++;} ?>
                </tbody>
              </table>
            <table width="592" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="49" align="left" >&nbsp;</td>
                  <td width="543" align="right" ><table height="15" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td width="20"></tbody></td>
                    </tr>
                    <tr>
                      <?php 
						  echo "<td class='nav_control'>Page $pageNo of $maxPage</td>";
						  if ($pageNo > 1) {
						?>
                      <td class="alt1"><? echo "<a href=viewcustomer.php?PageNo=".($pageNo-1)."&pcid=".$pcid." class='nav'>&lt;</a>&nbsp;"; ?> </td>
                      <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=viewcustomer.php?PageNo=$j&pcid=".$pcid." class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=viewcustomer.php?PageNo=".($pageNo+1)."&pcid=".$pcid." class='nav'>&gt;</a>";
							echo "</td>";
						  }
						?>
                      <td width="147" class="nav_control" id="pagenav" style="cursor: pointer;" title=""><script type="text/javascript"> vbcustomer_register("pagenav");</script></td>
                    </tr>
                    <tr>
                      <td></tbody></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
                <table width="652" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="652"><?php if ($lv!=0){ ?><span class="general-search">Do the following action: </span>
                      <select name="action">
                        <option value="delete">Delete</option>
                        
                      </select>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit" value="Submit" class="general-body" /><?php } ?>
  <input name="pcid" type="hidden" id="pcid" value="<? echo $pcid; ?>" />
  </td></tr>
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

	<div class="vbcustomer_popup" id="pagenav_customer" style="display: none; position: absolute; z-index: 50;">
		<table border="0" cellpadding="4" cellspacing="1">
		<tbody><tr>
			<td class="thead" nowrap="nowrap">Goto Page...</td>
		</tr>
		<tr>
			<td class="vbcustomer_option" title="">
			<form action="viewcustomer.php" method="GET" id="pagenav_form" name="frmpagenav">
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
