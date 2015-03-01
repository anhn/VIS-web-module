<?php

include_once("./functions/dblink.php");
include_once("./functions/menu.php");
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
   		 $SQL = "SELECT * FROM Menu where PCID='".$_POST["categoryID"]."' and ShowInIndex='T' and ActiveStatus='T'";
      	 $rs = mysql_query($SQL);
          $subMenuCount = mysql_num_rows($rs); 
          if ($subMenuCount >0 )
              $queue =1;
          else 
              $queue =0;    	       
	       $success = UpdateCategory($_POST["categoryID"], $_POST["engname"], $_POST["pcid"], $_POST["photo"], $queue, $_POST["status"], $_POST["language"], $_POST["position"], $_POST["sphoto"], $_POST["activefile"], $_POST["file"], $_POST["OutletID"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewmenu.php?msg=$msg&pcid=".$_POST["pcid"]);	 
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

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

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
          <td width="88%" align="left" valign="top"><form action="./modmenu.php" method="post" name="catform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Modify Category Record </font></td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Create Date: </td>
                <td align="left" width="200" class="general-body"><? echo $row[CreateDate]; ?></td>
                <td width="100" align="left" class="general-search"> Modify Date:</td>
                <td align="left" width="200" class="general-body"><? echo $row[ModifyDate]; ?></td>
              </tr>
              <tr>
                  <td align="left" class="general-search">Menu : </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="engname" type="text" value="<? echo $row[EngName]; ?>" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td align="left" class="general-search">Primary Category</td>
                <td colspan="4" align="left" class="general-body"><? SelectAllCategoryInComb($row[PCID]); ?></td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">OutletID </td>
                <td colspan="4" align="left" class="general-body">
                <select name="OutletID">
                <option value="0">
				 <?php
				 $sql = "SELECT * FROM Outlet WHERE ViewStatus='T'";
				 $oresult = mysql_query($sql);
				 while ($orow = mysql_fetch_array($oresult)) {
				 	echo '<option value="'.$orow['ID'].'"';
				 	if ($orow['ID'] == $row['OutletID']) echo ' selected ';
				 	echo '>'.$orow['Name'];
				 }
				 ?>
				 </select>
				</td>
              </tr>
              <tr>
                <td align="left" class="general-search">Language </td>
                <td colspan="4" align="left" class="general-body">
				<!-- 
				  <input name="show" type="radio" value="T" <? if ($row[ShowInIndex]=='T'){echo " checked";} ?> /> English
               -->   
			<select name="language">
                      <option value="T" <? if ($row[ShowInIndex]=='T'){echo " selected";} ?> >English</option>
                      <option value="F" <? if ($row[ShowInIndex]=='F'){echo " selected";} ?> >Việt Nam</option>
                    </select>
              </tr>
			   
			  <?php  //}?>
                
				<tr>
                  <td width="100" align="left" class="general-search">Small Photo: 
                  </td>
                  <td colspan="4" align="left" class="general-body"> 
                    <?php 
		            $sw = new SPAW_Wysiwyg('sphoto', $row[sPhoto],'en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                  </td>
              </tr>	
			
			  <tr>
                <td class="general-search">Active file: </td>
                <td colspan="4" class="general-body">
				  <input name="activefile" type="radio" value="T" <? if ($row[ActiveFile]=='T'){echo " checked";} ?> />
                  Active
                  <input name="activefile" type="radio" value="F" <? if ($row[ActiveFile]=='F'){echo " checked";} ?>/>
                    Inactive 
                    <input name="file" type="text" value="<? echo $row[File]; ?>" size="40" /></td>
              </tr>
			 
				<tr> 
                  <td width="100" align="left" class="general-search">Content: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('photo', stripslashes($row[Photo]),'en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
                <tr> 
                  <td align="left" valign="top" class="general-search">Sub Menu: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				  <!--
				  <input name="queue" type="text" value=<? echo $row[Queue]; ?> size="4" maxlength="20" />&nbsp;&nbsp;(if you have submenu ,you add 1)
                  -->
  <?php 
  
     		 $SQL = "SELECT * FROM Menu where PCID='".$row[categoryID]."' and ShowInIndex='T' and ActiveStatus='T'";
      	 $rs = mysql_query($SQL);
          $subMenuCount = mysql_num_rows($rs); 
          if ($subMenuCount >0 )
              $queue =1;
          else 
              $queue =0;    	       
?>				
				  <input name="queue" type="radio" value="1" <? if ($queue=='0'){echo " disabled  ";} ?> />
                  SubMenu
                  <input name="queue" type="radio" value="0" <? if ($queue =='1'){echo " disabled";} ?> />
                  No SubMenu
				  </td>
              </tr>
			  
			 <tr>
                <td align="left" class="general-search">Position </td>
                <td colspan="4" align="left" class="general-body">
                  <select name="position">
                    <option value="1" <? if ($row[Position]=='1'){echo " selected";} ?> >1</option>
                    <option value="2" <? if ($row[Position]=='2'){echo " selected";} ?> >2</option>
                    <option value="3" <? if ($row[Position]=='3'){echo " selected";} ?> >3</option>
					<option value="4" <? if ($row[Position]=='4'){echo " selected";} ?> >4</option>
					<option value="5" <? if ($row[Position]=='5'){echo " selected";} ?> >5</option>
					<option value="6" <? if ($row[Position]=='6'){echo " selected";} ?> >6</option>
					<option value="7" <? if ($row[Position]=='7'){echo " selected";} ?> >7</option>
					<option value="8" <? if ($row[Position]=='8'){echo " selected";} ?> >8</option>
					<option value="9" <? if ($row[Position]=='9'){echo " selected";} ?> >9</option>
					<option value="10" <? if ($row[Position]=='10'){echo " selected";} ?> >10</option>
					<option value="11" <? if ($row[Position]=='11'){echo " selected";} ?> >11</option>
					<option value="12" <? if ($row[Position]=='12'){echo " selected";} ?> >12</option>
					<option value="13" <? if ($row[Position]=='13'){echo " selected";} ?> >13</option>
					<option value="14" <? if ($row[Position]=='14'){echo " selected";} ?> >14</option>
					<option value="15" <? if ($row[Position]=='15'){echo " selected";} ?> >15</option>
					<option value="16" <? if ($row[Position]=='16'){echo " selected";} ?> >16</option>
					<option value="17" <? if ($row[Position]=='17'){echo " selected";} ?> >17</option>
					<option value="18" <? if ($row[Position]=='18'){echo " selected";} ?> >18</option>
					<option value="19" <? if ($row[Position]=='19'){echo " selected";} ?> >19</option>
					<option value="20" <? if ($row[Position]=='20'){echo " selected";} ?> >20</option>
					<option value="21" <? if ($row[Position]=='21'){echo " selected";} ?> >21</option>
					<option value="22" <? if ($row[Position]=='22'){echo " selected";} ?> >22</option>
					<option value="23" <? if ($row[Position]=='23'){echo " selected";} ?> >23</option>
					<option value="24" <? if ($row[Position]=='24'){echo " selected";} ?> >24</option>
					<option value="25" <? if ($row[Position]=='25'){echo " selected";} ?> >25</option>
					<option value="26" <? if ($row[Position]=='26'){echo " selected";} ?> >26</option>
					</select>
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
			  <?php if ($row[PCID]==0) { ?>
                	<input name="pcid" type="hidden" value=<? echo $row[PCID]?> />
                	<input name="show" type="hidden" value="<? echo $row[ShowInIndex]?>" />
                	
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
