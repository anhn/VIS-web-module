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
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />
</HEAD>
<?


$base_url    = "http://".$_SERVER['SERVER_NAME'];
$directory   = $_SERVER['PHP_SELF'];
$script_base = "$base_url$directory";
$base_path   = $_SERVER['PATH_TRANSLATED'];
$root_path_www = $_SERVER['DOCUMENT_ROOT'];
$remove_end  = strrchr($root_path_www,"/");
//$root_path   = ereg_replace("$remove_end", '', $root_path_www);
$url_base    = "$base_url$directory";
$url_base    = ereg_replace("main.php", '', "$_SERVER[PATH_TRANSLATED]");
//$path        = ereg_replace("main.php",'',$url_base);
extract($_POST);

if ($send2 == "Find") {
  $conn = @mysql_connect($dbhost,$dbuser,$dbpass); 
  if ($conn==FALSE) {
      die("<BR>ERROR: cannot connect to database<BR>" );
  }

  $tables = mysql_list_tables($dbname,$conn);
  $num_tables = @mysql_num_rows($tables);
  if ($num_tables==0) {
     die("ERROR: Database contains no tables");
  }   

  $fp3 = fopen ($path."dbinfo.php","wb");
  fwrite ($fp3,"<?\n");
  fwrite ($fp3,"\$dbhost=\"$dbhost\";\n");
  fwrite ($fp3,"\$dbuser=\"$dbuser\";\n");
  fwrite ($fp3,"\$dbpass=\"$dbpass\";\n");
  fwrite ($fp3,"\$dbname=\"$dbname\";\n");
  fwrite ($fp3,"\$path=\"$path\";\n");
  $i = 0;
  while($i < $num_tables) { 
      $tbl = mysql_tablename($tables, $i);

      fwrite ($fp3,"\$table$i=\"$tbl\";\n");
      $i++;
  }
  $i--;
  fwrite ($fp3,"\$numtables=\"$i\";\n");	
  fwrite ($fp3,"?>\n");
  fclose ($fp3);
  @chmod($path."dbinfo.php", 0644);
  include ("dbinfo.php");
} else {
  if (!file_exists("dbinfo.php")) {
    echo "<meta http-equiv=Refresh  content='0;URL=index.php'>";
    die("Start from index.php");
  } 
  include "dbinfo.php";
  $conn = @mysql_connect($dbhost,$dbuser,$dbpass); 
  if ($conn==FALSE) {
      die("<BR>ERROR: cannot connect to database<BR>" );
  }
}   
$c=0;
$tables="";
while ($c < $numtables){
   $var="table$c";
   $tables .= $$var."; ";
   $c++;
}
$var="table".$c;
$tables .= $$var;
?>
<BODY BGCOLOR="#F4F4F4">
<CENTER>
 
 <!--
  <TABLE WIDTH="80%" bgcolor="#8BA5C5">
    <TR>
      <TD bgcolor="#BDD7F7"><h3><font color="#6699CC">My</font><font color="#FFCC00">SQL</font> 
        <font color="#6699CC">PHP Backup :: Help</font></h3></TD>
    </TR>
    <TR> 
      <TD valign="top"> 
        <ul>
          <li> 
            <div align="left"><font color="#66FFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">MySQL 
              PHP Backup has been tested on Linux 2.4.18 running PHP 4.1.2+ and 
              MySQL 3.23.47+. USE AT YOUR OWN RISK. <br>
              For zipped download PHP must be compiled with GZIP.<br>
              </font></div>
          </li>
          <li> 
            <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <B>Step Two:</B> You must do a backup <font color="#FF0000">before</font> 
              any other request below. Default values have been placed in the 
              below form, but you need to ensure their accuracy for this script 
              to process your requests. All tables in the database have been entered 
              in the table listing</font></div>
          </li>
          <li> 
            <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              </font><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">This 
              script will generate a backup directory that will contain the backup 
              file and a file containing the information you submit using the 
              below form. </font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><br>
              <font color="#FFFFFF">Creating a backup will overwrite any other 
              backup made from this script. </font></font></div>
          </li>
          <li> 
            <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Doing 
              a restore will overwrite your database tables with the backup file 
              data generated from this script. The database password must be entered 
              as safety measure.</font></div>
          </li>
          <li> 
            <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Doing 
              a delete will delete from your backup the files that this program 
              generates.</font> </div>
          </li>
          <li> 
            <div align="left"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">In 
              case the file backup.sql is no longer on your server you will have 
              to upload backup.sql or backup.gz to your server after recreating 
              the /dump dir (see create backup) in order to restore.</font></div>
          </li>
          <li><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">After 
            downloading the backup, delete it from the server.</font></li>
          <li><font color="#990000" size="1" face="Verdana, Arial, Helvetica, sans-serif">Php 
            might time out if max_execution_time is to short on very large tables 
            (several Mb).</font></li>
            
          <li><?
          if (get_extension_funcs('zlib'))  {
             echo "<font color='green'>Zlib has been found on the server." ;
          } else {
             echo "<font color='red'>Zlib is NOT installed on the server !";
          } ?>
          </font></li>      
        </ul>
        <font color="#66FFFF" face="Arial, Helvetica, sans-serif" style="font-size:6Pt">MySql 
        Php Backup Version 2.1 &copy; 2004 by <a href="http://www.absoft-my.com" target="_blank">AB 
        Webservices</a></font> </TD>
    </TR>
  </TABLE><br>
