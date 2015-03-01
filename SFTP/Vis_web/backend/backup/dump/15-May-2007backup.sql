# Table backup from MySql PHP Backup
# AB Webservices 1999-2004
# www.absoft-my.com/pondok
# Creation date: 15-May-2007 11:45
# Database: ftVine
# MySQL Server version: 5.0.37

DROP TABLE IF EXISTS advertise;#%%
CREATE TABLE advertise (
    CategoryID int(20) NOT NULL auto_increment,
    PCID bigint(20) DEFAULT '0' NOT NULL,
    CreateDate timestamp DEFAULT 'CURRENT_TIMESTAMP' NOT NULL,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    TChnName varchar(50),
    SChnName varchar(50),
    EngName varchar(100),
    ShowInIndex enum('T','F') DEFAULT 'F' NOT NULL,
    Queue varchar(255),
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    Photo text,
   PRIMARY KEY (CategoryID)
);#%%

INSERT INTO advertise VALUES ('1','0','2007-05-12 20:43:54','2007-05-12 20:43:54','Right',NULL,'http://www.nhacso.net','T','/Photos/zicafe-vn.jpg','T','<P><IMG style=\"WIDTH: 105px; HEIGHT: 372px\" height=248 src=\"/xampp/Vis_web/Photos/zicafe-vn.jpg\" width=105></P>');#%%
INSERT INTO advertise VALUES ('2','0','2007-05-12 20:41:26','2007-05-12 20:41:26','Left',NULL,'http://www.chungta.com','T','/Photos/adv-eng.jpg','F','<P><IMG src=\"/xampp/Vis_web/Photos/adv-eng.jpg\"></P>');#%%


DROP TABLE IF EXISTS content;#%%
CREATE TABLE content (
    ID bigint(20) NOT NULL auto_increment,
    menuID bigint(20) DEFAULT '0' NOT NULL,
    content_E longtext,
    content_V longtext,
   PRIMARY KEY (ID)
);#%%

