<?php

session_start();
session_unset();
session_destroy(); 

$msg="";
if ($_POST[password]!='' && $_POST[username]!='') {
	include_once("./functions/dblink.php");
	include_once("./functions/operator.php");
	
	// return the result of the login information
	$logInfo=UserLogin($_POST[username], $_POST[password]);
	mysql_close($link);
		
	if ($logInfo[success]!=1) {
		$msg="Invalid Login ID or passowrd. Please try again.<br> Or This account is locked";
		
	}  else  {
	  session_register("logInfo");
	  $_SESSION[logInfo]=$logInfo;
	  header("location: ./welcome.php");
	  exit();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Motic</title>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />
</head>
<body onload="document.frmLogin.username.focus()">
<?php if ($_GET[msg]!='') { ?> 
<script language="javascript">alert("<?php echo $_GET[msg] ?>");parent.window.location="./index.php";</script> 
<?php } ?>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" id="pageContainer">
  <tr>
    <td align="center" valign="top"><table width="486" height="270" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="133" valign="top"><table width="100%" height="63" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="bottom">&nbsp;</td>
          </tr>
        </table>
          <table width="100%" height="207" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        <td width="353" valign="top"><table width="353" height="67" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="239" valign="top"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
					

				</td>
              </tr>
            </table>
              <table width="238" height="35" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="10" class="general-leftborder">&nbsp;</td>
                  <td width="228" align="left" class="general-title"><font color="#FF0000"><? echo $msg;?></font></td>
                </tr>
              </table></td>
            <td width="114">&nbsp;</td>
          </tr>
        </table>
          <table width="100%" height="203" border="0" cellpadding="0" cellspacing="0">
		  <form name="frmLogin" method="post" action="./login.php">
            <tr>
              <td valign="top" class="general-leftborder"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_news_title">LOGIN ID :</td>
                  </tr>
                </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_login">
                      <label>
                        <input name="username" type="text" size="20" />
                      </label>
                    </td>
                  </tr>
                </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_news_title">PASSWORD:</td>
                  </tr>
                </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_login"><label>
                      <input name="password" type="password" size="21" />
                      </label>
                    </td>
                  </tr>
                </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_login"><label>
                      <input type="submit" name="Submit" value="Submit" />
                      </label></td>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="97%" align="left" class="homepage_login"><a href="#"></a>
					
					
					
					</td>
                  </tr>
                </table></td>
            </tr>
           </form>			
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
