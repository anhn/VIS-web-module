<?php
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/menu.php");
include_once("./backend/functions/outlet.php");

$SQL_r = "SELECT * FROM advertise where CategoryID='1'";
$query_r = mysql_query($SQL_r) or die("error");
$row_r =  mysql_fetch_array($query_r);
$SQL_l = "SELECT * FROM advertise where CategoryID='2'";
$query_l = mysql_query($SQL_l);
$row_l =  mysql_fetch_array($query_l);
$SQL_c = "SELECT * FROM menu WHERE PCID=0 and ShowInIndex='T' ORDER BY Position ASC";
	$result_c = mysql_query($SQL_c);
	$recordCount = mysql_num_rows($result_c);
// print_r(MenuOutlets(1));
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><HTML>
<HEAD id=Head>
<TITLE>Vine Wine Boutique Bar & Café</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">

</HEAD>
<script language="javascript1.2" src="fxmenu.js"></script>
<script language="javascript1.2">
var addpath="";
if(OP5)      dt.write("<sc"+"ript language=javascript1.2 src=fxopera.js><\/sc"+"ript>");
else if(NN4) dt.write("<sc"+"ript language=javascript1.2 src=fxnetscape.js><\/sc"+"ript>");
else         dt.write("<sc"+"ript language=javascript1.2 src=fxdom.js><\/sc"+"ript>");
</script>
<?
$javascript_menu_start= '
					<script language="javascript1.2">
					ordernumber="";
					emptyimage="transparent.gif";
					showdelay=175;
					hidedelay=800;

					with(itemStyle=new fxstyle()){
width=390;
height=50;
color="#7b2612";
coloron="#000000";
bgcolor="#dcdcdc";
//bgcolor="#e4e4e4";
bgcoloron="#D2D2D2";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=3;
paddingleft=5;
arrow="arrowblack.gif";
arrowon="arrowwhite.gif";
//arrowright=20;
//arrowtop=1;
//colordown="#FF0000";
}
		
		
	with(menuStyle=new fxmenustyle()){
filterover="Alpha(opacity=90)";
//menubgcolor="#E8E8FF";
menuborderwidth=0;
menubordercolor="#3366CC";
separatorsize=0;
separatorcolor="#f4f4f4";
highlightpath=true;
wiseposition=true;
colorvisited="#a12e2e";
}';

function print_outlet($arr,$oid,$firstlevel = false) {
	$link = '';
	if ($firstlevel == true) {
		$link = 'product.php';
	} else {
		$link = 'categorydetail.php';
	}
	$joitem = '';
	foreach ($arr as $key=>$value) {
		//print_outlet($value);
		if ($key != 'Name') {
			$hg = (round(strlen($row['Name'])/50))*20+20;
			if (count($value) == 1) {
				$joitem .= 'fx("text='.$value['Name'].' ;url='.$link.'?cid='.$key.';target=iframe;width=175;height='.$hg.'");';
			} else {
				$joitem .= 'fx("text='.$value['Name'].' ;show=100'.$key.';url='.$link.'?cid='.$key.';target=iframe;width=175;height='.$hg.'");';
				print_outlet($value, '100'.$key);
			}
		}
	}
	$jmenu = 'with(new fxmenu("'.$oid.'")){
	style=itemStyle;
	menustyle=menuStyle;
	visible=false;
	position="relative";
	top=0;
	left=0;
	width=175;
	height=20;
	'.$joitem.'
	}
	';
	echo $jmenu;
}