-->
<table>
<tr>
<td height="25"></td>
</tr>
</table>


 
<FORM NAME="dobackup" METHOD="post" ACTION="backup.php"> 
<table width="80%" border="0" cellspacing=0 cellpadding=0 bgcolor="#8BA5C5" align="center">
  <tr align=center>
    <td colspan=5 >
    <TABLE WIDTH="500" BORDER="0" CELLPADDING="5" CELLSPACING="1" bgcolor="#8BA5C5">
      <TR>
        <TD colspan="2" NOWRAP><div align="center"><strong>CREATE A BACKUP</strong></div></TD>
      </TR>
      <TR> 
        <TD NOWRAP WIDTH="200"> <FONT SIZE="2" FACE="verdana,sans-serif">Your 
          database host:</FONT></TD>
        <TD NOWRAP WIDTH="300"> <INPUT NAME="dbhost" TYPE="text" class="textbox" VALUE="<?=$dbhost; ?>" SIZE="37" MAXLENGTH="100"> 
        </TD>
      </TR>
      <TR> 
        <TD NOWRAP WIDTH="200"> <FONT SIZE="2" FACE="verdana,sans-serif">Database 
          user name:</FONT></TD>
        <TD NOWRAP WIDTH="300"> <INPUT NAME="dbuser" TYPE="text" class="textbox" VALUE="<?=$dbuser; ?>" SIZE="37" MAXLENGTH="100"> 
        </TD>
      </TR>
      <TR> 
        <TD NOWRAP WIDTH="200"> <FONT SIZE="2" FACE="verdana,sans-serif">Database 
          password:</FONT></TD>
        <TD NOWRAP WIDTH="300"> <INPUT NAME="dbpass" TYPE="password" class="textbox" VALUE="<?=$dbpass; ?>" SIZE="37" MAXLENGTH="100"> 
        </TD>
      </TR>
      <TR> 
        <TD NOWRAP WIDTH="200"> <FONT SIZE="2" FACE="verdana,sans-serif">Database 
          name:</FONT></TD>
        <TD NOWRAP WIDTH="300"> <INPUT NAME="dbname" TYPE="text" class="textbox" VALUE="<?=$dbname; ?>" SIZE="37" MAXLENGTH="100"> 
        </TD>
      </TR>
      <TR> 
        <TD NOWRAP WIDTH="200"> <FONT SIZE="2" FACE="verdana,sans-serif">Full 
          path to this script:</FONT><br><br></TD>
        <TD NOWRAP WIDTH="300"> <INPUT NAME="path" TYPE="text" class="textbox" VALUE="E:\xampp\htdocs\xampp\Vis_web3152007\backend\backup\" SIZE="37" MAXLENGTH="100"><br><br> 
        </TD>
      </TR>

    </table>
    </td>
  </tr>  
  <tr align=center> 
    <td width="1%"></td>
    <td ><FONT SIZE="1" FACE="verdana,sans-serif"><b>TABLES</b></font></td>
    <td width="10%"><FONT SIZE="1" FACE="verdana,sans-serif"><b>ROWS</b></font></td>
    <td width="20%"><FONT SIZE="1" FACE="verdana,sans-serif"><b>CREATED ON</b></font></td>
    <td width="15%"><FONT SIZE="1" FACE="verdana,sans-serif"><b>DATA SIZE kB</b></font></td>
    <td width="17%"><FONT SIZE="1" FACE="verdana,sans-serif"><b>INDEX SIZE kB</b></font></td>
  </tr>
 <? 


       $stats  = mysql_query ("SHOW TABLE STATUS FROM $dbname Like '%' ") or die("stupid error");
       $num_tables = mysql_num_rows($stats);
       if ($num_tables==0) {
         die("ERROR: Database contains no tables");
       }   

        $bgcolor='#96B9DC';
        $i=0;
        while ($rows=mysql_fetch_array($stats) ) {
           print "<tr><td bgcolor=".$bgcolor."><FONT SIZE='1' FACE='verdana,sans-serif'>".($i+1)."</font></td>";
           print "<td bgcolor=".$bgcolor."><FONT SIZE='1' FACE='verdana,sans-serif'><input type='checkbox' id='tables$i' name='tables[$i]' value='".$rows["Name"]."' >".$rows["Name"]."</font></td>";
           print '<td align="center" bgcolor='.$bgcolor.'><FONT SIZE="1" FACE="verdana,sans-serif"> '.$rows['Rows'].'</font></td>';
           print '<td bgcolor='.$bgcolor.'><FONT SIZE="1" FACE="verdana,sans-serif">'.$rows['Create_time'].'</font></td>';
           print '<td align="center" bgcolor='.$bgcolor.'><FONT SIZE="1" FACE="verdana,sans-serif">'.number_format($rows['Data_length']/1024,1).'</font></td>';
           print '<td align="center" bgcolor='.$bgcolor.'><FONT SIZE="1" FACE="verdana,sans-serif">'.number_format($rows['Index_length']/1024,1).'</font></td></tr>';
  	   $i++;
  	   if ($bgcolor=='#96B9DC') {
  	      $bgcolor='#B1CBE4';
  	   } else {
  	      $bgcolor='#96B9DC';
  	   }
  	}	
