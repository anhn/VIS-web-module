<?php

include_once("./functions/dblink.php");
include_once("./functions/operator.php");

session_start();

if ($_SESSION[logInfo][success]==1 && $_SESSION[logInfo][group]=='admin') {    
	
	switch($_POST["submit"])  {
	  case "Save":
	      $success = InsertUserAccount($_POST["loginID"], $_POST["newpwd"], $_POST["userName"], $_POST["email"], $_POST["status"], $_POST["group"]);

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
  if( f.oldpwd.value.length == 0 )  {
    alert("Please input a password.");
    f.oldpwd.focus();
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
          <td width="88%" align="left" valign="top"><form action="./addoperator.php" method="post" name="frmoperator" enctype="multipart/form-data">
            <table width="65%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Add New Operator Record </font></td>
              </tr>

              <tr>
                <td align="left" class="general-search">Name: </td>
                <td colspan="3" align="left" class="general-body">
				  <input name="userName" type="text" id="userName" value="" size="70" maxlength="100" />
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" class="general-search">Login ID: </td>
                <td colspan="3" align="left" class="general-body">
				  <input name="loginID" type="text" id="loginID" value="" size="20" maxlength="20" />
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
				  <input name="email" type="text" id="usermail" value="" size="70" maxlength="100" />
                </td>
              </tr>
			  
			  <tr>
                <td align="left" valign="top" class="general-search">Group:</td>
                <td colspan="3" align="left" class="general-body">
				  <select name="group">
                      <option value="admin">Administrators</option>
                      <option value="oper">Operations</option>
                      <option value="user">Users</option>
                    </select>
                </td>
              </tr>
			  
              <tr>
                <td class="general-search">Active Status: </td>
                <td colspan="3" class="general-body">
				  <input name="status" type="radio" value="T" checked="checked" />
                  Active
                  <input name="status" type="radio" value="F" />
                  Inactive</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3"><input name="submit" type="submit" class="general-body" onclick="validateFields();return false" value="Save"/>
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
