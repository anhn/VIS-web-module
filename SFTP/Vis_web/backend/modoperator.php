<?php

include_once("./functions/dblink.php");
include_once("./functions/operator.php");

session_start();

if ($_SESSION[logInfo][success]==1) {    
	if (isset($_GET["id"]))  {
	  $userID = $_GET["id"];
	  $result = SearchUserAccount($userID);
	  $row = mysql_fetch_array($result); 
	}
	
	switch($_POST["submit"])  {
	  case "Save":
	      if ($_POST["newpwd"] <> "")  {
	        $success = UpdateUserAccount($_POST["userID"], $_POST["loginID"], $_POST["newpwd"], $_POST["userName"], $_POST["email"], $_POST["group"], $_POST["status"]);
		  } else  {
	        $success = UpdateUserAccountwoPWD($_POST["userID"], $_POST["loginID"], $_POST["userName"], $_POST["email"], $_POST["group"], $_POST["status"]);
		  }
	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./operators.php?msg=$msg");	 
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
<link href="stylesheets/general.css" rel="stylesheet" type="text/css" />

<script language="javascript">
<!--
function validateFields()  {
  f = document.frmoperator;

  if( f.loginID.value.length == 0 )  {
    alert("Please input a loginID.");
    f.loginID.focus();
	return false;
  }
  if( f.oldpwd.value.length > 20 )  {
    alert("Your new password must be no greater than 20 characters.");
    f.oldpwd.focus();
    return false;  
  }  
  if( f.oldpwd.value != f.newpwd.value )  {
    alert("Your password entries did not match.");
    f.oldpwd.value="";
    f.newpwd.value="";
    f.oldpwd.focus();
    return false;
  }  

  f.submit();
  return true;
}

//-->
</script>



</head>


<body onLoad="frmoperator.userName.focus();">
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
          <td width="88%" align="left" valign="top"><form action="./modoperator.php" method="post" name="frmoperator" enctype="multipart/form-data">
            <table width="65%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Modify Operator Record </font></td>
              </tr>
              <tr>
                <td width="25%" align="left" class="general-search">Create Date: </td>
                <td align="left" class="general-body"><? echo $row[CreateDate]; ?></td>
                <td width="25%" align="left" class="general-search">Last Modify Date:</td>
                <td align="left" class="general-body"><? echo $row[ModifyDate]; ?></td>
              </tr>
              <tr>
                <td align="left" class="general-search">Name: </td>
                <td colspan="3" align="left" class="general-body">
				  <input name="userName" type="text" id="userName" value="<? echo $row[UserName]; ?>" size="70" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" class="general-search">Login ID: </td>
                <td colspan="3" align="left" class="general-body">
				  <input name="loginID" type="text" id="loginID" value="<? echo $row[LoginID]; ?>" size="20" maxlength="20" />
                </td>
              </tr>
              <tr>
                <td width="25%" align="left" class="general-search">Password: </td>
                <td align="left" class="general-body">
				  <input name="oldpwd" type="password" id="oldpwd" value="" size="20" maxlength="20" />				
				</td>
                <td width="25%" align="left" class="general-search">Confirm Password:</td>
                <td align="left" class="general-body">
				  <input name="newpwd" type="password" id="newpwd" value="" size="20" maxlength="20" />								
				</td>
              </tr>
              <tr>
                <td align="left" valign="top" class="general-search">Email:</td>
                <td colspan="3" align="left" class="general-body">
				  <input name="email" type="text" id="usermail" value="<? echo $row[Email]; ?>" size="70" maxlength="100" />
                </td>
              </tr>
			  
			  			  <tr>
                <td align="left" valign="top" class="general-search">Group:</td>
                <td colspan="3" align="left" class="general-body">
				  <select name="group">
                      <option value="admin" <? if ($row[AdminGroup]=='admin'){echo 'selected';}?>>Administrators</option>
                      <option value="oper" <? if ($row[AdminGroup]=='oper'){echo 'selected';}?>>Operations</option>
                      <option value="user" <? if ($row[AdminGroup]=='user'){echo 'selected';}?>>Users</option>
                    </select>
                </td>
              </tr>
			  
              <tr>
                <td class="general-search">Active Status: </td>
                <td colspan="3" class="general-body">
				  <input name="status" type="radio" value="T" <? if ($row[ActiveStatus]=='T'){echo " checked";} ?> />
                  Active
                  <input name="status" type="radio" value="F" <? if ($row[ActiveStatus]=='F'){echo " checked";} ?> />
                  Inactive</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
                    <input name="userID" type="hidden" value="<? echo $row[UserID]?>" />
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
