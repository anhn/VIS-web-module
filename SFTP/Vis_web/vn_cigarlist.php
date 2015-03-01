<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/menu.php");
if ($_GET[id]=="" || $_GET[pcid]==0) {$id=1;} 
else {
$id=$_GET[id];}

$SQL = "SELECT * FROM Menu WHERE CategoryID=$_GET[id]";
$query = mysql_query($SQL);
$row =  mysql_fetch_array($query);
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
        <table width="98%" border="0">
          <tr> 
            <td width="18%" rowspan="3" valign="top" bgcolor="#dcdcdc" > 
			<table>
			<tr>
			<td>
			<div align="left"> 
                <? require_once("./vn_cigar.php"); ?>
              </div>
			</td>
			</tr>
			<tr>
			<td>&nbsp;
			
			</td>
			</tr>
			
			<tr>
			<td>
			<div align="left"> 
                &nbsp;
              </div>
			</td>
			</tr>
			<tr>
			<td>
			<div align="left">
			<? # require_once("./email.php"); ?>
			 </div>
			</td>
			</tr>
			</table>
			
			  
			  </td>
            <td width="3%"></td>
            <td width="73%">&nbsp;</td>
            <td width="2%">&nbsp;</td>
          </tr>
          <tr> 
            <td height="194">&nbsp;</td>
            <td> 
             <? echo $row[Photo];?>
            </td>
            <td>&nbsp;</td>
            <td width="4%">&nbsp;</td>
          </tr>
          <tr> 
            <td height="212">&nbsp;</td>
            <td>
			
			
<?
include_once("./dblink.php");
?>
<table>
<tr>
<?
$SQL3 = "SELECT * FROM Product Where CigarList = 'T' AND FamilyID = '8' ORDER BY CreateDate DESC Limit 0,6";
$rs3 = @mysql_query($SQL3);
$number=0;
while($row3 = @mysql_fetch_array($rs3))
{
$number++;
if(!($number % 3))
		$newline="</tr><tr>";
	else
		$newline="";

?>
<td>
<?
$newproduct = '

<table width="180" height="154" border="0">
<tr>
  <td width="176" height="17" background="./hot_buy.gif"><div align="center"><font color="#FFFFFF"><strong>'.$row3["VnHeader"].'</strong></font></div></td>
  </tr>
  <tr> 
   <td height="95"><div align="center">'.$row3["sPhoto"].'</div></td>
  </tr>
  <tr> 
    <td height="26"><div align="center">'.$row3["EngSpec"].'</a></div></td>
  </tr>
  <tr> 
    <td height="26"><div align="center"><a href=vn_productdetail.php?id='.$row3["ProdID"].'&type=cigar_casa><font color="#660000">More information...</font></a></div></td>
  </tr>
</table>';

echo $newproduct;
?>
</td>
<? echo $newline;}?>
</tr>
</table>
   
  
			</td>
            <td>&nbsp;</td>
          </tr>
        </table>
</body>
</html>