function print_menu($mid, $line = 0, $perline = 0) {
	if ($perline == 0) $perline = 4;
	$start = ($line) * $perline;
	$sql = "SELECT * FROM Menu WHERE PCID=$mid AND ActiveStatus='T' AND ShowInIndex='T' LIMIT $start, $perline";
	//echo $sql;
	$result = mysql_query($sql);
	$javascript_menu_item = '';
	while ($row = mysql_fetch_array($result)) {
		$hg = (round(strlen($row['EngName'])/(($mid==0)?(40):(55))))*20+20;
		if ($row["OutletID"] > 0) {
			// Outlet
			$a = MenuOutlets($row["OutletID"]);
			$javascript_menu_item .= 'fx("text='.$row['EngName'].' ;show='.$row['CategoryID'].';url=menudetail.php?id='.$row['CategoryID'].';'.(($mid==0)?('fontweight=bold;'):('')).'target=iframe;width=175;height='.$hg.'");';
			print_outlet($a,$row['CategoryID'],true);
		} else {
			// Menu
			if($row['Queue']=='0' && $row['Queue']!='1') {
				$javascript_menu_item .= 'fx("text='.$row['EngName'].' ;url=contact_.php?id='.$row['CategoryID'].';'.(($mid==0)?('fontweight=bold;'):('')).'target=iframe;width=175;height='.$hg.'");';
			}
			else
			{
				$javascript_menu_item .= 'fx("text='.$row['EngName'].' ;show='.$row['CategoryID'].';url=menudetail.php?id='.$row['CategoryID'].';'.(($mid==0)?('fontweight=bold;'):('')).'target=iframe;width=175;height='.$hg.'");';
				print_menu($row["CategoryID"]);
			}
		}
	}
	if ($mid == 0) {
		$javascript_menu .= '
		with(new fxmenu("Main Menu'.(($line==0)?'':' '.$line).'")){
		style=itemStyle;
		menustyle=menuStyle;
		visible=true;
		position="relative";
		top=160;
		left=70;
		width=175;
		height=20;
		orientation="horizontal";
		'.$javascript_menu_item.'
		}
		';
	} else {
		$javascript_menu.= 'with(new fxmenu("'.$mid.'")){
		style=itemStyle;
		menustyle=menuStyle;
		visible=false;
		position="relative";
		top=0;
		left=0;
		width=175;
		height=20;
		'.$javascript_menu_item.'
		}
		';
	}
	echo $javascript_menu;	
}
					
echo $javascript_menu_start;
$perline = 4;
for ($i = 0; $i < ($recordCount/$perline); ++$i) {
	print_menu(0,$i,$perline);
}
$javascript_menu_end='
buildMenus();
</script>';

echo $javascript_menu_end;


?>


<STYLE id=StylePlaceholder></STYLE>
<link href="images/default.css" rel="stylesheet" type="text/css">
<link href="images/portal.css" rel="stylesheet" type="text/css">
</style><BODY id=Body bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0">
<TABLE align=center>
  <TR><!--
<td width="3" bgcolor="#DCDCDC">
</td>
-->
    <TD>
      <TABLE id=table1 cellSpacing=0 cellPadding=0 width="71%" align=center border=0>
        <TR>
          <TD width="325"><IMG height=86 src="images/01.jpg" width=325 border=0></TD>
          <TD width="332"><IMG height=86 src="images/03.jpg" width=332 border=0></TD>
          <TD width="118"><IMG height=86 src="images/05.jpg" width=118 border=0></TD></TR>
        <TR>
          <TD width="325"><IMG height=81 src="images/02.jpg" 
            width=325 border=0></TD>
          <TD width="332"><IMG height=81 src="images/04.jpg" 
            width=332 border=0></TD>
          <TD width="118" rowSpan=2><IMG height=81 
            src="images/06.jpg" width=118 border=0></TD></TR>
        <TR>
          
		  <TD bgColor=#dcdcdc colSpan=3 height=32>
		  <table width="771">
		  <tr>
		  <td width="9">&nbsp;
		  
		  </td>
		  <td width="671">
		  <table width="712">
<tr>
<td>
<table>
<tr>
<td>
<script language="javascript1.2">fixMenu("Main Menu")</script>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table>
<tr>
<td>
<script language="javascript1.2">fixMenu("Main Menu 1")</script>
</td>

</tr>
</table>

</td>

<tr>
<td>
<table><tr><td><script language="javascript1.2">fixMenu("Main Menu 2")</script></td></tr></table>
</td></tr>
</table>

		  </td> 
		  <td width="28"><strong><a href=vn_index.php>Vn</a></strong></td>
		  </tr>
		  </table>
		  </TD>
        </TR>
        <TR>
          <TD colSpan=3>
            <TABLE id=table3 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TR>
                <TD bgColor=#dcdcdc>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="search.php" target="iframe" style="font-weight:bold;">Advance search</a>
                </TD>
                </TR>
              <TR>
                <TD bgColor=#dcdcdc>
				<TABLE id=table6 cellSpacing=0 cellPadding=0 width="100%" border=0>
                  			<TR>
                  				<TD vAlign=top>
                  					<TABLE cellSpacing=5 cellPadding=0 width="100%" summary="Table for decorate left menu" border=0>
                  							<TR>
                  								<TD class=ContentPane id=_ctl0_ContentPane vAlign=top align=left width="100%" colSpan=3>
                  									<TABLE cellSpacing=0 cellPadding=2 width="100%" summary="Module Design Table">
                  											<TR>
                  												<TD id=_ctl0__ctl1_ContentPane align=left><!-- Start_Module_616 -->
                  													<DIV id=_ctl0__ctl1_ModuleContent>
                  														<TABLE cellSpacing=3 cellPadding=0 width="100%" 
                                summary="Design Table" border=0>
                  																<TR vAlign=top>
                  																	<TD class=Normal 
