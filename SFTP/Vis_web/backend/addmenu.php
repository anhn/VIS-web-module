<?php

include_once("./functions/dblink.php");
include_once("./functions/menu.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control

session_start();

if ($_GET[pcid]=="") {
	$pcid=0;
} else {
	$pcid=$_GET[pcid];
}


if ($_GET[lg]=="") {
	$lg='T';
} else {
	$lg=$_GET[lg];
}
//echo $lg;


if ($_SESSION[logInfo][success]==1 && $_SESSION[logInfo][group]!='user') {    
	
	switch($_POST["submit"])  {
	  case "Save":
	      $success = InsertCategory($_POST["engname"], $_POST["pcid"], $_POST["photo"], $_POST["queue"], $_POST["status"], $_POST["show"], $_POST["position"], $_POST["sphoto"], $_POST["activefile"], $_POST["file"], $_POST["OutletID"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewmenu.php?msg=$msg");	 
	      exit();		  
		break;
	}
	
	$username=$_SESSION[logInfo][username];
	$group=$_SESSION[logInfo][group];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];	
} else {
	header("location: ./error.php");	
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
          <td width="88%" align="left" valign="top"><form action="./addmenu.php" method="post" name="catform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Add New Menu</font>
				</td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Name (English): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="engname" type="text" value="" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Primary Menu </td>
                <td colspan="4" align="left" class="general-body">
				 <? SelectAllCategoryInComb($pcid, $lg); ?>
				</td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">OutletID </td>
                <td colspan="4" align="left" class="general-body">
                <select name="OutletID">
                <option value="0">
				 <?php
				 $sql = "SELECT * FROM Outlet WHERE ViewStatus='T'";
				 $result = mysql_query($sql);
				 while ($row = mysql_fetch_array($result)) {
				 	echo '<option value="'.$row['ID'].'">'.$row['Name'];
				 }
				 ?>
				 </select>
				</td>
              </tr>
			   <tr>
                <td align="left" class="general-search">Language </td>
                <td colspan="4" align="left" class="general-body">
					<select name="show">
                      <option value="T" <? if ($lg=='T'){echo 'selected';}?> >English</option>
                      <option value="F" <? if ($lg=='F'){echo 'selected';}?> >Việt Nam </option>
                    </select> </td>
              </tr>
			  <tr>
                  <td width="100" align="left" class="general-search">Small Photo: 
                  </td>
                  <td colspan="4" align="left" class="general-body"> 
                    <?php 
		            $sw = new SPAW_Wysiwyg('sphoto', $row[sPhoto],'en','photo','classic','400px','200px');
		            $sw->show();
		          ?>
                  </td>
              </tr>	
			  
			  <tr>
                <td class="general-search">Active file: </td>
                <td colspan="4" class="general-body">
				  <input name="activefile" type="radio" value="T"  />
                  Active
                  <input name="activefile" type="radio" value="F" checked="checked"/>
                    Inactive 
                    <input name="file" type="text" value="./error.php" size="40" /></td>
              </tr>
			  
              <tr>
                <td width="100" align="left" class="general-search">Content: </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('photo', '','en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" class="general-search">Sub Menu: </td>
                <td colspan="3" align="left" class="general-body">
				 <!--
				  <input name="queue" type="text" value="" size="4" maxlength="20" />
                 -->
				  <input name="queue" type="radio" disabled value="1" />
                  SubMenu
                  <input name="queue" type="radio" value="0" checked="checked"/>
                  No SubMenu
				</td>
				
              </tr>
			  
			  <tr>
                <td align="left" valign="top" class="general-search">Position: </td>
                <td colspan="3" align="left" class="general-body">
				  <input name="position" type="text" value="" size="4" maxlength="20" />
                </td>
				
              </tr>
              <tr>
                <td class="general-search">Active Status: </td>
                <td colspan="4" class="general-body">
				  <input name="status" type="radio" value="T" checked="checked" />
                  Active
                  <input name="status" type="radio" value="F" />
                  Inactive</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="4"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
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
