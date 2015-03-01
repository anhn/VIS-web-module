<?php

include_once("./functions/dblink.php");
include_once("./functions/subcategory.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control

session_start();

if ($_SESSION[logInfo][success]==1) {    
	if (isset($_GET["id"]))  {
	  $categoryID = $_GET["id"];
	  $result = SearchCategory($categoryID);
	  $row = mysql_fetch_array($result); 
	}
	
	switch($_POST["submit"])  {
	  case "Save":
	        $success = UpdateCategory($_POST["categoryID"], $_POST["engname"], $_POST["pcid"], $_POST["photo"], $_POST["queue"], $_POST["status"], $_POST["lphoto"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewsubcategory.php?msg=$msg&pcid=".$_POST["pcid"]);	 
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
          <td width="88%" align="left" valign="top"><form action="./modsubcategory.php" method="post" name="catform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                  <td colspan="4" class="thead"><font color="#00ff00" size="3"> Modify Wine list &amp; Buy subcategory 
                    Record </font></td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Create Date: </td>
                <td align="left" width="200" class="general-body"><? echo $row[CreateDate]; ?></td>
                <td width="100" align="left" class="general-search"> Modify Date:</td>
                <td align="left" width="200" class="general-body"><? echo $row[ModifyDate]; ?></td>
              </tr>
              <tr>
                  <td align="left" class="general-search">Wine list &amp; Buy 
                    subcategory : </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="engname" type="text" value="<? echo $row[EngName]; ?>" size="20" maxlength="100" />
                </td>
              </tr>
              <!-- <tr>
                <td align="left" class="general-search">Category (Traditional Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="tchnname" type="text" value="<? echo $row[TChnName]; ?>" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td align="left" class="general-search">Category (Simplified Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="schnname" type="text" value="<? echo $row[SChnName]; ?>" size="20" maxlength="100" />
                </td>
              </tr> -->
              <tr>
                  <td align="left" class="general-search">Primary subcategory</td>
                <td colspan="4" align="left" class="general-body"><? SelectAllCategoryInComb($row[PCID]); ?></td>
              </tr>
			  
              <tr>
                  <td width="100" align="left" class="general-search">Small Photo: 
                  </td>
                  <td colspan="4" align="left" class="general-body"> 
                    <?php 
		            $sw = new SPAW_Wysiwyg('photo', $row[Photo],'en','photo','classic','400px','200px');
		            $sw->show();
		          ?>
                  </td>
              </tr>	
			  
			  			   <tr>
                  <td width="100" align="left" class="general-search">Large Photo 
                    &amp; Content: </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('lphoto', $row[lPhoto],'en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
			  		  
                <tr> 
                  <td align="left" valign="top" class="general-search">Subsubcategory: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				<!--  <input name="queue" type="text" value="<? echo $row[Queue]; ?>" size="4" maxlength="20" /> -->
                <input name="queue" type="radio" value="1" <? if ($row[Queue]=='1'){echo " checked";} ?> />
                    Subsubcategory 
                    <input name="queue" type="radio" value="0" <? if ($row[Queue]!='1'){echo " checked";} ?> />
                    No Subsubcategory</td>
              </tr>
              <tr>
                <td class="general-search">Active Status: </td>
                <td colspan="4" class="general-body">
				  <input name="status" type="radio" value="T" <? if ($row[ActiveStatus]=='T'){echo " checked";} ?> />
                  Active
                  <input name="status" type="radio" value="F" <? if ($row[ActiveStatus]=='F'){echo " checked";} ?> />
                  Inactive</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="4"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
                    <input name="categoryID" type="hidden" value="<? echo $row[CategoryID]?>" />
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