id=_ctl0__ctl1__ctl0_HtmlHolder><iframe src="menuhome.php?id=0" name="iframe" width="100%" marginwidth="0" height="700px" marginheight="0" align="middle" scrolling="auto" frameborder="0" id="iframe"></iframe></TD>
                  																</TR></TABLE><!-- End_Module_616 --></DIV></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
                  		</TABLE></TD>
                </TR></TABLE></TD></TR>
        <TR>
          <TD bgColor=#dcdcdc colSpan=3>
            <TABLE id=table17 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TR>
                <TD>
                  <TABLE id=table18 cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TR>
                      <TD colSpan=5>
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" summary="Table for decorate left menu" border=0>
                          <TR>
                            <TD class=RightPane id=_ctl0_RightPane vAlign=top align=left width="100%" colSpan=3>
                              <TABLE cellSpacing=0 cellPadding=2 width="100%" summary="Module Design Table">
                                <TR>
                                <TD class=Normal 
	id=_ctl0__ctl0__ctl0_HtmlHolder>
									<TABLE id=table17 cellSpacing=0 cellPadding=0 
									width="100%" border=0>
									<TBODY>
									<TR>
									<TD>
									<TABLE id=table18 cellSpacing=0 cellPadding=0 
									width="100%" border=0>
									<TBODY>
								<!--
									<TR>
									<TD align=middle>&nbsp;</TD>
									<TD width="1%">&nbsp;</TD></TR>							
								
									<TR>
									<TD colSpan=2>&nbsp;</TD></TR>
							    -->
									<TR>
									<TD colSpan=2>
									<TABLE id=table19 cellSpacing=0 cellPadding=0 
									width="100%" border=0>
									<TBODY>
									<TR>
									<TD width=27>&nbsp;</TD>
									<TD width=260><FONT face=Tahoma size=1><B>Vine 
									Wine Boutique Bar &amp; Café </B><BR>&nbsp;1A 
									Xuan Dieu, Tay Ho, Hanoi <BR>&nbsp;Tel (+84-4) 
									719 8000 Fax: (+84-4) 719 8001</FONT></TD>
									<TD width=240><FONT face=Tahoma size=1><B>Vine 
									Annex </B><BR>1st floor, 45 Au Co, Tay Ho, Hanoi 
									<BR>Tel: (+84-4) 719 8321 - Fax: (+84-4) 719 
									8465</FONT></TD>
									<TD><FONT face=Tahoma size=1><B>Grape Vine Image 
									Consulting </B><BR>3rd floor, 45 Au Co, Tay Ho, 
									Hanoi <BR>Tel: (+84-4) 719 8321, Fax: (+84-4) 
									719 8465 </FONT></TD>
									<TD 
									width=24>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
									<TR>
									<TD 
									colSpan=2>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
								
                                </TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD><!-- <td width="3" bgcolor="#DCDCDC">
</td>
--></TR></TABLE>
<DIV id=divAdLeft style="LEFT: -110px; WIDTH: 110px; POSITION: absolute; TOP: 71px" align=right>
	

<? echo $row_r["Photo"]?>

<!--
<IMG height=433 alt="" src=".<? //echo $row_r["Queue"]?>" width=105 border=0>
-->
<BR>
	</DIV>
	<DIV id=divAdRight style="LEFT: -110px; WIDTH: 115px; POSITION: absolute; TOP: 71px">
	
	<? echo $row_l["Photo"]?>
	<!--
	<IMG height=433 alt="" src=".<? //echo $row_l["Photo"]?>" width=105 border=0>
	-->
	</DIV>
	<SCRIPT language=JavaScript1.2 src=adv.js></SCRIPT>
</BODY></HTML>