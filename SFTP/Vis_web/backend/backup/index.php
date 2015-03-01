<?
session_start();

if ($_SESSION[logInfo][success]==1) {    
	
	$username=$_SESSION[logInfo][username];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];	
} else {
	//header("location: index.php");
   echo "You do not have permission to access this menu";	
	exit;	
}

?>
<HTML>
<HEAD>
<TITLE>MySQL PHP Helper :: Main</TITLE>
<!--
<STYLE type="text/css">
BODY {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10pt;
}

.textbox {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 8pt;
	background-color: #BDD7F7;
	border: 1px solid #000000;
	color: #000000;
}
</STYLE>
-->
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />

</HEAD>
<? 
/*
session_start();
if ($_SESSION[logInfo][success]==1 && $_SESSION[logInfo][group]=='admin')
{	$username=$_SESSION[logInfo][username];
	$group=$_SESSION[logInfo][group];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];
*/
?>
<?
$script 	= "index.php";
$directory 	= $_SERVER['PHP_SELF'];
$script_base = "$base_url$directory";
$base_path = $_SERVER['PATH_TRANSLATED'];
$url_base = ereg_replace("$script", '', "$_SERVER[PATH_TRANSLATED]");
?>
<BODY BGCOLOR="#F4F4F4">
<CENTER>
  <!--
<TABLE WIDTH="80%" align="center" bgcolor="#8BA5C5">
  <TR>
    <TD valign="top" bgcolor="#BDD7F7"><h3> <font color="#6699CC">My</font><font color="#FFCC00">SQL</font> 
        <font color="#6699CC">PHP Backup :: Help</font></h3></tr>
  <TR> 
    <TD valign="top">
      <li>
        <div align="left"><font color="#66FFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">MySQL 
          PHP Backup has been tested on Linux 2.4.18 running PHP 4.1.2+ and MySQL 
          3.23.47+. Also tested on Windows. USE AT YOUR OWN RISK. <br>
          If problems with Windows change backup.php/restore.php according to 
          instructions! <br>
          For zipped download PHP must be compiled with GZIP.<br>
          </font></div>
      </li>
      <li> 
        <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <B>Step One:</B> Create a sub-directory in your public directory for 
          the MySQL PHP Backup files. Make sure that you can run PHP files from 
          this sub-directory. You must place the index.php, backup.php, restore.php, 
          and delete.php files in the sub-directory that you created. Also, permission 
          for this sub-directory must be 777 and permission for the above listed 
          PHP files must be 644 in order for this program to process your requests, 
          along with the ability to write files to your account. Calling the index.php 
          from your browser will run this program. <BR>
          <BR>
          </font></div>
      </li></tr>
</table><br>
  -->   
  <table>
  <tr>
  <td height="25"></td>
  </tr>
  </table>     
<form name="dobackup" method="post" action="main.php">

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="490" align="left" valign="top"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
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
      <table width="100%" height="32" border="0" cellpadding="1" cellspacing="1"
        <tr>
          <td width="8%"></td>
          <td width="88%" align="left" valign="top">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Find All Tables </font></td>
              </tr>
                <tr> 
                  <td width="100" align="left" class="general-search">Your database host: 
                  </td>
                <td colspan="4" align="left" class="general-body">
				  <input name="dbhost" type="text" class="textbox" value="localhost" size="37" maxlength="100" />
                </td>
              </tr>

              <tr>
			   <td width="100" align="left" class="general-search">Database username: </td>
			  <td><INPUT NAME="dbuser" TYPE="text" class="textbox" VALUE="root" SIZE="37" MAXLENGTH="100" /> 
              </tr>
			  <tr>
			      <td width="100" align="left" class="general-search">Database password
                    :</td>
			  <td><INPUT NAME="dbpass" TYPE="password" class="textbox" VALUE="" SIZE="37" MAXLENGTH="100" />  
           </td>               
              </tr>
			<tr>
			      <td width="100" align="left" class="general-search">Database name
                    : </td>
			  <td><INPUT NAME="dbname" TYPE="text" class="textbox" VALUE="ftVine" SIZE="37" MAXLENGTH="100" />  
           </td>               
              </tr>
			<tr>
			      <td width="100" align="left" class="general-search">Full path 
        to this script
                    :</td>
			  <td><INPUT NAME="path" TYPE="text" class="textbox" VALUE="E:\xampp\htdocs\xampp\Vis_web3152007\backend\backup\" SIZE="37" MAXLENGTH="100">  
           </td>               
              </tr>
			    <TR> 
      <TD ></TD>
      <TD ><INPUT NAME="send2" TYPE="submit" class="general-body"  VALUE="Find"></TD>
    </TR>
    <tr bgcolor="#BDD7F7"> 
      <td valign="top" colspan=2><font color="#9999CC" face="Arial, Helvetica, sans-serif" style="font-size:6Pt">
        <div align="right">MySql Php Backup Version 2.1 &copy; 2003-2004 by <a href="http://www.absoft-my.com" target="_blank">AB 
          Webservices</a></div>
        </font> </td>
    </tr>

            </table>
          </td>
          <td width="4"></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
 <?
 /*
         }
else {
	echo 'Sorry ! error permission .';
	header("location: ./error.php");	
}
*/
?> 
