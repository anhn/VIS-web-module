<?php

include_once("./functions/dblink.php");
include_once("./functions/subcategory.php");
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


if ($_SESSION[logInfo][success]==1) {    
	
	switch($_POST["submit"])  {
	  case "Save":
	      $success = InsertCategory($_POST["engname"], $_POST["pcid"], $_POST["photo"], $_POST["queue"], $_POST["status"], $_POST["showindex"], $_POST["lphoto"]);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewsubcategory.php?msg=$msg");	 
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
          <td width="46%" align="left" valign="middle"><p class="general-body">Wine 
              list &amp; Buy subcategory </p></td>
          <td width="46%" align="right" valign="top"><span class="general-body">Welcome <? echo $username ?><br />
Your Last Login on <?php echo $lastlogindate; ?> </span></td>
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
          <td width="88%" align="left" valign="top"><form action="./addsubcategory.php" method="post" name="catform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                  <td colspan="4" class="thead"> Add New subcategory</td>
              </tr>
              <tr>
                  <td width="100" align="left" class="general-search">Name : </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="engname" type="text" value="" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                  <td width="100" align="left" class="general-search">Primary 
                    subcategory </td>
                  <td colspan="4" align="left" class="general-body"> 
                    
					<? 
/*
	 //echo $lg;
	   
	$sql="SELECT DISTINCT CategoryID, EngName FROM subcategory WHERE PCID=0 and ShowInIndex='$lg' ORDER BY CreateDate DESC";
	$query=mysql_query($sql);
	echo '<select name="pcid" id="pcid">';
	echo '<option value="0"';
	if ($PCID == 0) { echo " selected"; };
	echo '> </option>';
	while ($row=mysql_fetch_array($query)) 
	{
		echo "<option value=$row[CategoryID]";
		if ($PCID == $row[CategoryID]) { echo " selected"; };
		echo ">$row[EngName]</option>";
		$sql1="SELECT CategoryID, EngName FROM subcategory WHERE PCID=$row[CategoryID] and ShowInIndex='$lg'";
		$query1=mysql_query($sql1);
		while ($row1=mysql_fetch_array($query1)) 
		{
			echo "<option value=$row1[CategoryID]";
			if ($PCID == $row1[CategoryID]) { echo " selected"; }
			echo ">.. $row1[EngName]</option>";
			$sql2="SELECT CategoryID, EngName FROM subcategory WHERE PCID=$row1[CategoryID] and ShowInIndex='$lg'";
			$query2=mysql_query($sql2);
			while ($row2=mysql_fetch_array($query2))
			{
			echo "<option value=$row2[CategoryID]";
			if ($PCID==$row2[Category]) {echo "selected";}
			echo ">...$row2[EngName]</option>";
				$sql3="SELECT CategoryID, EngName FROM subcategory WHERE PCID=$row2[CategoryID] and ShowInIndex='$lg'";
				$query3=mysql_query($sql3);
				while ($row3=mysql_fetch_array($query3))
				{
				echo "<option value=$row3[CategoryID]";
				if ($PCID==$row3[Category]) {echo "selected";}
				echo ">....$row3[EngName]</option>";
				}
				
			}
		
		}
		
	}
	echo '</select>';
*/
?>
					
					<? SelectAllCategoryInComb($pcid); ?>
                    <!-- <select name="pcid" id="pcid">
                    <option value="0"s>Root</option>
                  </select> -->
                  </td>
              </tr>
              <!-- <tr>
                <td width="100" align="left" class="general-search">Name (Traditional Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="tchnname" type="text" value="" size="20" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td width="100" align="left" class="general-search">Name (Simplified Chinese): </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="schnname" type="text" value="" size="20" maxlength="100" />
                </td>
              </tr> -->
                <tr> 
                  <td width="100" align="left" class="general-search">Small Photo: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('photo', '','en','photo','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
			   <tr>
                  <td width="100" align="left" class="general-search">Large Photo 
                    &amp; Content: </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
		            $sw = new SPAW_Wysiwyg('lphoto', '','en','default','classic','400px','200px');
		            $sw->show();
		          ?>
                </td>
              </tr>
			  
              <tr>
                <td align="left" valign="top" class="general-search">Queue: </td>
                <td colspan="3" align="left" class="general-body">
				 <!-- <input name="queue" type="text" value="" size="4" maxlength="20" />(if you have submenu , you add 1) -->
				 <input name="queue" type="radio" value="1" />
                    Subsubcategory 
                    <input name="queue" type="radio" value="0" checked />
                    No Subsubcategory</td>
              </tr>
			 <!--
			 <tr>
                <td class="general-search">Language: </td>
                <td colspan="4" class="general-body">
				  <input name="showindex" type="radio" value="T" checked="checked" />
                  English
                  </td>
              </tr>
			  -->
			   <tr>
                <td align="left" class="general-search">Language </td>
                <td colspan="4" align="left" class="general-body">
					<select name="showindex">
                      <option value="T" <? if ($lg=='T'){echo 'selected';}?> >English</option>
                      <option value="F" <? if ($lg=='F'){echo 'selected';}?> >Việt Nam </option>
                    </select> </td>
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
