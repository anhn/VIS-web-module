<?php

include_once("./functions/dblink.php");


session_start();

if ($_SESSION[logInfo][success]==1) {    

	$username=$_SESSION[logInfo][username];
	$group=$_SESSION[logInfo][group];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];		
	

} else {
//	header("location: ./login.php");	
echo $logInfo[success];
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
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>


<script src="functions.js" type="text/javascript" language="javascript"></script>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />

</head>


<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" height="29" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    <table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td width="46%" align="left" valign="middle"><p class="homepage_login"><span class="homepage_news_title">Welcome</span> <? echo $username ?><br />
              <span class="homepage_news_title">Your Last Login on</span> <?php echo $lastlogindate; ?></p></td>
          <td width="46%" align="right" valign="top">&nbsp;</td>
          <td width="4"></td>
        </tr>
      </table>
      <table height="10" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="30"></td>
          <td width="557" align="left" valign="middle">  </td>
          <td width="190"></td>
        </tr>
      </table>
      <table width="100%" height="20" border="0" align="center" cellpadding="1"  cellspacing="1" >
        <tr>
          <td width="8%" align="left">&nbsp;</td>
            <td width="92%" align="left"><? if ($_GET[msg]!='') { echo "<font class='general-body'>".$_GET[msg]."</font><br>"; } ?></td>
        </tr>
      </table>
    </td>
  </tr>
</table>



</body>
</html>