?>
<tr><td colspan=5<br><br>
<input type='checkbox' name='structonly' value='Yes'><FONT SIZE='1' FACE='verdana,sans-serif'> Backup Structure only </font><br>
<?
echo "
<input type='radio' name='chg' onclick='for(i=0;i<$i;i++){document.getElementById(\"tables\"+i).checked=true;}'><FONT SIZE='1' FACE='verdana,sans-serif'> Check All  &nbsp;&nbsp;</font>
<input type='radio' name='chg' onclick='for(i=0;i<$i;i++){document.getElementById(\"tables\"+i).checked=false;}'><FONT SIZE='1' FACE='verdana,sans-serif'> Uncheck All &nbsp;&nbsp;</font>
<font color='#990000' size='1'><strong>Backup File Name: backup.sql</strong></font>
<p align=right></td><td align='center' ><br>";
?>
<input type='submit' name='send2' value ='Backup' class='textbox'>
</td></tr>
</table>
</form>


<FORM NAME="dorestore" METHOD="post" ACTION="restore.php">
    <TABLE WIDTH="569" HEIGHT="93" BORDER="0" CELLPADDING="5" CELLSPACING="1" bgcolor="#8BA5C5">
     <tr><td width="557" height="54"><div align="center"> <B>RESTORE A BACKUP</B><br>
            <font color="#FFFFFF" size="1">Backup must be on server</font></div></td></tr> 
     <tr>
        <td><CENTER>
            <font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Database Password:</font> 
            <input name="password" type="password" id="password" size="15" maxlength="15" class="textbox" value=<?=$dbpass; ?>>
            &nbsp; 
            <INPUT NAME="send" TYPE="submit" class="textbox" VALUE="Restore"></CENTER>
		</td>
	  </tr>	
    </table>
</FORM>

<FORM NAME="dodelete" METHOD="post" ACTION="delete.php">
<CENTER>
      <TABLE WIDTH="570" HEIGHT="75" BORDER="0" CELLPADDING="5" CELLSPACING="1" bgcolor="#8BA5C5">
        <tr>
          <td width="569"><div align="center"><B>DELETE BACKUP</B></div></td>
        </tr>
        <tr> 
          <td><CENTER>
              <INPUT NAME="send4" TYPE="submit" class="textbox" VALUE="Delete">
            </CENTER></td>
        </tr>
      </table>
      
    </CENTER>
  </FORM>
  <!--
<FORM NAME="dodownload" METHOD="post" ACTION="download.php">
<CENTER>
      <TABLE WIDTH="500" HEIGHT="75" BORDER="0" CELLPADDING="5" CELLSPACING="1" bgcolor="#8BA5C5">
        <tr> 
          <td><div align="center"><B>DOWNLOAD BACKUP</B></div></td>
        </tr>
        <tr> 
          <td valign="top"> <div align="right"> 
              <div align="center"></div>
              <table width="365" align="center">
                <tr> 
                  <td align="center"><font size="1"> 
                      <input name="zipit" type="radio" class="textbox" value="1" onClick="if (this.value=1) { document.dodownload.zipname.disabled=true;}">
                      Download as Sql
                      </font></td>
                </tr>
                <tr> 
                  <td align="center"><font size="1"> &nbsp; 
                    <input name="zipit" type="radio" class="textbox" value="2" checked onclick="if (this.value=1){ document.dodownload.zipname.disabled=false;}">
                    Download as Gzip </font></td>
                </tr>
                <tr> 
                  <td align="center"><font size="1" face="Arial, Helvetica, sans-serif">File 
                      name for zip: 
                      <input name="zipname" type="text" class="textbox" id="zipname" size="20" maxlength="25" value="<?=date("Y-M-d");?>" >
                      no extension</font></td>
                </tr>
              </table>
            </div></td>
        </tr>
        <tr> 
          <td><CENTER>
              <INPUT NAME="send4" TYPE="submit" class="textbox" VALUE="Go">
            </CENTER></td>
        </tr>
      </table>
      
    </CENTER>
  </FORM>
-->

</CENTER>
</BODY>
</HTML>

