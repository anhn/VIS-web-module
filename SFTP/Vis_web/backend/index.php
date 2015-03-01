<?php

include_once("./functions/dblink.php");


//session_start();

if ($_SESSION[logInfo][success]==1) {    

	$username=$_SESSION[logInfo][username];
	$group=$_SESSION[logInfo][group];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];		
	

} else {
//	header("location: ./login.php");	
echo $logInfo[success];
}

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
<!--<script language="javascript1.2" src="horizontal.js"></script>-->
<?php
$menu_admin_start='<script>

ordernumber="";//Once you have licensed FX Menu, the order number will be sent to you by share-it!.

emptyimage="transparent.gif";// Transparent image in gif format.
showdelay=200;//Time delay before submenus are displayed. Unit is milliseconds.
hidedelay=800;//Time delay before submenus are hidden. Unit is milliseconds.

/*Start Style Declarations*/

with(itemStyle=new fxstyle()){
width=70;
height=20;
color="#7b2612";
coloron="#333333";
bgcolor="#e4e4e4";
bgcoloron="#dcdcdc";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=0;
paddingleft=5;
//arrow="arrowblack.gif";
//arrowon="arrowwhite.gif";
//arrowright=20;
//arrowtop=1;
}

with(menuStyle=new fxmenustyle()){
filterover="Alpha(opacity=90)";
menubgcolor="#E8E8FF";
menuborderwidth=0;
menubordercolor="#3366CC";
separatorsize=1;
separatorcolor="#ffffff";
highlightpath=true;
wiseposition=true;
}


/*Start Menu Declarations*/

with(new fxmenu("MainMenu")){
style=itemStyle;
menustyle=menuStyle;
visible=true;
position="relative";
top=160;
left=59;
width=70;
height=20;
orientation="horizontal";
//fx("text=Menu Control;url=viewmenu.php;target=iframe;fontweight=bold;width=110;");
fx("text=Menu Control;show=MenuControl;fontweight=bold;width=110;");
fx("text=Products;show=ProductsMenu;fontweight=bold;");
fx("text=Category;show=Category;fontweight=bold;");
fx("text=Account;show=AccountControl;fontweight=bold;");
fx("text=Customer;url=viewcustomer.php;fontweight=bold;target=iframe;");
fx("text=Advertise;show=AdvertiseControl;fontweight=bold;");
fx("text=Backup;url=backup/index.php;;fontweight=bold;target=iframe;");
fx("text=Logout;url=login.php;;fontweight=bold;target=iframe;");
}
';
echo $menu_admin_start;

$menu_product='with(new fxmenu("ProductsMenu")){
style=itemStyle;
menustyle=menuStyle;
width=150;
//fx("text=Add Category;url=addcategory.php;target=iframe;");
//fx("text=View Category;url=viewcategory.php;target=iframe;");
fx("text=Add Product Family;url=addproductfamily.php;target=iframe;");
fx("text=View Product Family;url=viewproductfamily.php;target=iframe;");
fx("text=Add Characteristic;url=addcharacteristic.php;target=iframe;");
fx("text=View Characteristic;url=viewcharacteristic.php;target=iframe;");
fx("text=Add Outlet;url=addoutlet.php;target=iframe;");
fx("text=View Outlet;url=viewoutlet.php;target=iframe;");
fx("text=Add Product;url=addproduct.php;target=iframe;");
fx("text=View Product;url=viewproduct.php;target=iframe;");
}';
echo $menu_product;

$menu_admin_end='
with(new fxmenu("Category")){
style=itemStyle;
menustyle=menuStyle;
width=150;
fx("text=Add Product Category;url=addproductcategory.php;target=iframe;");
fx("text=View Product Category;url=viewproductcategory.php;target=iframe;");
}

with(new fxmenu("MenuControl")){
style=itemStyle;
menustyle=menuStyle;
width=100;
fx("text=Add Menu;url=addmenu.php;target=iframe;");
fx("text=View Menu;url=viewmenu.php;target=iframe;");
}
with(new fxmenu("AdvertiseControl")){
style=itemStyle;
menustyle=menuStyle;
width=100;
//fx("text=Add Advertise;url=addadvertise.php;target=iframe;");
fx("text=View Advertise;url=viewadvertise.php;target=iframe;");
}
with(new fxmenu("AccountControl")){
style=itemStyle;
menustyle=menuStyle;
width=100;
fx("text=Add Account;url=addoperator.php;target=iframe;");
fx("text=View Account;url=operators.php;target=iframe;");
}

with(new fxmenu("Support")){
style=itemStyle;
menustyle=menuStyle;
width=150;
fx("text=E-mail;url=html/support.html;");
fx("text=Discussion Forum;url=forums/index.php;target=blank;");
}

