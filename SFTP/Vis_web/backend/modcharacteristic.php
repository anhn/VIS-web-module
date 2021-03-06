<?php

include_once("./functions/dblink.php");
include_once("./functions/characteristic.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control

session_start();

if ($_SESSION[logInfo][success]==1) {    
	if (isset($_GET["id"]))  {
	  $ID = $_GET["id"];
	  $result = SearchCharacteristic($ID);
	  $row = mysql_fetch_array($result); 
	}
	
	switch($_POST["submit"])  {
	  case "Save":
	        $success = UpdateCharacteristic($_POST["ID"], $_POST["Name"], $_POST["Notes"], $_POST["ViewStatus"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewcharacteristic.php?msg=$msg&pcid=".$_POST["pcid"]);	 
	      exit();		  
		break;
	}

	$username=$_SESSION[logInfo][username];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];	
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

<script src="functions.js" type="text/javascript" language="javascript"></script>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />

<script language="javascript">
<!--

function validateFields()  {
  f = document.catform;

  if( f.engname.value.length == 0 )  {
    alert("Please input a name (English).");
    f.engname.focus();
	return false;
  }

  if( f.tchnname.value.length == 0 )  {
    alert("Please input a name (Traditional Chinese).");
    f.tchnname.focus();
	return false;
  }
  
  if( f.schnname.value.length == 0 )  {
    alert("Please input a name (Simplified Chinese).");
    f.schnname.focus();
	return false;
  }
  
  f.submit();
  return true;
}
//-->
</script>



</head>


<body onLoad="catform.engname.focus();">
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
      <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td align="left" valign="middle"><p class="general-body"><br />
          </p></td>
          <td width="4"></td>
        </tr>
      </table>
      <table width="100%" height="32" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td width="8%"></td>
          <td width="88%" align="left" valign="top"><form action="./modcharacteristic.php" method="post" name="catform" enctype="multipart/form-data">
              <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
                <tr bgcolor="#646464" style="border:1 "> 
                  <td colspan="4" class="thead"> <font color="#00ff00" size="3">Modify Characteristic Type </font></td>
                </tr>
                <tr> 
                  <td align="left" class="general-search">Name: </td>
                  <td colspan="4" align="left" class="general-body"> <input name="Name" type="text" value="<? echo $row[Name]; ?>" size="50" maxlength="255" /> 
                  </td>
                </tr>
                <tr> 
                  <td width="124" align="left" class="general-search">Notes: </td>
                  <td colspan="4" align="left" class="general-body"> 
                    <?php 
		            $sw = new SPAW_Wysiwyg('Notes', stripslashes($row[Notes]),'en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                  </td>
                </tr>
                <tr> 
                  <td class="general-search">View Status: </td>
                  <td colspan="4" class="general-body"> <input name="ViewStatus" type="radio" value="T" <? if ($row[ViewStatus]=='T'){echo " checked";} ?> />
                    Active 
                    <input name="ViewStatus" type="radio" value="F" <? if ($row[ViewStatus]=='F'){echo " checked";} ?> />
                    Inactive</td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td colspan="4"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/> 
                    <input type="reset" name="Reset" value="Reset" class="general-body"/> 
                    <input name="ID" type="hidden" value="<? echo $row[ID]?>" /> 
                    <?php if ($row[PCID]==0) { ?>
                    <input name="pcid" type="hidden" value=<? echo $row[ID]?> /> 
                    <input name="status" type="hidden" value="<? echo $row[ViewStatus]?>" /> 
                    <?php } ?>
                  </td>
                </tr>
              </table>
          </form></td>
          <td width="4"></td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>
