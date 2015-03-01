<?php
include_once("./functions/session.php");
include_once("./functions/dblink.php");

//include_once("./functions/regiongroup.php");
include_once("./functions/outlet.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control


if (isset($_GET["id"]))  {
  $outletID = $_GET["id"];
  $result = SearchOutlet($outletID);
  $row = mysql_fetch_array($result); 
}


switch($_POST["submit"])  {
  case "Save":
      $success = UpdateOutlet($_POST["outletid"], $_POST["outletname"], $_POST["note"], $_POST["status"]);

      if (!$success)  {
        $msg = "Update Data Failed"; 
      } else {
        $msg = "Update Data Successful"; 
      }
      header("location: ./viewoutlet.php?msg=$msg");	 
      exit();		  
	break;
}
	
//$regionCount = GetRecNoInRegion();
//$regionResult = SelectAllRegionInPage(0, $regionCount);			
	
#$catCount = GetRecNo("", "All");
#$catResult = SelectAllCategoryInPage(0, $regionCount);			

$username=$_SESSION[logInfo][username];
$lastlogindate=$_SESSION[logInfo][lastlogindate];	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify Outlet</title>
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
  f = document.prodform;

  if( f.outletname.value.length == 0 )  {
    alert("Please input a Model No.");
    f.outletname.focus();
	return false;
  }
  
  f.submit();
  return true;
}
//-->
</script>

</head>


<body onLoad="prodform.outletname.focus();">
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
          <td width="88%" align="left" valign="top"><form action="./modoutlet.php" method="post" name="prodform"  id="prodform">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Modify Outlet </font></td>
              </tr>
                <tr> 
                  <td width="100" align="left" class="general-search">Name: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="outletname" type="text" value="<? echo $row[Name]; ?>" size="20" maxlength="100" />
                </td>
              </tr>
			   <tr>
                <td width="100" align="left" valign="top" class="general-search"> Note: </td>
                <td colspan="4" align="left" class="general-body"><?php
				    $sw = new SPAW_Wysiwyg('note',stripslashes($row[Notes]),'en','default','classic','300px','100px');
				    $sw->show();
				  ?>
                </td>
              </tr>	
              <tr>
                <td class="general-search">View Status: </td>
                <td colspan="4" class="general-body">
				  <input name="status" type="radio" value="T" <? if ($row[ViewStatus]=='T'){echo " checked";} ?> />Active
                  <input name="status" type="radio" value="F" <? if ($row[ViewStatus]=='F'){echo " checked";} ?> />Inactive
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="4">
                <input type="hidden" name="outletid" value="<?php echo $row[ID];?>">
                <input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
                </td>
              </tr>
            </table>
          </form></td>
          <td width="4">
		  
		
		  
		  
		  </td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>
