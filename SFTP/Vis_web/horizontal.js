

ordernumber="";//Once you have licensed FX Menu, the order number will be sent to you by share-it!.

emptyimage="transparent.gif";// Transparent image in gif format.
showdelay=200;//Time delay before submenus are displayed. Unit is milliseconds.
hidedelay=800;//Time delay before submenus are hidden. Unit is milliseconds.

/*Start Style Declarations*/

with(itemStyle=new fxstyle()){
width=90;
height=20;
color="#7b2612";
coloron="#000000";
bgcolor="#e4e4e4";
bgcoloron="#dcdcdc";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=3;
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
left=70;
width=90;
height=20;
orientation="horizontal";
//fx("text=Menu Control;url=viewmenu.php;target=iframe;fontweight=bold;width=110;");
fx("text=<<;url=index.php;fontweight=bold;width=20;");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Cigar - Habana;show=CigarHabana;fontweight=bold;width=110");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Cellar;show=Cellar;fontweight=bold;width=50");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Annex Arts & Antique;url=contact.php?id=8;fontweight=bold;target=iframe;width=150");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Employment;url=contact.php?id=9;fontweight=bold;width=80;target=iframe;");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Vine Gallery;url=contact.php?id=10;fontweight=bold;target=iframe;");
fx("text=|;fontweight=none;color=black;width=10;");
fx("text=Contact Us;url=contact.php?id=11;fontweight=bold;width=80;target=iframe;");
}

with(new fxmenu("CigarHabana")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=100;
height=20;
orientation="horizontal";
fx("text=Cigar Learning;url=contact.php?id=601;width=100;target=iframe;");
fx("text=Cigar List & By Online;url=contact.php?id=602;width=150;target=iframe;");
}

with(new fxmenu("Cellar")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=120;
height=20;
orientation="horizontal";
fx("text=Liquor;url=contact.php?id=701;target=iframe;width=90");
fx("text=Water;url=contact.php?id=702;target=iframe;width=90");
fx("text=Accessories;url=contact.php?id=703;target=iframe;width=100");
fx("text=Wine store;url=contact.php?id=704;target=iframe;width=100");
fx("text=Food;url=contact.php?id=705;target=iframe;width=80");

}


with(new fxmenu("MainMenu_a")){
style=itemStyle;
menustyle=menuStyle;
visible=true;
position="relative";
top=160;
left=70;
width=90;
height=20;
orientation="horizontal";
//fx("text=Menu Control;url=viewmenu.php;target=iframe;fontweight=bold;width=110;");
fx("text=About Vine;show=AboutVine_a;fontweight=bold;width=80");
fx("text=|;fontweight=none;color=black;width=15;");
fx("text=Vine Restaurants;show=VineRestaurant_a;fontweight=bold;width=120");
fx("text=|;fontweight=none;color=black;width=15;");
fx("text=Vine Wine;show=VineWine_a;fontweight=bold;target=iframe;width=80");
fx("text=|;fontweight=none;color=black;width=15;");
fx("text=New, Events & Activities;url=contact.php?id=4;fontweight=bold;width=170;target=iframe;");
fx("text=|;fontweight=none;color=black;width=15;");
fx("text=Reservation;url=contact.php?id=5;fontweight=bold;target=iframe;");
fx("text=|;fontweight=none;color=black;width=15;");
fx("text=>>;url=index.php?page=1;fontweight=bold;width=25;");
}
with(new fxmenu("AboutVine_a")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=120;
height=20;
//orientation="horizontal";
fx("text=Vine by Press >;show=AboutVine_a_b;target=iframe;");
fx("text=Vine Awards;url=contact.php?id=102;target=iframe;");
fx("text=Donald & Team;url=contact.php?id=103;target=iframe;");
}
with(new fxmenu("AboutVine_a_b")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=120;
height=20;
//orientation="horizontal";
fx("text=Vine by Press;url=contact.php?id=101;target=iframe;");
fx("text=Vine Awards;url=contact.php?id=102;target=iframe;");
fx("text=Donald & Team;url=contact.php?id=103;target=iframe;");
}

with(new fxmenu("VineRestaurant_a")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=120;
height=20;
//orientation="horizontal";
fx("text=Reservation;url=contact.php?id=201;target=iframe;width=150");
fx("text=Menus $ Food Photos;url=contact.php?id=202;target=iframe;width=150");
fx("text=Beverage;url=contact.php?id=203;target=iframe;width=150");
fx("text=Catering Menu;url=contact.php?id=204;target=iframe;width=150");
}
with(new fxmenu("VineWine_a")){
style=itemStyle;
menustyle=menuStyle;
visible=false;
position="relative";
top=5;
left=3;
width=120;
height=20;
//orientation="horizontal";
fx("text=Wine Learning;url=contact.php?id=301;target=iframe;width=150");
fx("text=Wine list & Buy online;url=contact.php?id=302;target=iframe;width=150");
fx("text=IWC VietNam 2004;url=contact.php?id=303;target=iframe;width=150");
}

buildMenus();

