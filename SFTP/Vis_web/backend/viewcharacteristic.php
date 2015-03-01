<?php
include_once("./functions/session.php");
include_once("./functions/dblink.php");
include_once("./functions/characteristic.php");

//if ($_GET[lv]==3) {header("location: ./viewproduct_.php?pcid=$_GET[pcid]");}
if ($_GET['pcid']== "" || $_GET['pcid']==0) 
{
//    $pcid=0;$lv=1;
} else 
{
    $pcid=$_GET['pcid'];$lv=2;
}
//if ($_GET[lv]=="") {$lv=1;} else {$lv=$_GET[lv];}

if (isset($_POST["submit"]))  {
	$pcid=$_POST[pcid];
	if ($pcid==0) {
	  $pcid=0;
//	  $lv=1;
	}else {
	  $pcid=$_POST[pcid];
	  $lv=2;
	}
	
	if ($_POST["submit"] == "Add")  {
		header("location: ./addcharacteristic.php?pcid=$_POST[pcid]");		   
		exit();
	}

	$action = $_POST["action"];
	$a = $_GET['PageNo'];

    $checkid = $_POST["row_to_delete"];	
				 	  
	if ($action == "disable")  {		
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "UPDATE CharacteristicType SET ViewStatus='F' WHERE ID=$ID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "active") {
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "UPDATE CharacteristicType SET ViewStatus='T' WHERE ID=$ID";
				$query = mysql_query($SQL);			  
			}
		}
	} elseif ($action == "delete")  {
		if (count($checkid) >0)  {
			foreach($checkid as $ID)  {
				$SQL = "DELETE FROM CharacteristicType WHERE ID=$ID";
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

$result = SelectAllCharacteristicInPage($startRow, $pageSize, $pcid);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CharacteristicType List</title>
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
<script type="text/javascript" src="vbulletin_CharacteristicType.js"></script>
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
          <td width="88%" align="left" valign="top"><form action="./viewcharacteristic.php" method="post" name="catform">
              <table width="687" height="30" border="0" cellpadding="1" cellspacing="1">
                <tbody>
                  <tr bgcolor="#cccccc"> 
                    <td width="71"><input name="checkallbox" value="" onclick="JavaScript: docheckall(document.catform,'catform');" type="checkbox" /> 
                      <span class="field-title">All</span></td>
                    <td width="237" class="field-title">Name</td>
                    <td width="62" align="center" class="field-title">Edit</td>
                    <td width="62" align="center" class="field-title">Status</td>
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
                    <td width="71" bgcolor="<? echo $bgColor ?>" > <input id="id_rows<? echo $i ?>" name="<? echo "row_to_delete[".$i."]" ?>" 
					 onclick="copyCheckboxesRange('catform', 'id_rows<? echo $i ?>','l');"
					 value="<? echo $row[ID] ?>" type="checkbox" <?if ($row[Name]=="Country") echo "disabled"?>/> </td>
                    <td width="237" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"> 
                      <? echo $row[Name]; ?>
                    </td>
                    <td width="62" align="center" valign="middle" class="general-body" bgcolor="<? echo $bgColor ?>" 
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="./modcharacteristic.php?id=<? echo $row[ID] ?>"><img src="images/edit.png" width="16" height="16" border="0" /></a> 
                    </td>
                    
                    <td width="59" align="center" class="general-body" bgcolor="<? echo $bgColor ?>"
				  onmousedown="setCheckboxColumn('<? echo "id_rows".$i ?>');"><a href="#"> 
                      <? if ($row[ViewStatus] == "T")  { ?>
                      <img src="images/tick.gif" width="16" height="16" border="0" /> 
                      <? } else { ?>
                      <img src="images/cross.png" width="12" height="12" border="0" /> 
                      <? } ?>
                      </a> </td>
                    </td>
                  </tr>
                  <? $i++;} ?>
                </tbody>
              </table>
            <table width="684" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="49" align="left" ><?php if ($lv!=1) { ?><input name="submit" type="submit" value="Add" class="general-body" /><?php } ?> </td>
                  <td width="635" align="right" ><table height="15" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td></tbody></td>
                    </tr>
                    <tr>
                      <?php 
						  echo "<td class='nav_control'>Page $pageNo of $maxPage &nbsp</td>";
						  if ($pageNo > 1) {
						?>
                      <td class="alt1"><? echo "<a href=viewcharacteristic.php?PageNo=".($pageNo-1)."&pcid=".$pcid." class='nav'>&lt;</a>&nbsp;"; ?> </td>
                      <?php } 
							$j = 0;
					
							//Print Page No
							for($j=1;$j<=$maxPage;$j++) {
							  if ($j==$pageNo)  {
							    echo "<td class='alt2'>";
							  } else  {
							    echo "<td class='alt1'>";
							  }
							  echo "<a href=viewcharacteristic.php?PageNo=$j&pcid=".$pcid." class='nav'>$j</a> ";
							}
							echo "</td>";

						  if ($pageNo < $maxPage)  {
						    echo "<td class='alt1'>";
							echo "<a href=viewcharacteristic.php?PageNo=".($pageNo+1)."&pcid=".$pcid." class='nav'>&gt;</a>";
							echo "</td>";
						  }
						?>
                      <td style="cursor: pointer;" id="pagenav" class="nav_control" title=""><script type="text/javascript"> vbCharacteristicType_register("pagenav");</script></td>
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

	<div class="vbCharacteristicType_popup" id="pagenav_CharacteristicType" style="display: none; position: absolute; z-index: 50;">
		<table border="0" cellpadding="4" cellspacing="1">
		<tbody><tr>
			<td class="thead" nowrap="nowrap">Goto Page...</td>
		</tr>
		<tr>
			<td class="vbCharacteristicType_option" title="">
			<form action="viewcharacteristic.php" method="GET" id="pagenav_form" name="frmpagenav">
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
