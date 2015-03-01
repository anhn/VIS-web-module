
<?
include_once("./dblink.php");
?>
<table>
<tr>
<?
$SQL3 = "SELECT * FROM Product ORDER BY CreateDate DESC Limit 0,6";
$rs3 = mysql_query($SQL3);
$number=0;
while($row3 = mysql_fetch_array($rs3))
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
  <td width="176" height="17" background="./hot_buy.gif"><div align="center"><font color="#FFFFFF"><strong>'.$row3["EngHeader"].'</strong></font></div></td>
  </tr>
  <tr> 
   <td height="95"><div align="center">'.$row3["sPhoto"].'</div></td>
  </tr>
  <tr> 
    <td height="26"><div align="justify">'.$row3["EngSDesc"].'</a></div></td>
  </tr>
  <tr> 
    <td height="26"><div align="center"><a href=productdetail.php?id='.$row3["ProdID"].'><font color="#660000">More information...</font></a></div></td>
  </tr>
</table>';

echo $newproduct;
?>
</td>
<? echo $newline;}?>
</tr>
</table>
   
  