with(new fxmenu("MenuSamples")){
style=itemStyle;
menustyle=menuStyle;
width=270;
overflow="scroll";
fx("text=Text Based Menu Samples;type=header;bgcolor=#FFFFFF;fontweight=bold;");
fx("text=Horizontal Menu;url=menu/samples/horizontal.html;");
fx("text=Vertical Menu;url=menu/samples/vertical.html;");
fx("text=Windows 98;url=menu/samples/windows98.html;");
fx("text=Windows XP;url=menu/samples/windowsxp.html;");
fx("text=Multiple Style;url=menu/samples/multiplestyle.html;");
fx("text=Multiple Colored Menus;url=menu/samples/multiplecolors.html;");
fx("text=Image Based Menu Samples;type=header;bgcolor=#FFFFFF;fontweight=bold;");
fx("text=Image Based Menu;url=menu/samples/imagebased.html;");
fx("text=Image Map Based Menu;url=menu/samples/imagemap.html;");
fx("text=Background - Images (LOTR);url=menu/samples/background.html;");
fx("text=Positioning Samples;type=header;bgcolor=#FFFFFF;fontweight=bold;");
fx("text=Absolute Positioning;url=menu/samples/absolute.html;");
fx("text=Relative Positioning (to a table cell);color=#FF0000;url=menu/samples/relative.html;");
fx("text=Pop Up with Absolute Positioning;url=menu/samples/popupabsolute.html;");
fx("text=Pop Up with Relative Positioning;url=menu/samples/popuprelative.html;");
fx("text=Pop Up with Tooltip Positioning;url=menu/samples/popuptooltip.html;");
fx("text=Absolute Positioned Submenus;url=menu/samples/submenuabsolute.html;");
fx("text=Tooltip Positioned Submenus;url=menu/samples/submenutooltip.html;");
fx("text=Functionality Samples;type=header;bgcolor=#FFFFFF;fontweight=bold;");
fx("text=JavaScript Functions;url=menu/samples/javascript.html;");
fx("text=Opening windows & targeting (i)frames;url=menu/samples/targetframe.html;target=blank;");
fx("text=Flickthrough Menu;url=menu/samples/flickthrough.html;");
fx("text=Show/Hide Submenus Onclick;url=menu/samples/showhideclick.html;");
fx("text=Item Sizing;url=menu/samples/itemsizing.html;");
fx("text=Item Positioning;url=menu/samples/itemposition.html;");
fx("text=Scrolling (overflow);url=menu/samples/overflow.html;");
fx("text=Tables (columns);url=menu/samples/tablemenu.html;");
fx("text=API - Methods & Functions;url=menu/samples/api.html;");
fx("text=Displaying Multiple Submenus;url=menu/samples/multiplesubs.html;");
}

buildMenus();
</script>';
echo $menu_admin_end;
?>
<STYLE id=StylePlaceholder></STYLE>
<link href="images/default.css" rel="stylesheet" type="text/css">
<link href="images/portal.css" rel="stylesheet" type="text/css">
<BODY id=Body bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0">
<TABLE align=center>
  <TR><!--
<td width="3" bgcolor="#DCDCDC">
</td>
-->
    <TD width="785">
      <TABLE id=table1 cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
        <TR>
          <TD width="325"><IMG height=86 src="images/01.jpg" width=340 border=0></TD>
          <TD width="332"><IMG height=86 src="images/03.jpg" width=344 border=0></TD>
          <TD width="125"><IMG height=86 src="images/05.jpg" width=118 border=0></TD></TR>
        <TR>
          <TD width="325"><IMG height=81 src="images/02.jpg" 
            width=340 border=0></TD>
          <TD width="332"><IMG height=81 src="images/04.jpg" 
            width=344 border=0></TD>
          <TD width="125" rowSpan=2><IMG height=113 
            src="images/06.jpg" width=118 border=0></TD></TR>
        <TR>
          <TD bgColor=#dcdcdc colSpan=2 height=29>
		  <table width="577">
		  <tr>
		  <td width="517" height="26">
		  <script language="javascript1.2">fixMenu("MainMenu")</script>
		  
			</table>
			</TD>
        </TR>
        <TR>
          <TD colSpan=3>
            <TABLE id=table3 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TR>
                <TD bgColor=#dcdcdc><TABLE id=table6 cellSpacing=0 cellPadding=0 width="100%" border=0>
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
id=_ctl0__ctl1__ctl0_HtmlHolder><iframe src="login.php" name="iframe" width="100%" marginwidth="0" height="600px" marginheight="0" align="middle" scrolling="Auto" frameborder="0" id="iframe"></iframe></TD>
                  																</TR></TABLE><!-- End_Module_616 --></DIV></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
                  		</TABLE></TD>
                </TR></TABLE></TD></TR>
        <TR>
          <TD bgColor=#dcdcdc colSpan=3><FONT face=Tahoma 
            size=1><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            </B></FONT>
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
                                <TD id=_ctl0__ctl0_ContentPane align=left><!-- Start_Module_610 --></TD>
                                </TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD><!-- <td width="3" bgcolor="#DCDCDC">
</td>
--></TR></TABLE>
</BODY></HTML>
