<?php

include_once("./functions/dblink.php");
include_once("./functions/productsubcategory.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control

session_start();

if ($_SESSION[logInfo][success]==1) {    
	if (isset($_GET["id"]))  {
	  $SubCategoryID = $_GET["id"];
	  $result = SearchProductSubCategory($SubCategoryID);
	  $row = mysql_fetch_array($result); 
	}
	
	switch($_POST["submit"])  {
	  case "Save":
	        $success = UpdateProductSubCategory($_POST["SubCategoryID"], $_POST["engSubCategoryName"], $_POST["vnSubCategoryName"], $_POST["note"], $_POST["viewstatus"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewproductsubcategory.php?msg=$msg&pcid=".$_POST["pcid"]);	 
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

  if( f.SubCategoryName.value.length == 0 )  {
    alert("Please input a SubCategoryName (English).");
    f.SubCategoryName.focus();
	return false;
  }

  if( f.tchnSubCategoryName.value.length == 0 )  {
    alert("Please input a SubCategoryName (Traditional Chinese).");
    f.tchnSubCategoryName.focus();
	return false;
  }
  
  if( f.schnSubCategoryName.value.length == 0 )  {
    alert("Please input a SubCategoryName (Simplified Chinese).");
    f.schnSubCategoryName.focus();
	return false;
  }
  
  f.submit();
  return true;
}
//-->
</script>



</head>


<body onLoad="catform.engSubCategoryName.focus();">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td width="46%" align="left" valign="middle"></td>
          <td width="46%" align="right" valign="top"><span class="general-body">Welcome <? echo $userSubCategoryName ?><br />
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
          <td width="88%" align="left" valign="top"><form action="./modproductsubcategory.php" method="post" SubCategoryName="catform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Modify SubCategory Record </font></td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Create Date: </td>
                <td align="left" width="200" class="general-body"><? echo $row[CreateDate]; ?></td>
                <td width="100" align="left" class="general-search"> Modify Date:</td>
                <td align="left" width="200" class="general-body"><? echo $row[ModifyDate]; ?></td>
              </tr>
                <tr> 
                  <td align="left" class="general-search">SubCategoryName (English): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="engSubCategoryName" type="text" value="<? echo $row[SubCategoryName]; ?>" size="50" maxlength="255" />
                </td>
              </tr>
              <!-- <tr>
                <td align="left" class="general-search">SubCategory (Traditional Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="tchnSubCategoryName" type="text" value="<? //echo $row[TChnSubCategoryName]; ?>" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td align="left" class="general-search">SubCategory (Simplified Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="schnSubCategoryName" type="text" value="<? //echo $row[SChnSubCategoryName]; ?>" size="20" maxlength="100" />
                </td>
              </tr> -->
			 
			
     <!--         
			  <tr>
                <td align="left" class="general-search">Primary SubCategory</td>
                <td colspan="4" align="left" class="general-body"><? //SelectAllSubCategoryInComb($row[PCID]); ?></td>
              </tr>
	 	  
              <tr>
                <td align="left" class="general-search">Show Contact </td>
                  <td colspan="4" align="left" class="general-body"> <input name="show" type="radio" value="T" <? if ($row[ShowInIndex]=='T'){echo " checked";} ?> />
                    Show 
                    <input name="show" type="radio" value="F" <? //if ($row[ShowInIndex]=='F'){echo " checked";} ?> /> Do not Show</td>
              </tr>
		-->		 
		
		 <tr> 
                  <td align="left" valign="top" class="general-search">SubCategoryName (Viet 
                    Nam): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="vnSubCategoryName" type="text" value=<? echo $row[SubCategoryNameVn]; ?> size="30" maxlength="255" />
                </td>
              </tr>
                <tr> 
                  <td width="100" align="left" class="general-search">Note: </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('note', stripslashes($row[Note]),'en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
               
  
              <tr>
                <td class="general-search">View Status: </td>
                <td colspan="4" class="general-body">
				  <input name="viewstatus" type="radio" value="T" <? if ($row[ViewStatus]=='T'){echo " checked";} ?> />
                  Active
                  <input name="viewstatus" type="radio" value="F" <? if ($row[ViewStatus]=='F'){echo " checked";} ?> />
                  Inactive</td>
              </tr>
	
              <tr>
                <td>&nbsp;</td>
                <td colspan="4"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
                    <input name="SubCategoryID" type="hidden" value="<? echo $row[SubCategoryID]?>" />
			  <?php if ($row[PCID]==0) { ?>
                	<input name="pcid" type="hidden" value=<? echo $row[SubCategoryID]?> />
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
