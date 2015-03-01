
ordernumber="";//Once you have licensed FX Menu, the order number will be sent to you by share-it!.

emptyimage="transparent.gif";// Transparent image in gif format.
showdelay=200;//Time delay before submenus are displayed. Unit is milliseconds.
hidedelay=800;//Time delay before submenus are hidden. Unit is milliseconds.

/*Start Style Declarations*/

with(itemStyle=new fxstyle()){
width=90;
height=20;
color="#7b2612";
coloron="#333333";
bgcolor="#dcdcdc";
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
//menubgcolor="#E8E8FF";
menuborderwidth=0;
//menubordercolor="#3366CC";
separatorsize=0;
//separatorcolor="#3366CC";
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
width=90;
height=20;
orientation="horizontal";
//fx("text=Menu Control;url=viewmenu.php;target=iframe;fontweight=bold;width=110;");
fx("text=Menu Control;show=MenuControl;fontweight=bold;width=110;");
fx("text=Products;show=ProductsMenu;fontweight=bold;");
fx("text=Advertise;show=AdvertiseControl;fontweight=bold;");
fx("text=Account;show=AccountControl;fontweight=bold;");
fx("text=Logout;url=login.php;;fontweight=bold;target=iframe;");
}

with(new fxmenu("ProductsMenu")){
style=itemStyle;
menustyle=menuStyle;
width=150;
fx("text=Add Category;url=addcategory.php;target=iframe;");
fx("text=View Category;url=viewcategory.php;target=iframe;");
fx("text=Add Product;url=addproduct.php;target=iframe;");
fx("text=View Product;url=viewproduct.php;target=iframe;");
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