INSERT INTO content VALUES ('1','2','<TABLE width=\"100%\" border=0 cellPadding=0 cellSpacing=0>
<TBODY>
<TR>
	<TD width=\"2%\" height=\"21\" class=style7>&nbsp;</TD>
                                																	<TD class=style7><br></TD>
                                																	<TD height=\"21\" colspan=\"3\" class=style7>About Us</TD>
                                																	<TD width=\"120\" height=\"21\" class=style7>&nbsp;</TD>
                                																	</TR>
<TR vAlign=top>
	<TD colspan=\"2\" align=middle vAlign=top><span class=\"bggray\"><br>
		<img alt=\"gift &#13;&#10;&#13;&#10;baskets\" src=\"./images/1.jpg\" border=0><br>
		<img alt=accessories src=\"./images/3.jpg\" border=0></span></TD>
					<TD width=\"10\" class=bggray><p>&nbsp;</p>																											</TD>
					<TD width=\"460\" class=bggray><p><br>
																											VINE *** INTERNATIONAL So, here you are in this topsy-turvy city of motorbike traffic and chaos. You might have found yourself a pretty groovy hotel, but dining has been more adventurous than luxurious and exotic even when it was supposed to be familiar. Time to find Vine, a restaurant that is one of those special places that makes traveling in this part of the world so much fun. A good 10 to 15 minute ride north of the Old Quarter, the restaurant is on West Lake near the entrance to the Sheraton Hanoi. It caters to both discerning expats in the nearby lakeside neighborhood ? which so many embassy staff calls home ? as well as visiting foodies. Set up like an upscale bistro in San Francisco ? but with Hanoi prices ? Vine has an atmosphere, presentation, and cuisine that could stand on its own anywhere. As their name suggests, the wine list is deep, and the restaurant serves as one of the town?s biggest private importers of fine vintages ? the walls are literally lined with bottles ? and there is a small basement cellar where, donning a velvety tasting cloak to keep your shoulders warm, visitors can have a special evening of appetizers and wine tasting with the restaurant?s effusive steward, sampling from a selection of over 1,000 labels.</p>
																											<p>Dining areas look like a chic club\'s interior, with ceilings draped in rich cloth like giant fans. The California/Vietnamese Gothic baroque d?cor is set against Zen-simple, elegant tables. And the food is spectacular, a mix of the familiar ? \"I haven?t had a good salad in so long,\" the lady at the next table uttered ? and unique fusion dishes served in a chic, casual setting. Starters include nachos, quesadilias, a delectable tuna tartare, carpaccio, and fresh Vietnamese spring rolls, as well as a fiery gazpacho soup or Thai tom yum (a spicy, sweet and sour soup with lemon grass). The Ceasar salad is a classic. Homemade pastas are cooked to order (and take 20 min.) and they offer all kinds of special seafood dishes depending on what\'s fresh that day (much is flown in from Nha Trang). The \"D?Vine Beef Burger\" is a savory treat of fresh ground beef topped with imported cheese, fried egg, and pickled peppers. Their pizzas and calzones are great, as are the many authentic Thai dishes. The braised lamb shank with garlic, red pepper, and truffled mushrooms is a highlight, as in the tuna steak with horseradish potatoes, lemon, and truffle oil. Desert is tiramisu or a rich chocolate mouse.</p></TD>
																										<TD width=\"10\" class=bggray>&nbsp;</TD>
																										<TD class=bggray>&nbsp;</TD>
																										</TR>
																									<TR vAlign=top>
																										<TD colspan=\"6\" align=middle vAlign=top>&nbsp;</TD>
																										</TR></TBODY></TABLE>',NULL);#%%


DROP TABLE IF EXISTS menu;#%%
CREATE TABLE menu (
    CategoryID bigint(20) NOT NULL auto_increment,
    PCID bigint(20) DEFAULT '0' NOT NULL,
    CreateDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    TChnName varchar(50),
    SChnName varchar(50),
    EngName varchar(100),
    ShowInIndex enum('T','F') DEFAULT 'F' NOT NULL,
    Queue int(11) DEFAULT '0' NOT NULL,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    sPhoto text,
    ActiveFile enum('T','F') DEFAULT 'F' NOT NULL,
    File varchar(255),
    Photo text,
    FieldName tinyint(3) unsigned,
    Position int(10),
   PRIMARY KEY (CategoryID)
);#%%

INSERT INTO menu VALUES ('1','0','2007-05-02 18:34:26','2007-05-13 15:39:07',NULL,NULL,'About Vine','T','1','T','<P><IMG style=\"WIDTH: 122px; HEIGHT: 112px\" height=519 src=\"/xampp/Vis_web/Photos/Sunset.jpg\" width=621 border=0></P>','F','sdfsd','<P>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('16','0','2007-04-19 15:29:58','2007-05-11 15:26:42',NULL,NULL,'Nh√  h√ ng Vine','F','1','T','','',NULL,'',NULL,'8');#%%
INSERT INTO menu VALUES ('2','0','2007-05-01 20:21:18','2007-05-13 15:28:40',NULL,NULL,'News,Events & Activities','T','1','T','<P><IMG style=\"WIDTH: 133px; HEIGHT: 107px\" height=497 src=\"/xampp/Vis_web/Photos/Blue%20hills.jpg\" width=574></P>','','','<H1 class=hdrcontent>News, Events &amp; Activities</H1><BR>
<TABLE cellSpacing=0 cellPadding=0 width=616 border=0>
<TBODY>
<TR>
<TD>
<P class=txtfifty>Welcome to the ASC News with links to articles and press releases related to ASC Fine Wines and wine culture in China.</P></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD vAlign=top align=left>
<TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=45><BR></TD>
<TD width=150 bgColor=#993333><IMG height=20 src=\"http://www.asc-wines.com/images/Press-latest.jpg\" width=152></TD>
<TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD height=10><BR></TD></TR>
<TR>
<TD vAlign=top align=right>
<TABLE cellSpacing=4 cellPadding=0 width=\"93%\" border=0>
<TBODY>
<TR>
<TD vAlign=top width=17><IMG height=16 src=\"http://www.asc-wines.com/images/four_square_ul.gif\" width=16></TD>
<TD class=txt vAlign=top width=238><A class=redlink href=\"http://www.asc-wines.com/press-detail.asp?ID=40\">Vine News 1</A><BR>Cauris ferminqum diatucer kagna Sed bect aliquam leo<BR>stero celsetur capiqus e </TD>
<TD width=25>&nbsp;</TD>
<TD vAlign=top width=22><IMG height=16 src=\"http://www.asc-wines.com/images/four_square_ul.gif\" width=16></TD>
<TD class=txt vAlign=top width=223><A class=redlink href=\"http://www.asc-wines.com/press-detail.asp?ID=38\">Vine News 3</A><BR>Cauris ferminqum diatucer kagna Sed bect aliquam leo<BR>stero celsetur capiqus e</TD></TR>
<TR>
<TD vAlign=top width=17><IMG height=16 src=\"http://www.asc-wines.com/images/four_square_ul.gif\" width=16></TD>
<TD class=txt vAlign=top width=238><A class=redlink href=\"http://www.asc-wines.com/press-detail.asp?ID=37\">Vine News 2</A><BR>Cauris ferminqum diatucer kagna Sed bect aliquam leo<BR>stero celsetur capiqus e</TD>
<TD width=25>&nbsp;</TD>
<TD vAlign=top width=22><IMG height=16 src=\"http://www.asc-wines.com/images/four_square_ul.gif\" width=16></TD>
<TD class=txt vAlign=top width=223><A class=redlink href=\"http://www.asc-wines.com/press-detail.asp?ID=28\">Vine News 4</A><BR>Cauris ferminqum diatucer kagna Sed bect aliquam leo<BR>stero celsetur capiqus e</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR><BR>',NULL,'3');#%%
INSERT INTO menu VALUES ('76','2','2007-05-11 16:04:50','2007-05-11 16:04:50',NULL,NULL,'New','T','0','T','','',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('4','0','2007-05-01 22:30:37','2007-05-01 22:30:37',NULL,NULL,'Vine Restaurant','T','1','T','<IMG src=\"/xampp/Vis_web/Photos/3.jpg\">','',NULL,'',NULL,'7');#%%
INSERT INTO menu VALUES ('5','0','2007-05-01 20:21:58','2007-05-01 20:21:58',NULL,NULL,'Vine Wine','T','1','T','<img src=\"http://192.168.1.254/xampp/Vis_web/Photos/4.jpg\">','',NULL,'<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">
<tbody>
<tr>
<td class=\"tbAboutUs\" width=\"55%\"><span class=\"tbAboutUs\">VINE NEW MENUS </span></td>
<td class=\"tbAboutUs\" width=\"45%\"><span class=\"tbAboutUs\">VINE CELLAR - Wine Price List</span> </td></tr></tbody></table>
<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">
<tbody>
<tr>
<td class=\"tbAboutUs\" width=\"55%\">
<table width=\"424\">
<tbody>
<tr>
<td class=\"tbAboutUs\" width=\"10\"></td>
<td class=\"tbAboutUs\" width=\"140\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src=\"http://www.vine-group.com/menu.jpg\" height=\"197\" width=\"138\"> </td>
<td width=\"241\"><span class=\"tbAboutUs1\"><a href=\"http://www.vine-group.com/web/menu1.htm\" target=\"blank\">+ Vine General Menu </a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu2.jpg\" target=\"blank\">+ Vine\'s Winter Luncheon </a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu3.jpg\" target=\"blank\">+ Vine Breakfast menu</a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/sunday.jpg\" target=\"blank\">+ Sunday Brunch</a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu4.jpg\" target=\"blank\">+ Vine Wine By Glass</a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu6.jpg\" target=\"blank\">+ Winter Gourmet Dinner Menu 2007 </a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/Vine%20menu%202006.Mar.html\" target=\"blank\">+ Delivery Menu Eng</a> <a href=\"http://www.vine-group.com/images/article/posterNoodle.jpg\" target=\"blank\">+ Asia Noodle </a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu9.htm\" target=\"blank\">+ Beverage-Cigar-Cigarette </a><br><font size=\"1\"><br></font><a href=\"http://www.vine-group.com/web/menu10.jpg\" target=\"blank\">+ Vine\'s Gastronomic Delicacies </a><br><font size=\"1\"><br></font></span></td>
<td class=\"tbAboutUs\" width=\"13\"></td></tr></tbody></table></td>
<td class=\"tbAboutUs\" width=\"52%\">
<table>
<tbody>
<tr>
<td class=\"tbAboutUs\">&nbsp;&nbsp; <img src=\"http://www.vine-group.com/images/article/cellartiny.jpg\" hight=\"214\" border=\"0\" height=\"250\" width=\"317\"> </td></tr></tbody></table>
<table align=\"center\" border=\"0\" width=\"344\">
<tbody>
<tr>
<td><a href=\"http://www.vine-group.com/web/restwinelist.htm\"><font size=\"2\"><font size=\"2\">Restaurant Wine List </font></font></a></td>
<td><a href=\"http://www.vine-group.com/web/retailwinelist.htm\"><font size=\"2\"><font size=\"2\">Retail Wine List </font></font></a></td></tr></tbody></table></td></tr></tbody></table>',NULL,'9');#%%
INSERT INTO menu VALUES ('6','0','2007-04-19 15:20:38','2007-04-19 15:20:38',NULL,NULL,'Cigar-Casa Habana','T','1','T',NULL,'',NULL,'',NULL,'11');#%%
INSERT INTO menu VALUES ('8','0','2007-04-19 15:21:41','2007-05-14 19:12:46',NULL,NULL,'Vine Annex Arts & Antique','T','0','T','','','','',NULL,'15');#%%
INSERT INTO menu VALUES ('9','0','2007-04-19 15:26:50','2007-05-14 19:13:18',NULL,NULL,'Employment','T','1','T','<IMG style=\"WIDTH: 138px; HEIGHT: 126px\" height=273 src=\"/xampp/Vis_web/Photos/workhard.jpg\" width=397>','','','',NULL,'17');#%%
INSERT INTO menu VALUES ('11','0','2007-04-19 15:31:13','2007-05-14 19:13:52',NULL,NULL,'Vine Gallery','T','0','T','','','','',NULL,'19');#%%
INSERT INTO menu VALUES ('14','0','2007-05-02 18:34:20','2007-05-11 15:26:19',NULL,NULL,'Tin t·ª©c, s·ª± ki·ªán t·∫°i Vine','F','1','T','','',NULL,'',NULL,'4');#%%
INSERT INTO menu VALUES ('17','0','2007-04-19 15:19:34','2007-05-11 15:27:15',NULL,NULL,'R∆∞·ª£u vang Vine','F','0','T','','',NULL,'',NULL,'10');#%%
INSERT INTO menu VALUES ('18','0','2007-04-19 15:29:42','2007-05-11 15:27:39',NULL,NULL,'X√¨ g√  - Casa Habana','F','0','T','','',NULL,'',NULL,'12');#%%
INSERT INTO menu VALUES ('19','0','2007-04-19 15:21:51','2007-05-14 19:13:03',NULL,NULL,'Ph√≤ng tranh F·∫°m L·ª±c v√  ƒë·ªì gi·∫£ c·ªï','F','0','T','','','','',NULL,'16');#%%
INSERT INTO menu VALUES ('20','0','2007-04-19 15:31:57','2007-05-14 19:13:34',NULL,NULL,'Tuy·ªÉn d·ª•ng','F','0','T','','','','',NULL,'18');#%%
INSERT INTO menu VALUES ('21','0','2007-04-19 15:28:06','2007-05-14 19:14:16',NULL,NULL,'Th∆∞ vi·ªán ·∫£nh','F','0','T','','','','',NULL,'20');#%%
INSERT INTO menu VALUES ('22','0','2007-05-02 18:35:27','2007-05-14 19:15:00',NULL,NULL,'Li√™n h·ªá','F','1','T','<IMG src=\"http://192.168.1.254/xampp/Vis_web/Photos/5.jpg\">','','','',NULL,'22');#%%
INSERT INTO menu VALUES ('69','22','2007-04-18 15:41:59','2007-04-18 15:41:59',NULL,NULL,'Customer Comments','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('24','1','2007-05-01 03:57:10','2007-05-01 03:57:10',NULL,NULL,'Vine by Press','T','0','T','','',NULL,'<TABLE cellSpacing=1 cellPadding=2 width=\"100%\" border=0>
<TBODY>
<TR>
<TD class=tbAboutUs>
<P align=center><SPAN><A style=\"FONT-WEIGHT: bold\" href=\"http://www.vine-group.com/web/VineByPress2006.html\"><FONT color=#000000 size=2>VINE BY PRESS Articles</FONT></A><FONT style=\"FONT-WEIGHT: bold\" color=#000000> </FONT><A href=\"http://www.vine-group.com/vbp/\" alt=\"click here to view entire gallery\"><FONT color=white size=2><FONT style=\"FONT-WEIGHT: bold\" color=#000000>and Gallery</FONT> </FONT><IMG src=\"http://www.vine-group.com/new.gif\" border=0></A></SPAN></P>
<P align=center><SPAN><BR></SPAN></P></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>BUSINESS TRAVELLER ASIAN PACIFIC SEPTEMBER 2006 </SPAN><IMG src=\"http://www.vine-group.com/new.gif\" border=0></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>Vine Wine Boutique Bar &amp; Cafe Hanoiís ìhome of wineî doubles as one of the countryís best restaurants. Owner Donald Berger has carefully selected over 1,000 varieties from Western Australian, Canada and Chile to choose from. Vineís elegant cellar room can accommodate up to four diners. Its Vine annex hosts wine tastings, lectures and special events at least once a month. CONTACT: 1A &amp; 3 Xuan Dieu, Tay Ho, tel 84 4 719 8000Öî <A href=\"http://www.vine-group.com/web/press/press_travel.pdf\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>Insight - Pocket Guide - Discovery Channel </SPAN><IMG src=\"http://www.vine-group.com/new.gif\" border=0></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìVine Wine Boutique, Bar &amp; CafÈ 1A Xuan Dieu Street Tel: 04 719 8000 Canadian wine enthusiast and Chef Donald Berger runs this chic and intimate outfit, deservedly popular for its world-class wines and delicious food. Cuisine is an eclectic mix of global ìcomfort foodsî, including gourmet pizzas and Thai spaghetti. The cellar doubles as an intimate dining room Öî <A href=\"http://www.vine-group.com/web/press/discoverychannel.htm\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>Forbes Traveler -Best Wine </SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìVine Wine Boutique. Chef Donald Berger serves sophisticated food with wines to match in this stylish space, which features a communal table and chic wine racks Öî <A href=\"http://www.forbestraveler.com/expert/food/7\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD class=newsDatum vAlign=top align=left>Frommers Vietnam 2006</TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìVINE *** INTERNATIONAL So, here you are in this topsy-turvy city of motorbike traffic and chaos. You might have found yourself a pretty groovy hotel, but dining has been more adventurous than luxurious and exotic even when it was supposed to be familiar. Time to find Vine, a restaurant that is one of those special places that makes traveling in this part of the world so much fun. A good 10 to 15 minute ride north of the Old Quarter, the restaurant is on West Lake near the entrance to the Sheraton Hanoi. It caters to both discerning expats in the nearby lakeside neighborhood ñ which so many embassy staff calls home ñ as well as visiting foodies. Set up like an upscale bistro in San Francisco ñ but with Hanoi prices ñ Vine has an atmosphere, presentation, and cuisine that could stand on its own anywhere. Öî <A href=\"http://www.vine-group.com/web/FrommersVietnam2006EN.html\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>LUXE CITY GUIDES </SPAN></TD></TR>
<TR>
<TD vAlign=top align=left>
<P><SPAN class=text><STRONG>Restaurant: International/Asian: </STRONG></SPAN><SPAN class=text><STRONG><BR>Vine:</STRONG> Ripe, rustic and relax bistro with pan-global ingredients, rich, eclectic menu, gourmet pizzas, best cellar in town and jazzy sounds. Take sundowners at Summit Lounge and then supper here.</SPAN><BR><SPAN class=text><STRONG>Bars: Chill &amp; Hang</STRONG></SPAN> <SPAN class=text><STRONG><BR>Vine: </STRONG>Sophisticated, with great wines and good food, so you can make a night of it. </SPAN><BR><SPAN class=text><STRONG>Art</STRONG></SPAN> <SPAN class=text><STRONG><BR>Vine Annex:</STRONG> This art space features the work of artist Pham Luc. While youíre at it you might as well pop in to Vine.</SPAN><BR><SPAN class=text><STRONG>Luxe loves</STRONG></SPAN><BR><SPAN class=text><STRONG>Vine </STRONG>ñ Laid ñ back and juicy Öî <A href=\"http://www.vine-group.com/images/article/luxe.jpg\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR><BR></SPAN></P></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>THE GLOBE AND MAIL SATURDAY, DECEMBER 9, 2006</SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìWHERE TO EAT - Vine Wine Boutique Bar &amp; CafÈ: 1A Xuan Dieu, Tay Ho; 84-4-719-8000; vine-group.com. While youíre waiting for the juicy rib-eye steak at Donald Bergerís trendy West Lake eatery, browse the 1,000-bottle wine list Öî <A href=\"http://www.emeraude-cruises.com/press/2006_12_09.Globe&amp;Mail.pdf\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD class=newsDatum vAlign=top align=left>Port and Portuguese Wine Tasting and Food Buffet </TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìÖMore than 100 wine lovers, Food and Beverage Manager, press, businessman, model were attended and enjoyed some of the world\\\'s best wines of unrivaled flavors at a monthly held Wine Tasting and Art Appreciation Night: PORT and PORTUGUESE WINE TASTING and FOOD BUFFET - at Vine Annex on last Friday and Saturday- 3rd and 4th November 2006. Öî <A href=\"http://vibforum.vcci.com.vn/news_detail.asp?news_id=8143\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>Vietnam Economic Times, SEA Game</SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìThis entire preamble is by the way of preparing you, gentle reader for a possibly sickeningly enthusiastic review of Vine, Donald Bergerís latest venture. Best known as executive chef for some years at the Press Club in Hanoi, the affable Mr. Berger is probably one of the two or three most talented chefs to have worked in this country since the dawn of doi moi...î <A href=\"http://www.vine-group.com/web/VineByPress2006.html#VnEconomi\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>Destin Asian</SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìVine has a cafÈ-like feel, but also a touch of sleek urbanity in its backlit wine cellar and communal table. The wide-ranging menu gives global definition to comfort foods, whether all-American like meatloaf or classically Asian like tom yum goong...î <A href=\"http://www.vine-group.com/web/VineByPress2006.html#destAsia\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=newsDatum>Vietnam News</SPAN></TD></TR>
<TR>
<TD vAlign=top align=left><SPAN class=text>ìVine Art Antique and Annex- the antiques and Vietnamese handicraft compliment the art laden wall, which are full of mixed media painting of Fam Luc, ì a raising star in the world of Vietnamese original lacquer, î- ì He captured different walks of life with a powerful brushstroke that vividly depicts realistic situations... î <A href=\"http://www.vine-group.com/web/VineByPress2006.html#vnNews\"><FONT color=gray size=1><I>Click here to view more</I></FONT></A><BR></SPAN></TD></TR></TBODY></TABLE>',NULL,'1');#%%
INSERT INTO menu VALUES ('25','1','2007-05-02 18:33:18','2007-05-02 18:33:18',NULL,NULL,'Vine Awards','T','0','T','<IMG src=\"http://192.168.1.254/xampp/Vis_web/Photos/7.jpg\">','',NULL,'',NULL,'1');#%%
INSERT INTO menu VALUES ('26','1','2007-05-02 18:00:12','2007-05-02 18:00:12',NULL,NULL,'Donald & Team','T','0','T','','',NULL,'<P>&nbsp;</P>
<TABLE cellSpacing=1 cellPadding=2 width=\"100%\" border=0>
<TBODY>
<TR>
<TD class=tbAboutUs width=\"100%\"><SPAN class=tbAboutUs><STRONG>Chef Donald Berger\'s Advices through \"HEAR IT ON THE GRAPEVINE\" - TIMEOUT</STRONG> </SPAN></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=1 cellPadding=5 width=\"100%\" border=0>
<TBODY>
<TR>
<TD class=newsDatum vAlign=top align=left width=\"15%\"><IMG src=\"http://www.vine-group.com/don.jpg\" width=120 vspace=35> </TD>
<TD class=text vAlign=top align=left width=\"48%\">&nbsp; 
<P>Donald Berger is a partner and the Managing Director of the Vine Quality Hospitality Group based in Hanoi - the capital of Vietnam . His international experience with wine and food spans 29 years in the quality hospitality business, and he was responsible for organizing with the Chairman of the International Wine Challenge Robert Joseph; the annual International Wine Challenge Vietnam 2002 &amp; 2003, co-organizing for IWC Shanghai 1999 &amp; 2000. He was also on the founding Board of the Shanghai Chefís Association and Shanghai Chaine de Rotisseurs as Consellier Culinare responsible for the wine program. </P></TD>
<TD class=newsDatum vAlign=top align=left width=\"37%\"><A href=\"http://www.vine-group.com/web/timeout_chilewine.jpg\" target=blank><FONT color=black>+ Chilean Wine Information </FONT></A><IMG src=\"http://www.vine-group.com/new.gif\" border=0> &nbsp; <BR><A href=\"http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=8617\" target=blank><FONT color=black>+ Merlot is just so passe</FONT></A>&nbsp; <BR><A href=\"http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=10300\" target=blank><FONT color=black>+ Roses are in season</FONT></A>&nbsp; <BR><A href=\"http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=8864\" target=blank><FONT color=black>+ Beaujolais Nouveau </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/images/article/ForeverDrinkingBubble.jpg\" target=blank><FONT color=black>+ Forever Drinking Bubbles </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/images/article/Timeout_July_3_9th__06_screw_off_or_get_cork.jpg\" target=blank><FONT color=black>+ Stelvin Screw Cap Trend </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/timeout.jpg\" target=blank><FONT color=black>+ Kiwi Wines </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/web/CheersAustraliaTimeout.jpg\" target=blank><FONT color=black>+ Cheers to Australia </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/web/SOUTHAFRICANWINE.html\" target=blank><FONT color=black>+ </FONT></A><A href=\"http://www.vine-group.com/web/SOUTHAFRICANWINE.html\"><FONT color=#000000>South African Wines </FONT></A>&nbsp; <BR><A href=\"http://www.vine-group.com/on_the_edge_of_europe.jpg\" target=blank><FONT color=black>+ </FONT></A><A title=\"On the edge of Europe\" href=\"http://www.vine-group.com/on_the_edge_of_europe.jpg\"><FONT color=#000000>Portuguese Wine</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title=\"Vive les vins Francais\" href=\"http://www.vine-group.com/Vive.jpg\"><FONT color=#000000>Vive les vins Francais</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title=\"Let the festivities begin\" href=\"http://www.vine-group.com/web/festivities.jpg\"><FONT color=#000000>Let the festivities begin</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title=\"Californian Wines\" href=\"http://www.vine-group.com/web/californian.jpg\"><FONT color=#000000>Californian Wines</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title=\"Italian Wine Information\" href=\"http://www.vine-group.com/web/Italianwine.htm\"><FONT color=#000000>Italian Wine Information</FONT></A>&nbsp; <BR><BR><A href=\"http://www.vine-group.com/web/DonaldBioEN.html\"><FONT color=#333333 size=1><I>More detail about Chef Donald Berger Professional Biography...</I> </FONT></A></TD></TR></TBODY></TABLE>',NULL,'1');#%%
INSERT INTO menu VALUES ('72','71','2007-05-01 04:00:32','2007-05-01 04:00:32',NULL,NULL,'Customer Comments','T','0','T','','',NULL,'<H1 class=hdrcontent>Customer Comment<BR></H1><BR><BR>
<P>Please send us the following information to complete your&nbsp; application. </P>
<TABLE cellSpacing=5 cellPadding=0 width=\"100%\" border=0>
<TBODY>
<TR>
<TD class=formcaption width=\"30%\">First Name<SPAN class=normalText_Red>*</SPAN></TD>
<TD width=\"38%\"><INPUT name=FName></TD>
<TD class=formcaption width=\"10%\"><BR><SPAN class=normalText_Red></SPAN></TD>
<TD class=normalText width=\"22%\" rowSpan=2><BR><BR></TD></TR>
<TR>
<TD class=formcaption>Last Name<SPAN class=normalText_Red>*</SPAN></TD>
<TD><INPUT name=LName></TD>
<TD class=formcaption>&nbsp;</TD></TR>
<TR>
<TD class=formcaption>Comment<SPAN class=normalText_Red></SPAN></TD>
<TD colSpan=3><INPUT name=UserName>&nbsp;<SPAN class=txt> <BR></SPAN></TD></TR>
<TR>
<TD class=formcaption><BR></TD>
<TD colSpan=3><BR></TD></TR>
<TR>
<TD class=formcaption><INPUT type=submit value=Submit name=Submit></TD>
<TD colSpan=3><BR></TD></TR></TBODY></TABLE><BR>',NULL,'1');#%%
INSERT INTO menu VALUES ('71','0','2007-05-02 18:34:55','2007-05-14 19:14:42',NULL,NULL,'Contact Us','T','1','T','<IMG src=\"/xampp/Vis_web/Photos/imagesCAEZGUBS.jpg\">','','','<P>
<TABLE class=content style=\"BACKGROUND: #e6e6e6; WIDTH: 414.8pt; BORDER-COLLAPSE: collapse; mso-padding-alt: 0in 5.4pt 0in 5.4pt; mso-yfti-tbllook: 480\" cellSpacing=0 cellPadding=0 width=553 border=0>
<TBODY>
<TR style=\"HEIGHT: 1.25in; mso-yfti-irow: 0; mso-yfti-firstrow: yes\">
<TD style=\"BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 1.25in; BACKGROUND-COLOR: transparent\" vAlign=top width=277>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=2><STRONG><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\">Vine Wine Boutique Bar &amp; Cafe</SPAN></STRONG><B style=\"mso-bidi-font-weight: normal\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><?xml:namespace prefix = o ns = \"urn:schemas-microsoft-com:office:office\" /><o:p></o:p></SPAN></B></FONT></P>
<P style=\"MARGIN: 0in 0in 0pt\"><B style=\"mso-bidi-font-weight: normal\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><FONT size=2>#</FONT></SPAN></B><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><FONT size=2>1A Xuan Dieu, <BR>Tay Ho, <?xml:namespace prefix = st1 ns = \"urn:schemas-microsoft-com:office:smarttags\" /><st1:place w:st=\"on\"><st1:City w:st=\"on\">Hanoi</st1:City>, <st1:country-region w:st=\"on\">Vietnam</st1:country-region></st1:place> <BR>Tel: <?XML:NAMESPACE PREFIX = SKYPE /><SKYPE:SPAN onmouseup=\"javascript:skype_tb_imgOnOff(this,1,\'0\',true,16,\'\');return skype_tb_stopEvents();\" class=skype_tb_injection oncontextmenu=\"javascript:skype_tb_SwitchDrop(this,\'0\',\'sms=0\');return skype_tb_stopEvents();\" onmousedown=\"javascript:skype_tb_imgOnOff(this,2,\'0\',true,16,\'\');return skype_tb_stopEvents();\" id=softomate_highlight_0 onmouseover=\"javascript:skype_tb_imgOnOff(this,1,\'0\',true,16,\'\');\" title=\"Call this phone number in United States of America with Skype: +18447198000\" onclick=\"javascript:doRunCMD(\'call\',\'0\',null,0);return skype_tb_stopEvents();\" onmouseout=\"javascript:skype_tb_imgOnOff(this,0,\'0\',true,16,\'\');\" durex=\"160\" context=\"(844)&nbsp;719&nbsp;8000\"><SKYPE:SPAN onmouseup=\"javascript:doSkypeFlag(this,\'0\',1,1,16);return skype_tb_stopEvents();\" class=skype_tb_imgA onmousedown=\"javascript:doSkypeFlag(this,\'0\',2,1,16);return skype_tb_stopEvents();\" id=skype_tb_droppart_0 onmouseover=\"javascript:doSkypeFlag(this,\'0\',1,1,16);\" title=\"Change country code ...\" style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)\" onclick=\"javascript:doHandleChdial(this,1,\'0\',1);return skype_tb_stopEvents();\" onmouseout=\"javascript:doSkypeFlag(this,\'0\',0,1,16);\"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f0 style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)\"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s0></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text0><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText0>(844)&nbsp;719&nbsp;8000</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r0></SKYPE:SPAN></SKYPE:SPAN><BR>Fax: (844) 719 8001<B style=\"mso-bidi-font-weight: normal\"><o:p></o:p></B></FONT></SPAN></P>
<H2 style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><STRONG><SPAN style=\"FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic\"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD>
<TD style=\"BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 1.25in; BACKGROUND-COLOR: transparent\" vAlign=top width=277>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=2><STRONG><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\">Vine Group Head Office </SPAN></STRONG><B style=\"mso-bidi-font-weight: normal\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><o:p></o:p></SPAN></B></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><FONT size=2>2nd &amp; 3rd floors, #45 Au Co,<BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup=\"javascript:skype_tb_imgOnOff(this,1,\'2\',true,16,\'\');return skype_tb_stopEvents();\" class=skype_tb_injection oncontextmenu=\"javascript:skype_tb_SwitchDrop(this,\'2\',\'sms=0\');return skype_tb_stopEvents();\" onmousedown=\"javascript:skype_tb_imgOnOff(this,2,\'2\',true,16,\'\');return skype_tb_stopEvents();\" id=softomate_highlight_2 onmouseover=\"javascript:skype_tb_imgOnOff(this,1,\'2\',true,16,\'\');\" title=\"Call this phone number in United States of America with Skype: +18447198321\" onclick=\"javascript:doRunCMD(\'call\',\'2\',null,0);return skype_tb_stopEvents();\" onmouseout=\"javascript:skype_tb_imgOnOff(this,0,\'2\',true,16,\'\');\" durex=\"459\" context=\"(844)&nbsp;719&nbsp;8321\"><SKYPE:SPAN onmouseup=\"javascript:doSkypeFlag(this,\'2\',1,1,16);return skype_tb_stopEvents();\" class=skype_tb_imgA onmousedown=\"javascript:doSkypeFlag(this,\'2\',2,1,16);return skype_tb_stopEvents();\" id=skype_tb_droppart_2 onmouseover=\"javascript:doSkypeFlag(this,\'2\',1,1,16);\" title=\"Change country code ...\" style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)\" onclick=\"javascript:doHandleChdial(this,1,\'2\',1);return skype_tb_stopEvents();\" onmouseout=\"javascript:doSkypeFlag(this,\'2\',0,1,16);\"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f2 style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)\"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s2></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text2><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText2>(844)&nbsp;719&nbsp;8321</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r2></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 8465 <o:p></o:p></FONT></SPAN></P>
<H2 style=\"MARGIN: 0in 0in 0pt\"><STRONG><SPAN style=\"FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic\"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD></TR>
<TR style=\"HEIGHT: 94.4pt; mso-yfti-irow: 1; mso-yfti-lastrow: yes\">
<TD style=\"BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 94.4pt; BACKGROUND-COLOR: transparent\" vAlign=top width=277>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=2><STRONG><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\">Vine Annex </SPAN></STRONG><B style=\"mso-bidi-font-weight: normal\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><o:p></o:p></SPAN></B></FONT></P>
<P style=\"MARGIN: 0in 0in 0pt\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><FONT size=2>1st floor, #45 Au Co, <BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup=\"javascript:skype_tb_imgOnOff(this,1,\'4\',true,16,\'\');return skype_tb_stopEvents();\" class=skype_tb_injection oncontextmenu=\"javascript:skype_tb_SwitchDrop(this,\'4\',\'sms=0\');return skype_tb_stopEvents();\" onmousedown=\"javascript:skype_tb_imgOnOff(this,2,\'4\',true,16,\'\');return skype_tb_stopEvents();\" id=softomate_highlight_4 onmouseover=\"javascript:skype_tb_imgOnOff(this,1,\'4\',true,16,\'\');\" title=\"Call this phone number in United States of America with Skype: +18447198321\" onclick=\"javascript:doRunCMD(\'call\',\'4\',null,0);return skype_tb_stopEvents();\" onmouseout=\"javascript:skype_tb_imgOnOff(this,0,\'4\',true,16,\'\');\" durex=\"141\" context=\"(844)&nbsp;719&nbsp;8321\"><SKYPE:SPAN onmouseup=\"javascript:doSkypeFlag(this,\'4\',1,1,16);return skype_tb_stopEvents();\" class=skype_tb_imgA onmousedown=\"javascript:doSkypeFlag(this,\'4\',2,1,16);return skype_tb_stopEvents();\" id=skype_tb_droppart_4 onmouseover=\"javascript:doSkypeFlag(this,\'4\',1,1,16);\" title=\"Change country code ...\" style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)\" onclick=\"javascript:doHandleChdial(this,1,\'4\',1);return skype_tb_stopEvents();\" onmouseout=\"javascript:doSkypeFlag(this,\'4\',0,1,16);\"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f4 style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)\"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s4></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text4><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText4>(844)&nbsp;719&nbsp;8321</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r4></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 8465 <o:p></o:p></FONT></SPAN></P>
<H2 style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><STRONG><SPAN style=\"FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic\"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD>
<TD style=\"BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 94.4pt; BACKGROUND-COLOR: transparent\" vAlign=top width=277>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=2><STRONG><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\">Vine Cellar </SPAN></STRONG><B style=\"mso-bidi-font-weight: normal\"><SPAN style=\"COLOR: #333333; FONT-FAMILY: Arial\"><o:p></o:p></SPAN></B></FONT></P>
<H2 style=\"MARGIN: 0in 0in 0pt\"><SPAN style=\"FONT-WEIGHT: normal; FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; mso-bidi-font-weight: bold; mso-bidi-font-style: italic\"><FONT face=Arial>#7Xuan Dieu,<BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup=\"javascript:skype_tb_imgOnOff(this,1,\'6\',true,16,\'\');return skype_tb_stopEvents();\" class=skype_tb_injection oncontextmenu=\"javascript:skype_tb_SwitchDrop(this,\'6\',\'sms=0\');return skype_tb_stopEvents();\" onmousedown=\"javascript:skype_tb_imgOnOff(this,2,\'6\',true,16,\'\');return skype_tb_stopEvents();\" id=softomate_highlight_6 onmouseover=\"javascript:skype_tb_imgOnOff(this,1,\'6\',true,16,\'\');\" title=\"Call this phone number in United States of America with Skype: +18447192922\" onclick=\"javascript:doRunCMD(\'call\',\'6\',null,0);return skype_tb_stopEvents();\" onmouseout=\"javascript:skype_tb_imgOnOff(this,0,\'6\',true,16,\'\');\" durex=\"506\" context=\"(844)&nbsp;719&nbsp;2922\"><SKYPE:SPAN onmouseup=\"javascript:doSkypeFlag(this,\'6\',1,1,16);return skype_tb_stopEvents();\" class=skype_tb_imgA onmousedown=\"javascript:doSkypeFlag(this,\'6\',2,1,16);return skype_tb_stopEvents();\" id=skype_tb_droppart_6 onmouseover=\"javascript:doSkypeFlag(this,\'6\',1,1,16);\" title=\"Change country code ...\" style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)\" onclick=\"javascript:doHandleChdial(this,1,\'6\',1);return skype_tb_stopEvents();\" onmouseout=\"javascript:doSkypeFlag(this,\'6\',0,1,16);\"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f6 style=\"BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)\"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s6></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text6><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText6>(844)&nbsp;719&nbsp;2922</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r6></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 3508 <BR>Email: cellar@vine-group.com </FONT></SPAN><STRONG><SPAN style=\"FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic\"><o:p></o:p></SPAN></STRONG></H2></TD></TR></TBODY></TABLE></P>',NULL,'21');#%%
INSERT INTO menu VALUES ('36','6','2007-05-01 04:03:27','2007-05-01 04:03:27',NULL,NULL,'Cigar Learning','T','0','T','','',NULL,'<TABLE cellSpacing=0 cellPadding=0 width=616 border=0>
<TBODY>
<TR>
<TD height=20>
<H1 class=hdrcontent>Cigar Learning<BR></H1></TD></TR>
<TR>
<TD vAlign=top align=left>&nbsp;</TD></TR>
<TR>
<TD vAlign=top align=left>
<TABLE cellSpacing=0 cellPadding=0 width=480 border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD><BR></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ñ just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>
<P class=txtfifty><STRONG>1. Sight </STRONG></P>
<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wineís color can provide hints as to its age, degree of sweetness, grape variety ñ even how it is made.</P>
<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>
<P class=txtfifty>Evaluate the wineís color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>
<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wineís color is part of its distinctive character ñ try to use descriptive words when evaluating color.</P></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>',NULL,'1');#%%
INSERT INTO menu VALUES ('37','6','2007-05-01 04:04:54','2007-05-01 04:04:54',NULL,NULL,'Cigar List & Buy Online','T','0','T','','',NULL,'<H1 class=hdrcontent>Cigar List &amp; Buy Online<BR></H1><BR><BR>
<TABLE style=\"WIDTH: 284px; HEIGHT: 190px\" cellSpacing=0 cellPadding=0 align=left border=0>
<TBODY>
<TR>
<TD align=left width=69 height=27>
<P class=formcaption>Country</P></TD>
<TD width=4>&nbsp;</TD>
<TD width=262><SELECT onchange=javascript:loadURL(this.value) name=Region> <OPTION value=0 selected>All</OPTION> <OPTION value=Argentina>Argentina</OPTION> <OPTION value=Australia>Australia</OPTION> <OPTION value=Austria>Austria</OPTION> <OPTION value=Canada>Canada</OPTION> <OPTION value=Chile>Chile</OPTION> <OPTION value=France>France</OPTION> <OPTION value=Hungary>Hungary</OPTION> <OPTION value=Italy>Italy</OPTION> <OPTION value=\"New Zealand\">New Zealand</OPTION> <OPTION value=Portugal>Portugal</OPTION> <OPTION value=\"South Africa\">South Africa</OPTION> <OPTION value=Spain>Spain</OPTION> <OPTION value=USA>USA</OPTION></SELECT> </TD></TR>
<TR>
<TD colSpan=3 height=8><BR></TD></TR>
<TR>
<TD align=left>
<P class=formcaption>Type</P></TD>
<TD>&nbsp;</TD>
<TD><SELECT name=Type> <OPTION value=0 selected>All</OPTION> <OPTION value=Champagne>Champagne</OPTION> <OPTION value=dessert>dessert</OPTION> <OPTION value=Grappa>Grappa</OPTION> <OPTION value=Port>Port</OPTION> <OPTION value=Red>Red</OPTION> <OPTION value=Rose>Rose</OPTION> <OPTION value=Sherry>Sherry</OPTION> <OPTION value=\"Sparkling Wine\">Sparkling Wine</OPTION> <OPTION value=White>White</OPTION></SELECT> </TD></TR>
<TR>
<TD colSpan=3 height=12><BR></TD></TR>
<TR>
<TD align=left height=39>
<P class=formcaption>Price Range </P></TD>
<TD>&nbsp;</TD>
<TD class=formcaption vAlign=center><SELECT name=PriceRange> <OPTION value=0 selected>All</OPTION> <OPTION value=1>Less than RMB 80</OPTION> <OPTION value=2>Between RMB 80 and 100</OPTION> <OPTION value=3>Between RMB 100 and 150</OPTION> <OPTION value=4>Between RMB 150 and 200</OPTION> <OPTION value=5>Between RMB 200 and 300</OPTION> <OPTION value=6>Between RMB 300 and 400</OPTION> <OPTION value=7>Between RMB 400 and 500</OPTION> <OPTION value=8>Between RMB 500 and 750</OPTION> <OPTION value=9>Between RMB 750 and 1000</OPTION> <OPTION value=10>Between RMB 1000 and 1500</OPTION> <OPTION value=11>Between RMB 1500 and 2000</OPTION> <OPTION value=12>More than RMB 2000</OPTION></SELECT> &nbsp; <INPUT type=hidden value=True name=Search> </TD></TR>
<TR>
<TD>&nbsp;</TD>
<TD>&nbsp;</TD>
<TD class=pagecaption>
<TABLE cellSpacing=4 cellPadding=0 border=0>
<TBODY>
<TR>
<TD><INPUT type=image src=\"http://www.asc-wines.com/images/search_button.gif\" name=image22></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>',NULL,'1');#%%
INSERT INTO menu VALUES ('38','5','2007-05-01 04:06:21','2007-05-01 04:06:21',NULL,NULL,'Wine Learning','T','1','T','','',NULL,'<TABLE cellSpacing=0 cellPadding=0 width=616 border=0>
<TBODY>
<TR>
<TD height=20>
<H1 class=hdrcontent>Wine Learning<BR></H1></TD></TR>
<TR>
<TD vAlign=top align=left>&nbsp;</TD></TR>
<TR>
<TD vAlign=top align=left>
<TABLE cellSpacing=0 cellPadding=0 width=480 border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/Wine-how.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ñ just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>
<P class=txtfifty><STRONG>1. Sight </STRONG></P>
<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wineís color can provide hints as to its age, degree of sweetness, grape variety ñ even how it is made.</P>
<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>
<P class=txtfifty>Evaluate the wineís color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>
<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wineís color is part of its distinctive character ñ try to use descriptive words when evaluating color.</P>
<P class=txtfifty><STRONG>2. Nose</STRONG></P>
<P class=txtfifty>The human sense of smell is actually more discerning than the sense of taste, and your nose can provide a significant amount of information about a particular wine before you taste it. The ìperfumeî of a wine can vary significantly depending not just on its age and the types of grape(s) from which it is made, but also on the soils and weather of the region where the grapes were grown (the ìterroirî) and on the way in which it was aged (in oak barrels or stainless steel tanks). </P>
<P class=txtfifty>Put your nose well into the glass and sniff. Concentrate just on the smell - is it powerful and complex, or simple and light? Does the smell linger, or does it dissipate quickly? Use your own words to describe the smells present in the aroma of a wine. Many Chinese people are unfamiliar with the scents of black currants or raspberries; it is perfectly acceptable to use other olfactory references (oleanders, for instance, or yangmei [bayberries]) if they are more familiar, or more accurate. There is no absolute right or wrong in describing a wine ñ just what is more helpful in describing it to others.</P>
<P class=txtfifty>The aroma of a wine may also provide clues as to its age. White wines often become more honeyed over the years, while young whites are often described with reference to fresh flowers, fruit or newly cut grass. </P>
<P class=txtfifty><STRONG>3. Taste</STRONG></P>
<P class=txtfifty>And so finally to tasting the product of the winemakerís art! A good wine should balance its various flavor aspects: sweetness and acidity in a white wine, for example; sweetness, acidity, and tannin in a red wine.</P>
<P class=txtfifty>Sip the wine. Taste it in the front of your mouth with the tip of your tongue to detect its degree of sweetness. The bottom of the back of your tongue will tell you about the wineís acidity. Your front gums will help you determine the character of the wineís tannins. And finally, roll the wine around your whole mouth and swallow. First make a mental note of the ìmouth feelî ñ is it ìsoft and velvetyî or ìthin and astringentî?</P>
<P class=txtfifty>Swallow, and pay close attention to both the changes in flavor and the time it takes for the taste to disappear. This is called the ìlengthî of a wine, and can make a very big difference in the determination of the quality of a wine. In great wines, the finish can last a minute or more, creating a moment of meditation that no other beverage can create.</P></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>',NULL,'1');#%%
INSERT INTO menu VALUES ('39','5','2007-05-02 18:14:12','2007-05-13 21:33:11',NULL,NULL,'Wine list & Buy Online','T','0','T','','T','./winelist.php','<P>
<TABLE style=\"WIDTH: 554px; HEIGHT: 284px\" border=0>
<TBODY>
<TR>
<TD><IMG style=\"WIDTH: 540px; HEIGHT: 184px\" height=506 src=\"/xampp/Vis_web/Photos/Sunset.jpg\" width=641></TD></TR>
<TR>
<TD>Sam\'s Wines &amp; Spirits has been a global icon beverage retailer since 1942. We pride ourselves in providing outstanding selection, price, and the best customer service in the industry. Our staff is known worldwide for their breadth of knowledge and involvement with the wines and spirits they sell. Whether it?s a first growth Bordeaux bought on futures or a Chilean table wine bought for a barbecue, Sam?s service and selection can?t be beat.</TD></TR></TBODY></TABLE></P>',NULL,'1');#%%
INSERT INTO menu VALUES ('87','0','2007-05-14 19:11:29','2007-05-14 19:11:29',NULL,NULL,'Vine Cellar','T','0','T','','F','./error.php','',NULL,'13');#%%
INSERT INTO menu VALUES ('88','0','2007-05-14 19:12:28','2007-05-14 19:48:56',NULL,NULL,'Vine Cellar (Vn)','F','0','T','','F','./error.php','',NULL,'14');#%%
INSERT INTO menu VALUES ('40','5','2007-04-17 14:22:08','2007-04-17 14:22:08',NULL,NULL,'IWC Viet Nam 2004','T','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('41','38','2007-05-01 04:09:06','2007-05-14 09:07:49',NULL,NULL,'Wine Styles','T','0','T','','','','<H1 class=hdrcontent align=center>Wine Styles<BR></H1>
<P align=center><BR><BR>&nbsp;</P>
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/wine_labels.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty align=left><STRONG>How to Read a Wine Label</STRONG></P>
<P class=txtfifty align=justify>Wine labels are like languages ? bottles from each region ?speak? a different <BR>language.&nbsp;So, to be conversant in wines from different locales, you must become conversant in the ?wine language? used on different labels.</P>
<P class=txtfifty align=justify>As a general rule, labels from ?Old World? (European) countries contain more <BR>information on the wine described than do the labels of wines from the ?New<BR>World? (Australia, North America, South America and South Africa).&nbsp; However<BR>, there are some notable exceptions: New World wine labels usually identify<BR>the grape varieties used to produce a wine, whereas the labels of Old World<BR>wines normally omit this information.&nbsp; That?s because the grapes used to make<BR>Old World wines are well known and often prescribed by local laws.&nbsp; For example, almost all white wines from Burgundy are made from Chardonnay grapes, and nearly all Burgundian reds from Pinot Noir.&nbsp; Burgundy labels ?assume? that the purchaser knows this ?wine fundamental.?</P></TD></TR></TBODY></TABLE></DIV>
<P align=center><BR>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('42','38','2007-05-01 04:10:29','2007-05-14 09:06:46',NULL,NULL,'Wine Grapes','T','0','T','','','','<H1 class=hdrcontent align=center>Grape Guide<BR></H1>
<P align=center><BR>&nbsp;</P>
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/grape_guide.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=3 cellPadding=0 width=\"100%\" border=0>
<TBODY>
<TR>
<TD width=\"8%\">&nbsp;</TD>
<TD width=\"47%\">&nbsp;</TD>
<TD width=\"46%\">&nbsp;</TD></TR>
<TR>
<TD>&nbsp;</TD>
<TD class=txt><STRONG><FONT size=2>Red Grape Varieties</FONT></STRONG></TD>
<TD class=txt><BR></TD></TR>
<TR>
<TD>&nbsp;</TD>
<TD class=txt vAlign=top><A class=redlink href=\"http://www.asc-wines.com/grape_guide.asp#cabernet\">Cabernet Sauvignon</A><BR><A class=redlink href=\"http://www.asc-wines.com/grape_guide.asp#gamay\">Gamay</A><BR><A class=redlink href=\"http://www.asc-wines.com/grape_guide.asp#zinfandel\"></A><BR></TD>
<TD class=txt vAlign=top><BR></TD></TR>
<TR>
<TD>&nbsp;</TD>
<TD class=txt>&nbsp;</TD>
<TD class=txt>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>
<P class=txtfifty><STRONG><FONT size=3>Red Grape Varieties</FONT></STRONG></P>
<P class=txtfifty><STRONG><A name=cabernet></A>Cabernet Sauvignon</STRONG></P>
<P class=txtfifty>The Cabernet Sauvignon grape is perhaps the world?s most well-known grape, and for good reason: it is the principal variety used in making most Bordeaux wines, including those usually recognized as the world?s best. The Cabernet Sauvignon grape is late to ripen compared to other varieties, and requires a longer time to age in oak or bottle to bring out its complex flavors. Its thick skin enables ?Cab? to grow in a wide range of climates, so today it is grown throughout the world. Good examples of wines made from predominantly Cabernet Sauvignon include Chateau Cos d\'Estournel from Bordeaux, and Santa Rita?s Medalla Real Cabernet Sauvignon from Chile.</P>
<P class=txtfifty><STRONG>Flavor characteristics</STRONG>: black currants, cedar, green pepper, mint, dark chocolate, tobacco, olives.</P>
<HR width=\"70%\">

<P class=txtfifty align=right><A class=redlink href=\"http://www.asc-wines.com/grape_guide.asp#\">Back to top</A></P>
<P class=txtfifty><STRONG><A id=gamay name=gamay></A>Gamay</STRONG></P>
<P class=txtfifty>Gamay is a purple-colored grape variety used to make wines designed to be enjoyed young. It is most commonly grown in Beaujolais, France, and also grown quite extensively in the Loire Valley (notably Touraine). Traditionally, French wine lovers gather every year at the beginning of November to appreciate ?Beaujolais Nouveau? ? a Gamay wine produced and released only a few weeks after the harvest. Try the Chateau des Jacques Cru Moulin-a-vent from Beaujolais.</P>
<P class=txtfifty><STRONG>Flavor characteristics</STRONG>: strawberries, cherries, spice</P></TD></TR></TBODY></TABLE></DIV>
<P align=center><BR>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('43','38','2007-05-01 04:11:25','2007-05-14 09:05:33',NULL,NULL,'Testing Wine','T','0','T','','','','<H1 class=hdrcontent align=center>Testing Wine<BR></H1>
<P align=center><BR>&nbsp;</P>
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>
<TBODY>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/Wine-how.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ? just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>
<P class=txtfifty><STRONG>1. Sight </STRONG></P>
<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wine?s color can provide hints as to its age, degree of sweetness, grape variety ? even how it is made.</P>
<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>
<P class=txtfifty>Evaluate the wine?s color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>
<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wine?s color is part of its distinctive character ? try to use descriptive words when evaluating color.</P>
<P class=txtfifty><STRONG>2. Nose</STRONG></P>
<P class=txtfifty>The human sense of smell is actually more discerning than the sense of taste, and your nose can provide a significant amount of information about a particular wine before you taste it. The ?perfume? of a wine can vary significantly depending not just on its age and the types of grape(s) from which it is made, but also on the soils and weather of the region where the grapes were grown (the ?terroir?) and on the way in which it was aged (in oak barrels or stainless steel tanks). </P></TD></TR></TBODY></TABLE></DIV>
<P align=center><BR>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('44','38','2007-05-01 04:12:23','2007-05-01 04:12:23',NULL,NULL,'Exploring Wine','T','0','T','','',NULL,'<H1 class=hdrcontent>Exploring Wine<BR></H1><BR>
<TABLE cellSpacing=0 cellPadding=0 width=494 border=0>
<TBODY>
<TR bgColor=#993333>
<TD colSpan=2 height=2><BR></TD></TR>
<TR>
<TD colSpan=2>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/wine_regions.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD width=38 height=37>&nbsp;</TD>
<TD vAlign=bottom width=456><SPAN class=style4>Argentina</SPAN></TD></TR></TBODY></TABLE>
<TABLE width=606>
<TBODY>
<TR>
<TD width=31 height=93>&nbsp;</TD>
<TD vAlign=top width=563>
<P class=style7>It may come as a surprise to discover that Argentina is the fifth largest wine producing nation in the world.&nbsp; Until only a decade or two ago, nearly all Argentine wines were consumed locally ñ Argentineans at one time consumed 90 liters of wine per capita annually.&nbsp; But today, they drink only half as much wine, and Argentinean wine producers have turned their attention export markets.&nbsp; To compete with other global producers, some Argentine wineries have focused sharply on quality, producing wines that have gained favor with connoisseurs all over the world.</P></TD></TR></TBODY></TABLE>
<TABLE width=603>
<TBODY>
<TR>
<TD width=29>&nbsp;</TD>
<TD vAlign=center noWrap align=left width=206 height=421><IMG height=419 alt=\"\" src=\"http://www.asc-wines.com/images/Argentina%20map.gif\" width=189></TD>
<TD vAlign=top align=left width=352>
<P><SPAN class=style5><SPAN class=style6><SPAN class=style8><SPAN class=style10><STRONG>Geography and Climate</STRONG><BR>&nbsp;<BR>The ecology of the Andes mountain chain defines the character of the wines of Argentina.&nbsp; Most of the country is arid, but the ìrain shadowî of the Andes provides sufficient water for agriculture.&nbsp; The generally warm climate supports viniculture from the far north of Argentina ñ where the vineyards lie at the same latitude as Morocco ñ to the south, which is roughly at the same latitude as New Zealand. &nbsp;Vineyards are mostly planted at altitudes between 2,000 and 3,000 feet to exploit cooler temperatures.</SPAN></SPAN></SPAN></SPAN></P>
<P class=style7><STRONG>Grape Varieties</STRONG><BR>&nbsp;<BR>Argentina has a tradition of growing Spanish and Italian grape varieties like Tempranillo, Bonarda and Barbera that make wonderfully juicy berry and cherry-fruited reds.&nbsp; In recent years, in line with international tastes, Argentine growers have planted plenty of Chardonnay, Merlot, Cabernet Sauvignon.&nbsp; But two grape varieties in particular seem especially well-suited to growing conditions in Argentina.</P>
<P class=style7>The TorrontÈs grape makes terrifically fragrant, perfumed, yet rich and fruity white wines with crisp acidity and plenty of body. Malbec is a red variety that can produce wines with excellent structure.&nbsp; While some other wine regions (like Cahors in France) also employ Malbec, Argentinian Malbecs are considered by many the best in the world, with powerful, smooth deeply-fruited inky black wines full of spice and character. </P></TD></TR></TBODY></TABLE><BR>',NULL,'1');#%%
INSERT INTO menu VALUES ('45','38','2007-05-01 04:13:15','2007-05-14 09:02:24',NULL,NULL,'Storing & Service','T','0','T','','','','<H1 class=hdrcontent align=center>Storing &amp; Service<BR></H1>
<P align=center><BR>&nbsp; </P>
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/how_to_store.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty>The Romans knew that some wines improved with age, but until the 1700s, glass bottles were rare and expensive, and the use of natural cork (made from the bark of the Cork Oak tree) was not widespread.</P>
<P class=txtfifty>Once corked wine bottles were more widely available, the attention of winemakers turned to discovering the conditions of wine storage that produced the finest wines. This is what they learned over the past 300 years: </P>
<P class=txtfifty><STRONG>Temperature</STRONG><BR>The two worst enemies of wine are extreme temperatures and fluctuating temperatures. A constant temperature of 10-14?C (50-57?F) is considered ideal for aging wine. Temperatures a few degrees cooler or warmer are acceptable, but rapid fluctuations in temperature are to be avoided at all costs. Wine cellars ? essentially, natural or manmade caves in the earth ? are the best place for wine conservation, as they naturally maintain stable temperatures and other ideal conditions. Today?s wine refrigerators simply recreate using scientific methods the climate found in natural cellars.</P>
<P class=txtfifty><STRONG>Darkness</STRONG><BR>Light rapidly degrades wine through irreversible oxidation of the tannins. Ultraviolet light (UV) is especially dangerous, as UV penetrates even the dark green glass used to make many wine bottles. White wines and sparkling wines are more frequently bottled in clear glass, making them even more susceptible to light damage. This storage rule is simple: wine should be stored in total darkness.</P></TD></TR></TBODY></TABLE></DIV>
<P align=center><BR>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('46','38','2007-05-01 04:14:05','2007-05-14 09:04:27',NULL,NULL,'Food & Wine','T','0','T','','','','<H1 class=hdrcontent align=center>Food &amp; Wine<BR></H1>
<P align=center><BR><BR>&nbsp;</P>
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>
<TBODY>
<TR bgColor=#993333>
<TD height=2><BR></TD></TR>
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>
<TBODY>
<TR>
<TD width=40><BR></TD>
<TD width=175 bgColor=#993333><IMG height=21 src=\"http://www.asc-wines.com/images/food_and_wine.jpg\" width=194></TD>
<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD>&nbsp;</TD></TR>
<TR>
<TD>
<P class=txtfifty>There was once a time when grape wine was consumed almost exclusively in Western countries, and enjoyed only with Western cuisine. Before the internationalization of wine and the explosion of interest in global cuisines, \"red wine with meat, white wine with fish\" was the only guideline that wine lovers needed to select wines to accompany their meals. Today, wine is available all over the world, and is enjoyed with dishes from every food tradition imaginable. Thus, choosing wine to go with your meal is no longer a red-and-white issue: the wide range of choices we enjoy today means that we must learn more about food and wine pairing in order to maximize our enjoyment.</P>
<P class=txtfifty>Let\'s start from the finish: how does one measure the success of a particular food and wine combination? Obviously, it is a highly subjective matter, but in general, we can say that success in food and wine pairing is achieved when the enjoyment generated by a particular combination exceeds the enjoyment which would have been reached by consuming each individually - when the whole exceeds the sum of the parts, so to speak.</P>
<P class=txtfifty><STRONG>To choose a wine to go with a particular dish, ask yourself:</STRONG></P>
<UL>
<LI><I>What is the dominant flavor of the dish?</I></LI>
<LI><EM>What is the most important ingredient ? e.g., white or red meat, seafood, a vegetable, pasta, rice? </EM></LI>
<LI><I>What is the texture of the dish? Light or heavy? Dry or moist? Crispy or tender?</I></LI>
<LI><I>Is a sauce an important element in the dish? Is the sauce sweet, sour, salty, or spicy? Is it strong or subtle?</I></LI></UL></TD></TR></TBODY></TABLE></DIV>
<P align=center><BR>&nbsp;</P>',NULL,'1');#%%
INSERT INTO menu VALUES ('47','4','2007-04-17 15:10:52','2007-04-17 15:10:52',NULL,NULL,'Vine Wine Boutique Bar & Cafe','T','1','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('48','4','2007-04-17 15:08:52','2007-04-17 15:08:52',NULL,NULL,'Catering','T','1','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('49','48','2007-05-01 04:18:20','2007-05-01 04:18:20',NULL,NULL,'Catering Menu','T','0','T','','',NULL,'<DIV style=\"FONT-SIZE: 0px; Z-INDEX: -100; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\">Hacking, Viethacker ,VNhacker , Security , Bug , Advisory , Exploit , Thiet ke web, web design, cheapest web design, low cost web design, best web design, dang ky ten mien, domain, luu tru web, hosting, software, software development, phat trien phan mem, phan mem, webdesign, e-commerce, web development, Internet, e-marketing, designer, register domain, free tool. </DIV>
<FORM id=Form name=Form action=../S-Portal.aspx?tabid=27 method=post encType=multipart/form-data>
<TABLE height=\"100%\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>
<TBODY>
<TR>
<TD><BR>
<DIV class=hdrcontent>
<H1 class=hdrcontent>Catering<BR></H1><BR>
<DIV class=hdrbotcor><IMG height=5 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=590 border=0></DIV>
<TABLE style=\"WIDTH: 590px; HEIGHT: 160px\" cellSpacing=0 cellPadding=0 border=0>
<TBODY>
<TR>
<TD><IMG height=10 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=588 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD></TR>
<TR>
<TD class=bdrdkgray><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px\"><A href=\"http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW\"><IMG style=\"WIDTH: 128px; HEIGHT: 110px\" alt=\"Wine Club: Grand Tour\" src=\"http://www.wine.com/images/wineclub/img_wow_club_home.jpg\" border=0></A></DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><SPAN style=\"LINE-HEIGHT: 30px\"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>
<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>
<LI><FONT size=+0><A href=\"http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html\"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE>
<DIV class=hdrbotcor><IMG height=5 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=590 border=0></DIV>
<TABLE style=\"WIDTH: 590px; HEIGHT: 160px\" cellSpacing=0 cellPadding=0 border=0>
<TBODY>
<TR>
<TD><IMG height=10 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=588 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD></TR>
<TR>
<TD class=bdrdkgray><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px\"><A href=\"http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW\"><IMG style=\"WIDTH: 128px; HEIGHT: 110px\" alt=\"Wine Club: Grand Tour\" src=\"http://www.wine.com/images/wineclub/img_wow_club_home.jpg\" border=0></A></DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><SPAN style=\"LINE-HEIGHT: 30px\"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>
<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>
<LI><FONT size=+0><A href=\"http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html\"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE><BR></DIV>
<DIV class=hdrbotcor><IMG height=5 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=590 border=0></DIV>
<TABLE style=\"WIDTH: 590px; HEIGHT: 160px\" cellSpacing=0 cellPadding=0 border=0>
<TBODY>
<TR>
<TD><IMG height=10 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=588 border=0></TD>
<TD><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD></TR>
<TR>
<TD class=bdrdkgray><IMG height=1 alt=\"\" src=\"http://cache.wine.com/images/clear.gif\" width=1 border=0></TD>
<TD>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px\"><A href=\"http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW\"><IMG style=\"WIDTH: 128px; HEIGHT: 110px\" alt=\"Wine Club: Grand Tour\" src=\"http://www.wine.com/images/wineclub/img_wow_club_home.jpg\" border=0></A></DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><SPAN style=\"LINE-HEIGHT: 30px\"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>
<DIV style=\"PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px\"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>
<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>
<LI><FONT size=+0><A href=\"http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html\"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE><BR></TD></TR></TBODY></TABLE></FORM>',NULL,'1');#%%
INSERT INTO menu VALUES ('51','47','2007-04-17 15:13:28','2007-04-17 15:13:28',NULL,NULL,'Menus & Food Photos','T','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('52','47','2007-04-17 15:14:09','2007-04-17 15:14:09',NULL,NULL,'Beverage','T','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('53','14','2007-04-17 15:38:33','2007-04-17 15:38:33',NULL,NULL,'Th?ng tin','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('54','14','2007-04-17 15:40:51','2007-04-17 15:40:51',NULL,NULL,'Gi?i th??ng','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('55','14','2007-04-17 15:41:45','2007-04-17 15:41:45',NULL,NULL,'Gi?m ??c','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('56','15','2007-04-17 15:50:11','2007-04-17 15:50:11',NULL,NULL,'Qu?y R??u & Qu?n Caf','F','1','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('57','56','2007-04-17 15:51:21','2007-04-17 15:51:21',NULL,NULL,'??t ch?','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('58','56','2007-04-17 15:53:06','2007-04-17 15:53:06',NULL,NULL,'Th?c ??n v? ?? ?n','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('59','56','2007-04-17 15:54:43','2007-04-17 15:54:43',NULL,NULL,'?? u?ng','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('60','16','2007-04-17 16:06:19','2007-04-17 16:06:19',NULL,NULL,'T?m hi?u v? r??u','F','1','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('62','60','2007-04-17 16:08:40','2007-04-17 16:08:40',NULL,NULL,'??c ?i?m c?a r??u','F','1','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('63','62','2007-04-17 16:08:03','2007-04-17 16:08:03',NULL,NULL,'Lo?i r??u','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('64','62','2007-04-17 16:11:03','2007-04-17 16:11:03',NULL,NULL,'R??u nho','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('65','62','2007-04-17 16:12:48','2007-04-17 16:12:48',NULL,NULL,'R??u th?','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('66','62','2007-04-17 16:13:55','2007-04-17 16:13:55',NULL,NULL,'Exploring wine','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('67','62','2007-04-17 16:15:20','2007-04-17 16:15:20',NULL,NULL,'D?ch v?','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('68','0','2007-05-02 18:34:14','2007-05-11 15:15:48',NULL,NULL,'V·ªÅ Vine','F','0','T','<IMG src=\"http://192.168.1.254/xampp/Vis_web/Photos/1.jpg\">','',NULL,'<P><FONT style=\"BACKGROUND-COLOR: #f4f4f4\">Nh? ?? Vine</FONT></P>',NULL,'2');#%%
INSERT INTO menu VALUES ('70','22','2007-04-18 15:42:32','2007-04-18 15:42:32',NULL,NULL,'Who is who','F','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('73','71','2007-04-18 16:09:31','2007-04-18 16:09:31',NULL,NULL,'Who is who','T','0','T',NULL,'',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('75','4','2007-05-01 22:31:12','2007-05-01 22:31:12',NULL,NULL,'Reservation','T','0','T','','',NULL,'',NULL,'0');#%%
INSERT INTO menu VALUES ('78','9','2007-05-11 16:44:06','2007-05-11 16:44:06',NULL,NULL,'Ha Noi Head Office','T','0','T','','',NULL,'<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><B><SPAN style=\"FONT-SIZE: 13pt\"><?xml:namespace prefix = o ns = \"urn:schemas-microsoft-com:office:office\" /><o:p><FONT face=\"Times New Roman\">&nbsp;</FONT></o:p></SPAN></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><B><SPAN style=\"FONT-SIZE: 14pt; mso-bidi-font-size: 13.0pt\"><FONT face=\"Times New Roman\">RECRUITMENT NOTICE<o:p></o:p></FONT></SPAN></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify\"><SPAN style=\"FONT-SIZE: 13pt\"><o:p><FONT face=\"Times New Roman\">&nbsp;</FONT></o:p></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify\"><SPAN style=\"FONT-SIZE: 13pt\"><FONT face=\"Times New Roman\">The Vine Quality Hospitality Group ? is expanding&nbsp;&amp; we are seeking dynamic, enthusiastic quality minded team player&nbsp;to join our&nbsp;team in the following positions for Ha Noi Head Office.&nbsp;We offer very competitive benefits, wages and a challenging yet rewarding environment with excellent opportunities for advancement.<o:p></o:p></FONT></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><SPAN style=\"FONT-SIZE: 10pt; COLOR: purple; FONT-FAMILY: Arial\"><o:p>&nbsp;</o:p></SPAN></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><U><FONT size=3><FONT face=\"Times New Roman\">1. Kitchen Secretary: 01 position<o:p></o:p></FONT></FONT></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT face=\"Times New Roman\" size=3>&nbsp;- Good computer skill of Word, Excel</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=3><FONT face=\"Times New Roman\"><SPAN style=\"mso-spacerun: yes\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN>- Good English speaking and writing skill.</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT size=3><FONT face=\"Times New Roman\"><SPAN style=\"mso-spacerun: yes\">&nbsp;</SPAN>-&nbsp;Flexible on time, enthusiasm and suitable for team work.</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT size=3><FONT face=\"Times New Roman\"><SPAN style=\"mso-spacerun: yes\">&nbsp;</SPAN>- Well organize in filling documents and follow the Company?s regulation</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT size=3><FONT face=\"Times New Roman\"><SPAN style=\"mso-spacerun: yes\">&nbsp;</SPAN>-&nbsp;Graduate from any College</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT size=3><FONT face=\"Times New Roman\"><SPAN style=\"mso-spacerun: yes\">&nbsp;</SPAN>-&nbsp;<SPAN lang=VI style=\"mso-ansi-language: VI\">Priority </SPAN>the person has <SPAN lang=VI style=\"mso-ansi-language: VI\">knowledge</SPAN> of the Food safety management system</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in\"><FONT face=\"Times New Roman\" size=3></FONT>&nbsp;</P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><FONT size=3><FONT face=\"Times New Roman\"><U>2. Banquet Sales Coordinator (male/female)</U>: 01 position<o:p></o:p></FONT></FONT></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good communication skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Advanced English skills, both speaking and writing</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good computer skills in Word, Excel, Email</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours, smart, enthusiastic and teambuilding</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Organization skills in filling documents, preparing emails, contracts and function orders</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Skills and sense in organizing catering proposals</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Experience in F&amp;B and Sales strongly requested</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good sense of grooming and presentation</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><U><FONT size=3><FONT face=\"Times New Roman\">3. Host-Hostess (male/female): 02 positions<o:p></o:p></FONT></FONT></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good communication skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Advanced English skills in speaking</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Attractive, smart and enthusiastic</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good computer skills of Word, Excel</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good time management and organization skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><U><o:p><SPAN style=\"TEXT-DECORATION: none\"><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><U><o:p><SPAN style=\"TEXT-DECORATION: none\"><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B><U><FONT size=3><FONT face=\"Times New Roman\">4. Bartender (male): 02 positions<o:p></o:p></FONT></FONT></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Cocktail skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Beverage skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Experience in bartending strongly requested</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Basic English skills in speaking</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Hardworking, honest, teambuilding and enthusiastic</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Organization skills</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good sense of cleaning and hygiene</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in\"><FONT face=\"Times New Roman\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Willing to work over time or late</FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B style=\"mso-bidi-font-weight: normal\"><FONT size=3><FONT face=\"Times New Roman\">5. <SPAN style=\"mso-bidi-font-weight: bold\">Import-Export Staff: 01 position </SPAN></FONT></FONT></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Graduate from any College related to Trading</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>At least 2 years dealing with Import-Export activities</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Good English speaking and writing skill.</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Good computer skill of Word, Excel</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Flexible on time, enthusiasm and suitable for team work.</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Well organize in filling documents and follow the Company?s regulation</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><B style=\"mso-bidi-font-weight: normal\"><FONT size=3><FONT face=\"Times New Roman\">6. <SPAN style=\"mso-bidi-font-weight: bold\">Local Purchaser: 01 position<o:p></o:p></SPAN></FONT></FONT></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Requirement: </FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>At least 2 years dealing with Purchasing activities</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Flexible on time, enthusiasm and suitable for team work.</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Honest, well organize in filling documents and follow the Company?s regulation.</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in\"><SPAN style=\"FONT-FAMILY: \'Comic Sans MS\'; mso-fareast-font-family: \'Comic Sans MS\'; mso-bidi-font-family: \'Comic Sans MS\'\"><SPAN style=\"mso-list: Ignore\"><FONT size=3>-</FONT><SPAN style=\"FONT: 7pt \'Times New Roman\'\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face=\"Times New Roman\" size=3>Basic English, daily communication.</FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><SPAN style=\"FONT-SIZE: 8pt; COLOR: purple; FONT-FAMILY: \'Comic Sans MS\'\"><o:p>&nbsp;</o:p></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><I style=\"mso-bidi-font-style: normal\"><SPAN style=\"FONT-SIZE: 13pt\"><FONT face=\"Times New Roman\">Interested candidates can send their typed Resume CV, cover letter with supporting documents and references to: Vine Group Head Office, No 45 Au Co, Tay Ho, Hanoi Or email to: </FONT><A href=\"mailto:vine@vine-group.com\"><FONT face=\"Times New Roman\">vine@vine-group.com</FONT></A><FONT face=\"Times New Roman\"> (email capacity does not exceed 1MB). <o:p></o:p></FONT></SPAN></I></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><SPAN style=\"FONT-SIZE: 13pt\"><o:p><FONT face=\"Times New Roman\">&nbsp;</FONT></o:p></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><B style=\"mso-bidi-font-weight: normal\"><I style=\"mso-bidi-font-style: normal\"><SPAN style=\"FONT-SIZE: 13pt\"><FONT face=\"Times New Roman\">Deadline for application: June 7<SUP>th</SUP> 2007. Early application is priority<o:p></o:p></FONT></SPAN></I></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>',NULL,'0');#%%
INSERT INTO menu VALUES ('79','9','2007-05-11 16:45:07','2007-05-11 16:45:07',NULL,NULL,'HCM office','T','0','T','','',NULL,'<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: center\" align=center><B><FONT size=3><FONT face=\"Times New Roman\">RECRUITMENT NOTICE<?xml:namespace prefix = o ns = \"urn:schemas-microsoft-com:office:office\" /><o:p></o:p></FONT></FONT></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify\"><FONT size=3><FONT face=\"Times New Roman\">The Vine Quality Hospitality Group is expanding&nbsp;&amp; we are seeking dynamic, enthusiastic quality minded team players&nbsp;to join our&nbsp;team in the following positions for HCM Branch.&nbsp;We offer very competitive benefits, wages and a challenging yet rewarding environment with excellent opportunities for advancement.<o:p></o:p></FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify\"><B><U><o:p><SPAN style=\"TEXT-DECORATION: none\"><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: center\" align=center><FONT face=\"Times New Roman\"><B><U><SPAN style=\"FONT-SIZE: 16pt; COLOR: blue; mso-bidi-font-size: 12.0pt\">General accountant: 1 position</SPAN></U></B><SPAN style=\"FONT-SIZE: 16pt; mso-bidi-font-size: 12.0pt\"><o:p></o:p></SPAN></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify\"><SPAN style=\"COLOR: navy\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify\"><SPAN style=\"COLOR: navy\"><FONT size=3><FONT face=\"Times New Roman\">Responsible for HCM branch office accounting and financial issue. <o:p></o:p></FONT></FONT></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify\"><SPAN style=\"COLOR: navy\"><FONT size=3><FONT face=\"Times New Roman\">Direct reporting to Finance Controller and Managing Director<o:p></o:p></FONT></FONT></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify\"><SPAN style=\"COLOR: navy\"><FONT size=3><FONT face=\"Times New Roman\">Degree in Accounting and Finance prefereable, at least 3 years working experience, honest, responsible, team player spirits, work under pressure. Good English, strong analytical skill and management skill. Experience to deal with tax finalization would be an advantage.<o:p></o:p></FONT></FONT></SPAN></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT size=3><FONT face=\"Times New Roman\">Interested candidates can send their typed Resume in English with supporting documents and references to: Vine Group Head Office, no 45 Au Co, Tay Ho, <?xml:namespace prefix = st1 ns = \"urn:schemas-microsoft-com:office:smarttags\" /><st1:place w:st=\"on\"><st1:City w:st=\"on\">Hanoi</st1:City></st1:place>. <o:p></o:p></FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><FONT face=\"Times New Roman\" size=3>Or email to: </FONT><A href=\"mailto:vine@vine-group.com\"><FONT face=\"Times New Roman\" size=3>vine@vine-group.com</FONT></A><FONT size=3><FONT face=\"Times New Roman\">; <I style=\"mso-bidi-font-style: normal\">Deadline to submit: April 10<SUP>th</SUP> 2007.<o:p></o:p></I></FONT></FONT></P>
<P class=MsoNormal style=\"MARGIN: 0in 0in 0pt\"><o:p><FONT face=\"Times New Roman\" size=3>&nbsp;</FONT></o:p></P>',NULL,'0');#%%


DROP TABLE IF EXISTS menu_t;#%%
CREATE TABLE menu_t (
    ID bigint(20) NOT NULL auto_increment,
    menuID bigint(20),
    Name_E varchar(50),
    Name_V varchar(50),
    Queue int(11),
    Have_Content enum('F','T') DEFAULT 'F' NOT NULL,
    Status enum('F','T') DEFAULT 'T',
   PRIMARY KEY (ID)
);#%%

INSERT INTO menu_t VALUES ('1','0','About Vine',NULL,'1','F','T');#%%
INSERT INTO menu_t VALUES ('2','0','News, Events & Activities',NULL,'2','F','T');#%%
INSERT INTO menu_t VALUES ('3','0','Reservation',NULL,'3','F','T');#%%
INSERT INTO menu_t VALUES ('4','0','Vine Restaurant',NULL,'4','F','T');#%%
INSERT INTO menu_t VALUES ('5','0','Vine Wine',NULL,'5','F','T');#%%
INSERT INTO menu_t VALUES ('6','0','Cigar - Casa Habana',NULL,'6','F','T');#%%
INSERT INTO menu_t VALUES ('7','0','Vine Cellar',NULL,'7','F','T');#%%
INSERT INTO menu_t VALUES ('8','0','Vine Annex Arts & Antique',NULL,'8','F','T');#%%
INSERT INTO menu_t VALUES ('9','0','Employment',NULL,'9','F','T');#%%
INSERT INTO menu_t VALUES ('10','0','Vine Gallery',NULL,'10','F','T');#%%
INSERT INTO menu_t VALUES ('11','0','Contact Us',NULL,'11','F','T');#%%
INSERT INTO menu_t VALUES ('12','1','Vine by Press',NULL,'1','F','T');#%%
INSERT INTO menu_t VALUES ('13','1','Vine Awards',NULL,'2','F','T');#%%
INSERT INTO menu_t VALUES ('14','1','Donald & Team',NULL,'3','F','T');#%%
INSERT INTO menu_t VALUES ('15','11','Customer Comments',NULL,'1','F','T');#%%
INSERT INTO menu_t VALUES ('16','11','Who is who',NULL,'2','F','T');#%%


DROP TABLE IF EXISTS news;#%%
CREATE TABLE news (
    NewsID bigint(20) NOT NULL auto_increment,
    CreateDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    NewsCode varchar(100),
    NewsDate datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    SChnHeader varchar(100),
    TChnHeader varchar(100),
    EngHeader varchar(100),
    SChnSDesc varchar(255),
    TChnSDesc varchar(255),
    EngSDesc varchar(255),
    SChnLDesc text,
    TChnLDesc text,
    EngLDesc text,
    ShowInIndex enum('T','F') DEFAULT 'T' NOT NULL,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    Queue bigint(20) DEFAULT '1' NOT NULL,
   PRIMARY KEY (NewsID)
);#%%

INSERT INTO news VALUES ('1','2006-06-26 15:44:55','2006-04-02 23:43:39','N0001','2006-02-19 00:00:00','','','testing','','','Testing','','','<P><FONT style=\"BACKGROUND-COLOR: #f5f0dc\">Testing222</FONT></P>','T','T','1');#%%
INSERT INTO news VALUES ('5','2006-06-26 14:54:53','2006-06-26 14:54:53','','2006-06-26 00:00:00','','','','','','','','','','F','T','0');#%%
INSERT INTO news VALUES ('6','2006-06-26 14:55:54','2006-06-26 14:55:54','Worlddidac 2006','2006-06-26 00:00:00','','','Worlddidac Header','','','','','','<P>test test test test content</P>
<P><STRONG><EM><U>nfopwnefqwe</U></EM></STRONG></P>','T','T','0');#%%


DROP TABLE IF EXISTS product;#%%
CREATE TABLE product (
    ProdID bigint(20) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ProdCode varchar(30),
    TChnHeader varchar(50),
    SChnHeader varchar(50),
    EngHeader varchar(100),
    VnHeader varchar(100),
    TChnSDesc varchar(100),
    SChnSDesc varchar(100),
    EngSDesc text,
    EngLDesc text,
    TChnLDesc text,
    SChnLDesc text,
    Queue bigint(20) DEFAULT '1' NOT NULL,
    EngSpec text,
    EngLpec text,
    TChnSpec text,
    SChnSpec text,
    Price1 varchar(25),
    Price2 varchar(25),
    Price3 varchar(25),
    PriceDiscount1 varchar(25),
    PriceDiscount2 varchar(25),
    PriceDiscount3 varchar(25),
    TChnFeat text,
    SChnFeat text,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    ShowInIndex enum('T','F') DEFAULT 'F' NOT NULL,
    Remark text,
    sPhoto text,
    lPhoto text,
    FamilyID bigint(20) DEFAULT '0' NOT NULL,
    CatID bigint(20) DEFAULT '0' NOT NULL,
   PRIMARY KEY (ProdID),
   UNIQUE ProdCode (ProdCode)
);#%%

INSERT INTO product VALUES ('12','2007-05-09 15:24:41','2007-05-09 15:24:41','AM1230B',NULL,NULL,'Magnifier','','',NULL,'sdfgsdfg','<P><STRONG>Our magnifiersnakbkqwbqq</STRONG></P>',NULL,NULL,'0','specificataions!!! ','dfgdfg',NULL,NULL,'11','11','11','11','11','11','','','T','','Other remarks!!','<P><IMG height=81 src=\"/vine/Photos/8.jpg\" width=82></P>','<IMG height=192 src=\"/pmp/pic/category/AM1230_1.jpg\" width=256>','0','0');#%%
INSERT INTO product VALUES ('10','2007-05-07 15:51:29','2007-05-16 07:48:25','A00123',NULL,NULL,'Test2','','',NULL,'sdfsd','Testing Desp',NULL,NULL,'1','<P>sfsd</P>','',NULL,NULL,'12','12','','','','','','','F','T','','<P><IMG style=\"WIDTH: 81px; HEIGHT: 83px\" height=108 src=\"/pmp/pic/category/main_pic_maths.gif\" width=91></P>','<P><IMG height=320 src=\"http://www.hipest.com/pmp/pic/category/AM1230.jpg\" width=320></P>','0','0');#%%
INSERT INTO product VALUES ('13','2007-05-09 15:25:13','2007-05-14 12:19:59','AM1460',NULL,NULL,'Precision Balance','','',NULL,'','Precision Balance',NULL,NULL,'0','specifications','',NULL,NULL,'12','12','12','12','12','12','','','T','','','<P><IMG style=\"WIDTH: 83px; HEIGHT: 90px\" height=161 src=\"/vine/Photos/zicafe-vn.jpg\" width=105></P>','<IMG height=192 src=\"/pmp/pic/category/AM1460W.jpg\" width=256>','0','0');#%%
INSERT INTO product VALUES ('11','2007-05-09 15:25:54','2007-05-09 15:25:54','M123',NULL,NULL,'M','sdfsdf','sdfsdf',NULL,'','<P>jhnibhjhb</P>',NULL,NULL,'0','s','',NULL,NULL,'13','13','13','13','13','13',NULL,'','T','T','','<IMG src=\"/pmp/pic/category/main_pic_tiles.gif\">','<P><IMG height=192 src=\"/pmp/pic/category/AE1331-1.JPG\" width=256></P>','0','0');#%%
INSERT INTO product VALUES ('14','2007-05-09 15:26:36','2007-05-09 15:26:36','12',NULL,NULL,'test12','qweqw','qweqw',NULL,'qweqw','kuyfkgvtgjygki',NULL,NULL,'0','asdfasdf','qweqwe',NULL,NULL,'14','14','14','14','14','14','asdfsa','sdfsd','T','T','sdfsd','<P><IMG style=\"WIDTH: 88px; HEIGHT: 90px\" height=120 src=\"/vine/Photos/9.jpg\" width=88></P>','sdfsd','0','0');#%%
INSERT INTO product VALUES ('15','2007-05-09 15:27:12','2007-05-09 15:27:12','Product1',NULL,NULL,'Name Eng','sdfsdf','sdfsdf',NULL,'','Product1',NULL,NULL,'0','Product1','',NULL,NULL,'15','15','15','15','15','15','12','adfs','T','T','asdf','<IMG style=\"WIDTH: 86px; HEIGHT: 92px\" height=120 src=\"/vine/Photos/9.jpg\" width=86>','<IMG src=\"/vine/Photos/9.jpg\">','0','0');#%%
INSERT INTO product VALUES ('16','2007-04-18 03:06:24','2007-04-18 03:06:24','rqwerqw',NULL,NULL,'qwerwe',NULL,'wqerw',NULL,NULL,'qwerwe',NULL,NULL,'0','werwe',NULL,NULL,NULL,'werw','',NULL,NULL,NULL,NULL,'werwe','werwe','T','T','werwe','werwe','werwe','0','0');#%%
INSERT INTO product VALUES ('17','2007-05-09 15:19:19','2007-05-09 15:19:19','Test 1',NULL,NULL,'Coffee','sdfsdf','sdfsdf',NULL,'sdfsdf','Afds',NULL,NULL,'0','sdf','sdfsdf',NULL,NULL,'100','sfsd','sdfsd','sdfsd','sdfsd','sdfs','12143','qew','T','T','eqw','<IMG style=\"WIDTH: 83px; HEIGHT: 89px\" height=507 src=\"/vine/Photos/Sunset.jpg\" width=612>','<IMG style=\"WIDTH: 205px; HEIGHT: 218px\" height=485 src=\"/vine/Photos/Sunset.jpg\" width=610>','0','0');#%%


DROP TABLE IF EXISTS productarea;#%%
CREATE TABLE productarea (
    ProdAreaID bigint(20) NOT NULL auto_increment,
    ProdID bigint(20) DEFAULT '0' NOT NULL,
    AreaID bigint(20) DEFAULT '0' NOT NULL,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (ProdAreaID),
   UNIQUE ProdID (ProdID, AreaID)
);#%%



DROP TABLE IF EXISTS productcategory;#%%
CREATE TABLE productcategory (
    CategoryID int(10) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    CategoryName varchar(255),
    CategoryNameVn varchar(255),
    Note text,
    ViewStatus enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (CategoryID)
);#%%

INSERT INTO productcategory VALUES ('2','2007-05-15 15:18:35','2007-05-15 19:29:59','Category_En','Category_Vn','sdfsdf','T');#%%
INSERT INTO productcategory VALUES ('3','2007-05-16 00:06:02','2007-05-16 00:06:02','sdfgasdg','sdfs','','T');#%%
INSERT INTO productcategory VALUES ('4','2007-05-16 00:06:44','2007-05-16 00:06:44','sdfs','sdfs','sdfsd','T');#%%


DROP TABLE IF EXISTS productcategoryinfamily;#%%
CREATE TABLE productcategoryinfamily (
    productcategoryinfamilyID int(10) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    FamilyID varchar(255),
    CategoryID varchar(255),
    Note text,
    ViewStatus enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (productcategoryinfamilyID)
);#%%

INSERT INTO productcategoryinfamily VALUES ('6',NULL,'0000-00-00 00:00:00','1','2',NULL,'T');#%%


DROP TABLE IF EXISTS productfamily;#%%
CREATE TABLE productfamily (
    FamilyID int(10) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    Name varchar(255),
    NameVn varchar(255),
    Note text,
    ViewStatus enum('T','F') DEFAULT 'T' NOT NULL,
    ShowSub enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (FamilyID)
);#%%

INSERT INTO productfamily VALUES ('1','2007-05-10 10:34:33','2007-05-15 22:23:54','ProductFamily1','ProductFamily1_Vn','s?fsfs1','T','T');#%%
INSERT INTO productfamily VALUES ('2','2007-05-15 17:54:16','2007-05-15 22:21:35','ProductFamily2','ProductFamily2_Vn','sdfsdf','T','F');#%%


DROP TABLE IF EXISTS productsubcategory;#%%
CREATE TABLE productsubcategory (
    SubCategoryID int(10) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    SubCategoryName varchar(255),
    SubCategoryNameVn varchar(255),
    Note text,
    ViewStatus enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (SubCategoryID)
);#%%

INSERT INTO productsubcategory VALUES ('2','2007-05-15 15:57:55','2007-05-15 23:30:14','SubCategory1','SubCategory1_Vn','fsadfsdf2','T');#%%
INSERT INTO productsubcategory VALUES ('4','2007-05-15 16:51:41','2007-05-15 21:30:11','SubCategory2','SubCategory2_Vn','sdfsdf','T');#%%


DROP TABLE IF EXISTS productsubcategoryinfamily;#%%
CREATE TABLE productsubcategoryinfamily (
    productsubcategoryinfamilyID int(10) NOT NULL auto_increment,
    CreateDate timestamp,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    FamilyID varchar(255),
    SubCategoryID varchar(255),
    Note text,
    ViewStatus enum('T','F') DEFAULT 'T' NOT NULL,
   PRIMARY KEY (productsubcategoryinfamilyID)
);#%%

INSERT INTO productsubcategoryinfamily VALUES ('2',NULL,'0000-00-00 00:00:00','1','2',NULL,'T');#%%
INSERT INTO productsubcategoryinfamily VALUES ('3',NULL,'0000-00-00 00:00:00','2','4',NULL,'T');#%%


DROP TABLE IF EXISTS region;#%%
CREATE TABLE region (
    RegionID bigint(20) NOT NULL auto_increment,
    RegionName varchar(255) NOT NULL,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    CreateDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
   PRIMARY KEY (RegionID)
);#%%

INSERT INTO region VALUES ('1','EuropeAsiaAfrica','T','2006-03-01 11:12:11','2006-03-01 11:12:11');#%%
INSERT INTO region VALUES ('2','ALL','T','2006-03-01 11:12:05','2006-03-01 11:12:05');#%%
INSERT INTO region VALUES ('7','Middle East','T','2006-03-06 13:01:12','2006-03-06 13:01:12');#%%


DROP TABLE IF EXISTS useraccount;#%%
CREATE TABLE useraccount (
    LoginID varchar(20) NOT NULL,
    Password varchar(20) NOT NULL,
    UserName varchar(100) NOT NULL,
    Email varchar(100),
    LastLoginDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ActiveStatus enum('T','F') DEFAULT 'T' NOT NULL,
    DelRight enum('T','F') DEFAULT 'T' NOT NULL,
    AdminGroup varchar(11),
    CreateDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    ModifyDate timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
    UserID bigint(20) NOT NULL auto_increment,
   PRIMARY KEY (UserID),
   UNIQUE LoginID (LoginID)
);#%%

INSERT INTO useraccount VALUES ('admin','admin','Administrator','admin','2007-04-19 13:51:20','T','T','admin','2006-01-20 11:08:30','2007-04-19 13:51:20','1');#%%
INSERT INTO useraccount VALUES ('oper','oper','Operations','Oper','2007-04-20 10:13:51','T','T','oper','2007-04-19 13:54:00','2007-04-20 10:13:51','7');#%%
INSERT INTO useraccount VALUES ('user','user','Users','user','2007-04-19 13:54:51','T','T','user','2007-04-19 13:54:51','2007-04-19 13:54:51','8');#%%
INSERT INTO useraccount VALUES ('sdfsdf','1234','chi','sdfsd','0000-00-00 00:00:00','T','T','user','2007-05-03 21:56:29','2007-05-03 21:58:14','9');#%%


# Valid end of backup from MySql PHP Backup
