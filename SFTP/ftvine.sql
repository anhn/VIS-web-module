-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Sep 27, 2007 at 03:45 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `ftvine`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `advertise`
-- 

CREATE TABLE `advertise` (
  `CategoryID` int(20) NOT NULL auto_increment,
  `PCID` bigint(20) NOT NULL default '0',
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `TChnName` varchar(50) default NULL,
  `SChnName` varchar(50) default NULL,
  `EngName` varchar(100) default NULL,
  `ShowInIndex` enum('T','F') NOT NULL default 'F',
  `Queue` varchar(255) default NULL,
  `ActiveStatus` enum('T','F') NOT NULL default 'T',
  `Photo` text,
  PRIMARY KEY  (`CategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `advertise`
-- 

INSERT INTO `advertise` (`CategoryID`, `PCID`, `CreateDate`, `ModifyDate`, `TChnName`, `SChnName`, `EngName`, `ShowInIndex`, `Queue`, `ActiveStatus`, `Photo`) VALUES 
(1, 0, '2007-05-27 21:04:19', '2007-05-27 21:04:19', 'Right', NULL, '', 'T', '', 'T', '<P><IMG style="WIDTH: 105px; HEIGHT: 429px" height=248 src="/xampp/Vis_web/Photos/zicafe-vn.jpg" width=105></P>'),
(2, 0, '2007-05-27 21:05:05', '2007-05-27 21:05:05', 'Left', NULL, '', 'T', '', 'F', '<P><IMG style="WIDTH: 105px; HEIGHT: 435px" height=286 src="/xampp/Vis_web/Photos/adv-eng.jpg" width=105></P>');

-- --------------------------------------------------------

-- 
-- Table structure for table `characteristictype`
-- 

CREATE TABLE `characteristictype` (
  `ID` int(10) NOT NULL auto_increment,
  `Name` varchar(100) default NULL,
  `Notes` text,
  `ViewStatus` varchar(1) default NULL,
  `User` varchar(36) default NULL,
  `Date` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `characteristictype`
-- 

INSERT INTO `characteristictype` (`ID`, `Name`, `Notes`, `ViewStatus`, `User`, `Date`) VALUES 
(1, 'Size', 'GGGGGGGGGGGG', 'T', NULL, '2007-07-02 10:57:56'),
(2, 'Country', 'Search by country', 'T', 'abcdef', '0000-00-00 00:00:00'),
(3, 'test', '', 'T', NULL, '2007-09-25 10:18:19');

-- --------------------------------------------------------

-- 
-- Table structure for table `content`
-- 

CREATE TABLE `content` (
  `ID` bigint(20) NOT NULL auto_increment,
  `menuID` bigint(20) NOT NULL default '0',
  `Content_E` longtext,
  `Content_V` longtext,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `content`
-- 

INSERT INTO `content` (`ID`, `menuID`, `Content_E`, `Content_V`) VALUES 
(1, 2, '<TABLE width="100%" border=0 cellPadding=0 cellSpacing=0>\n<TBODY>\n<TR>\n   <TD width="2%" height="21" class=style7>&nbsp;</TD>\n                                                                                   <TD class=style7><br></TD>\n                                                                                 <TD height="21" colspan="3" class=style7>About Us</TD>\n                                                                                   <TD width="120" height="21" class=style7>&nbsp;</TD>\n                                                                                  </TR>\n<TR vAlign=top>\n  <TD colspan="2" align=middle vAlign=top><span class="bggray"><br>\n      <img alt="gift &#13;&#10;&#13;&#10;baskets" src="./images/1.jpg" border=0><br>\n     <img alt=accessories src="./images/3.jpg" border=0></span></TD>\n              <TD width="10" class=bggray><p>&nbsp;</p>                                                                               </TD>\n               <TD width="460" class=bggray><p><br>\n                                                                                VINE *** INTERNATIONAL So, here you are in this topsy-turvy city of motorbike traffic and chaos. You might have found yourself a pretty groovy hotel, but dining has been more adventurous than luxurious and exotic even when it was supposed to be familiar. Time to find Vine, a restaurant that is one of those special places that makes traveling in this part of the world so much fun. A good 10 to 15 minute ride north of the Old Quarter, the restaurant is on West Lake near the entrance to the Sheraton Hanoi. It caters to both discerning expats in the nearby lakeside neighborhood ? which so many embassy staff calls home ? as well as visiting foodies. Set up like an upscale bistro in San Francisco ? but with Hanoi prices ? Vine has an atmosphere, presentation, and cuisine that could stand on its own anywhere. As their name suggests, the wine list is deep, and the restaurant serves as one of the town?s biggest private importers of fine vintages ? the walls are literally lined with bottles ? and there is a small basement cellar where, donning a velvety tasting cloak to keep your shoulders warm, visitors can have a special evening of appetizers and wine tasting with the restaurant?s effusive steward, sampling from a selection of over 1,000 labels.</p>\n                                                                               <p>Dining areas look like a chic club''s interior, with ceilings draped in rich cloth like giant fans. The California/Vietnamese Gothic baroque d?cor is set against Zen-simple, elegant tables. And the food is spectacular, a mix of the familiar ? "I haven?t had a good salad in so long," the lady at the next table uttered ? and unique fusion dishes served in a chic, casual setting. Starters include nachos, quesadilias, a delectable tuna tartare, carpaccio, and fresh Vietnamese spring rolls, as well as a fiery gazpacho soup or Thai tom yum (a spicy, sweet and sour soup with lemon grass). The Ceasar salad is a classic. Homemade pastas are cooked to order (and take 20 min.) and they offer all kinds of special seafood dishes depending on what''s fresh that day (much is flown in from Nha Trang). The "D?Vine Beef Burger" is a savory treat of fresh ground beef topped with imported cheese, fried egg, and pickled peppers. Their pizzas and calzones are great, as are the many authentic Thai dishes. The braised lamb shank with garlic, red pepper, and truffled mushrooms is a highlight, as in the tuna steak with horseradish potatoes, lemon, and truffle oil. Desert is tiramisu or a rich chocolate mouse.</p></TD>\n                                                                              <TD width="10" class=bggray>&nbsp;</TD>\n                                                                             <TD class=bggray>&nbsp;</TD>\n                                                                            </TR>\n                                                                           <TR vAlign=top>\n                                                                             <TD colspan="6" align=middle vAlign=top>&nbsp;</TD>\n                                                                             </TR></TBODY></TABLE>', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `ID` int(15) NOT NULL auto_increment,
  `FirstName` varchar(255) default NULL,
  `LastName` varchar(255) default NULL,
  `Comment` text,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `customer`
-- 

INSERT INTO `customer` (`ID`, `FirstName`, `LastName`, `Comment`) VALUES 
(22, 'asdf', 'sdfa', 'sdfasdf'),
(5, 'Chinh', 'Chinh1', 'Chinh2'),
(23, 'asdfa', 'sdfasd', 'sadfasd'),
(24, 'nguyen van chinh', 'chinhnv@designcentral.vn', 'chÃ o má»«ng bÃ¡n Ä‘áº¿n vá»›i bá»n vá»› váº©n');

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `CategoryID` bigint(20) NOT NULL auto_increment,
  `PCID` bigint(20) NOT NULL default '0',
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `TChnName` varchar(50) default NULL,
  `SChnName` varchar(50) default NULL,
  `EngName` varchar(100) default NULL,
  `ShowInIndex` enum('T','F') NOT NULL default 'F',
  `Queue` int(11) NOT NULL default '0',
  `ActiveStatus` enum('T','F') NOT NULL default 'T',
  `sPhoto` text,
  `ActiveFile` enum('T','F') NOT NULL default 'F',
  `File` varchar(255) default NULL,
  `Photo` text,
  `FieldName` tinyint(3) unsigned default NULL,
  `Position` int(10) default NULL,
  `OutletID` int(10) NOT NULL,
  PRIMARY KEY  (`CategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` (`CategoryID`, `PCID`, `CreateDate`, `ModifyDate`, `TChnName`, `SChnName`, `EngName`, `ShowInIndex`, `Queue`, `ActiveStatus`, `sPhoto`, `ActiveFile`, `File`, `Photo`, `FieldName`, `Position`, `OutletID`) VALUES 
(1, 0, '2007-05-02 18:34:26', '2007-09-23 20:42:13', NULL, NULL, 'About Vine', 'T', 1, 'T', '<p><img style="width: 122px; height: 112px;" src="Photos/Sunset.jpg" border="0" height="519" width="621"></p>', 'F', 'sdfsd', '<p>&nbsp;</p>', NULL, 1, 1),
(16, 0, '2007-04-19 15:29:58', '2007-06-30 16:28:11', NULL, NULL, 'NhÃ  hÃ ng Vine', 'F', 0, 'T', '', '', '', '', NULL, 8, 0),
(2, 0, '2007-05-01 20:21:18', '2007-09-25 10:11:31', NULL, NULL, 'News,Events & Activities', 'T', 1, 'T', '<p><img style="width: 133px; height: 107px;" src="Photos/Blue%20hills.jpg" height="497" width="574"></p>', '', '', '<h1 class="hdrcontent">News, Events &amp; Activities</h1><br>\r\n<table border="0" cellpadding="0" cellspacing="0" width="616">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p class="txtfifty">Welcome to the ASC News with links to articles and press releases related to ASC Fine Wines and wine culture in China.</p></td></tr>\r\n<tr>\r\n<td>&nbsp;</td></tr>\r\n<tr>\r\n<td align="left" valign="top">\r\n<table border="0" cellpadding="0" cellspacing="0" width="590">\r\n<tbody>\r\n<tr bgcolor="#993333">\r\n<td height="2"><br></td></tr>\r\n<tr>\r\n<td>\r\n<table border="0" cellpadding="0" cellspacing="0" width="300">\r\n<tbody>\r\n<tr>\r\n<td width="45"><br></td>\r\n<td bgcolor="#993333" width="150"><img src="http://www.asc-wines.com/images/Press-latest.jpg" height="20" width="152"></td>\r\n<td>&nbsp;</td></tr></tbody></table></td></tr>\r\n<tr>\r\n<td height="10"><br></td></tr>\r\n<tr>\r\n<td align="right" valign="top">\r\n<table border="0" cellpadding="0" cellspacing="4" width="93%">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="17"><img src="http://www.asc-wines.com/images/four_square_ul.gif" height="16" width="16"></td>\r\n<td class="txt" valign="top" width="238"><a class="redlink" href="http://www.asc-wines.com/press-detail.asp?ID=40">Vine News 1</a><br>Cauris ferminqum diatucer kagna Sed bect aliquam leo<br>stero celsetur capiqus e </td>\r\n<td width="25">&nbsp;</td>\r\n<td valign="top" width="22"><img src="http://www.asc-wines.com/images/four_square_ul.gif" height="16" width="16"></td>\r\n<td class="txt" valign="top" width="223"><a class="redlink" href="http://www.asc-wines.com/press-detail.asp?ID=38">Vine News 3</a><br>Cauris ferminqum diatucer kagna Sed bect aliquam leo<br>stero celsetur capiqus e</td></tr>\r\n<tr>\r\n<td valign="top" width="17"><img src="http://www.asc-wines.com/images/four_square_ul.gif" height="16" width="16"></td>\r\n<td class="txt" valign="top" width="238"><a class="redlink" href="http://www.asc-wines.com/press-detail.asp?ID=37">Vine News 2</a><br>Cauris ferminqum diatucer kagna Sed bect aliquam leo<br>stero celsetur capiqus e</td>\r\n<td width="25">&nbsp;</td>\r\n<td valign="top" width="22"><img src="http://www.asc-wines.com/images/four_square_ul.gif" height="16" width="16"></td>\r\n<td class="txt" valign="top" width="223"><a class="redlink" href="http://www.asc-wines.com/press-detail.asp?ID=28">Vine News 4</a><br>Cauris ferminqum diatucer kagna Sed bect aliquam leo<br>stero celsetur capiqus e</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><br><br>', NULL, 3, 0),
(76, 2, '2007-05-11 16:04:50', '2007-09-25 11:36:53', NULL, NULL, 'New', 'T', 0, 'T', 'sÃ ', 'F', '', 'ZcZC', NULL, 1, 1),
(4, 0, '2007-05-01 22:30:37', '2007-09-25 10:13:24', NULL, NULL, 'Vine Restaurant', 'T', 1, 'T', '<img src="Vis_web/Photos/3.jpg">', '', '', '', NULL, 7, 0),
(5, 0, '2007-05-01 20:21:58', '2007-07-02 11:07:16', NULL, NULL, 'Vine Wine', 'T', 1, 'T', '<IMG src="http://192.168.1.254/xampp/Vis_web/Photos/4.jpg">', '', '', '<TABLE cellSpacing=1 cellPadding=2 width="100%" border=0>\r\n<TBODY>\r\n<TR>\r\n<TD class=tbAboutUs width="55%"><SPAN class=tbAboutUs>VINE NEW MENUS </SPAN></TD>\r\n<TD class=tbAboutUs width="45%"><SPAN class=tbAboutUs>VINE CELLAR - Wine Price List</SPAN> </TD></TR></TBODY></TABLE>\r\n<TABLE cellSpacing=1 cellPadding=2 width="100%" border=0>\r\n<TBODY>\r\n<TR>\r\n<TD class=tbAboutUs width="55%">\r\n<TABLE width=424>\r\n<TBODY>\r\n<TR>\r\n<TD class=tbAboutUs width=10></TD>\r\n<TD class=tbAboutUs width=140>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <IMG height=197 src="http://www.vine-group.com/menu.jpg" width=138> </TD>\r\n<TD width=241><SPAN class=tbAboutUs1><A href="http://www.vine-group.com/web/menu1.htm" target=blank>+ Vine General Menu </A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu2.jpg" target=blank>+ Vine''s Winter Luncheon </A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu3.jpg" target=blank>+ Vine Breakfast menu</A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/sunday.jpg" target=blank>+ Sunday Brunch</A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu4.jpg" target=blank>+ Vine Wine By Glass</A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu6.jpg" target=blank>+ Winter Gourmet Dinner Menu 2007 </A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/Vine%20menu%202006.Mar.html" target=blank>+ Delivery Menu Eng</A> <A href="http://www.vine-group.com/images/article/posterNoodle.jpg" target=blank>+ Asia Noodle </A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu9.htm" target=blank>+ Beverage-Cigar-Cigarette </A><BR><FONT size=1><BR></FONT><A href="http://www.vine-group.com/web/menu10.jpg" target=blank>+ Vine''s Gastronomic Delicacies </A><BR><FONT size=1><BR></FONT></SPAN></TD>\r\n<TD class=tbAboutUs width=13></TD></TR></TBODY></TABLE></TD>\r\n<TD class=tbAboutUs width="52%">\r\n<TABLE>\r\n<TBODY>\r\n<TR>\r\n<TD class=tbAboutUs>&nbsp;&nbsp; <IMG height=250 src="http://www.vine-group.com/images/article/cellartiny.jpg" width=317 border=0 hight="214"> </TD></TR></TBODY></TABLE>\r\n<TABLE width=344 align=center border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><A href="http://www.vine-group.com/web/restwinelist.htm"><FONT size=2><FONT size=2>Restaurant Wine List </FONT></FONT></A></TD>\r\n<TD><A href="http://www.vine-group.com/web/retailwinelist.htm"><FONT size=2><FONT size=2>Retail Wine List </FONT></FONT></A></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>', NULL, 9, 0),
(6, 0, '2007-04-19 15:20:38', '2007-04-19 15:20:38', NULL, NULL, 'Cigar-Casa Habana', 'T', 1, 'T', NULL, '', NULL, '', NULL, 11, 0),
(8, 0, '2007-04-19 15:21:41', '2007-05-14 19:12:46', NULL, NULL, 'Vine Annex Arts & Antique', 'T', 0, 'T', '', '', '', '', NULL, 15, 0),
(9, 0, '2007-04-19 15:26:50', '2007-05-14 19:13:18', NULL, NULL, 'Employment', 'T', 1, 'T', '<IMG style="WIDTH: 138px; HEIGHT: 126px" height=273 src="/xampp/Vis_web/Photos/workhard.jpg" width=397>', '', '', '', NULL, 17, 0),
(11, 0, '2007-04-19 15:31:13', '2007-05-14 19:13:52', NULL, NULL, 'Vine Gallery', 'T', 0, 'T', '', '', '', '', NULL, 19, 0),
(14, 0, '2007-05-02 18:34:20', '2007-06-30 16:27:59', NULL, NULL, 'Tin tá»©c, sá»± kiá»‡n táº¡i Vine', 'F', 0, 'T', '', '', '', '', NULL, 4, 0),
(17, 0, '2007-04-19 15:19:34', '2007-05-31 17:30:12', NULL, NULL, 'RÆ°á»£u vang Vine', 'F', 1, 'T', '', '', '', '', NULL, 10, 0),
(18, 0, '2007-04-19 15:29:42', '2007-09-23 20:30:52', NULL, NULL, 'XÃ¬ ga  - Casa Habana', 'F', 0, 'T', '', '', '', '', NULL, 12, 0),
(19, 0, '2007-04-19 15:21:51', '2007-09-23 20:28:04', NULL, NULL, 'PhÃ²ng tranh ', 'F', 0, 'T', '', '', '', '', NULL, 16, 0),
(20, 0, '2007-04-19 15:31:57', '2007-09-23 20:10:31', NULL, NULL, 'Tuyá»ƒn dá»¥ng', 'F', 0, 'T', '', '', '', '', NULL, 18, 0),
(21, 0, '2007-04-19 15:28:06', '2007-09-23 20:31:35', NULL, NULL, 'ThÆ° vien áº£nh', 'F', 0, 'T', '', '', '', '', NULL, 20, 0),
(22, 0, '2007-05-02 18:35:27', '2007-09-23 20:31:50', NULL, NULL, 'LiÃªn hÃª', 'F', 0, 'T', '<img src="http://192.168.1.254/xampp/Vis_web/Photos/5.jpg">', '', '', '', NULL, 22, 0),
(69, 22, '2007-04-18 15:41:59', '2007-05-31 18:46:51', NULL, NULL, 'Customer Comments(Vn)', 'F', 0, 'T', '', 'T', './vn_addcustomer.php', '', NULL, 1, 0),
(24, 1, '2007-05-01 03:57:10', '2007-06-30 23:32:53', NULL, NULL, 'Vine by Press', 'T', 0, 'T', '', '', '', '<table border="0" cellpadding="2" cellspacing="1" width="100%">\r\n<tbody>\r\n<tr>\r\n<td class="tbAboutUs">\r\n<p align="center"><span><a style="font-weight: bold;" href="http://www.vine-group.com/web/VineByPress2006.html"><font color="#000000" size="2">VINE BY PRESS Articles</font></a><font style="font-weight: bold;" color="#000000"> </font><a href="http://www.vine-group.com/vbp/" alt="click here to view entire gallery"><font color="white" size="2"><font style="font-weight: bold;" color="#000000">and Gallery</font> </font><img src="http://www.vine-group.com/new.gif" border="0"></a></span></p>\r\n<p align="center"><span><br></span></p></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">BUSINESS TRAVELLER ASIAN PACIFIC SEPTEMBER 2006 </span><img src="http://www.vine-group.com/new.gif" border="0"></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">Vine Wine Boutique Bar &amp; Cafe Hanoi?s ?home of wine? doubles as one of the country?s best restaurants. Owner Donald Berger has carefully selected over 1,000 varieties from Western Australian, Canada and Chile to choose from. Vine?s elegant cellar room can accommodate up to four diners. Its Vine annex hosts wine tastings, lectures and special events at least once a month. CONTACT: 1A &amp; 3 Xuan Dieu, Tay Ho, tel 84 4 719 8000?? <a href="http://www.vine-group.com/web/press/press_travel.pdf"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">Insight - Pocket Guide - Discovery Channel </span><img src="http://www.vine-group.com/new.gif" border="0"></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?Vine Wine Boutique, Bar &amp; Cafï¿½ 1A Xuan Dieu Street Tel: 04 719 8000 Canadian wine enthusiast and Chef Donald Berger runs this chic and intimate outfit, deservedly popular for its world-class wines and delicious food. Cuisine is an eclectic mix of global ?comfort foods?, including gourmet pizzas and Thai spaghetti. The cellar doubles as an intimate dining room ?? <a href="http://www.vine-group.com/web/press/discoverychannel.htm"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">Forbes Traveler -Best Wine </span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?Vine Wine Boutique. Chef Donald Berger serves sophisticated food with wines to match in this stylish space, which features a communal table and chic wine racks ?? <a href="http://www.forbestraveler.com/expert/food/7"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td class="newsDatum" align="left" valign="top">Frommers Vietnam 2006</td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?VINE *** INTERNATIONAL So, here you are in this topsy-turvy city of motorbike traffic and chaos. You might have found yourself a pretty groovy hotel, but dining has been more adventurous than luxurious and exotic even when it was supposed to be familiar. Time to find Vine, a restaurant that is one of those special places that makes traveling in this part of the world so much fun. A good 10 to 15 minute ride north of the Old Quarter, the restaurant is on West Lake near the entrance to the Sheraton Hanoi. It caters to both discerning expats in the nearby lakeside neighborhood ? which so many embassy staff calls home ? as well as visiting foodies. Set up like an upscale bistro in San Francisco ? but with Hanoi prices ? Vine has an atmosphere, presentation, and cuisine that could stand on its own anywhere. ?? <a href="http://www.vine-group.com/web/FrommersVietnam2006EN.html"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">LUXE CITY GUIDES </span></td></tr>\r\n<tr>\r\n<td align="left" valign="top">\r\n<p><span class="text"><strong>Restaurant: International/Asian: </strong></span><span class="text"><strong><br>Vine:</strong> Ripe, rustic and relax bistro with pan-global ingredients, rich, eclectic menu, gourmet pizzas, best cellar in town and jazzy sounds. Take sundowners at Summit Lounge and then supper here.</span><br><span class="text"><strong>Bars: Chill &amp; Hang</strong></span> <span class="text"><strong><br>Vine: </strong>Sophisticated, with great wines and good food, so you can make a night of it. </span><br><span class="text"><strong>Art</strong></span> <span class="text"><strong><br>Vine Annex:</strong> This art space features the work of artist Pham Luc. While you?re at it you might as well pop in to Vine.</span><br><span class="text"><strong>Luxe loves</strong></span><br><span class="text"><strong>Vine </strong>? Laid ? back and juicy ?? <a href="http://www.vine-group.com/images/article/luxe.jpg"><font color="gray" size="1"><i>Click here to view more</i></font></a><br><br></span></p></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">THE GLOBE AND MAIL SATURDAY, DECEMBER 9, 2006</span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?WHERE TO EAT - Vine Wine Boutique Bar &amp; Cafï¿½: 1A Xuan Dieu, Tay Ho; 84-4-719-8000; vine-group.com. While you?re waiting for the juicy rib-eye steak at Donald Berger?s trendy West Lake eatery, browse the 1,000-bottle wine list ?? <a href="http://www.emeraude-cruises.com/press/2006_12_09.Globe&amp;Mail.pdf"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td class="newsDatum" align="left" valign="top">Port and Portuguese Wine Tasting and Food Buffet </td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">??More than 100 wine lovers, Food and Beverage Manager, press, businessman, model were attended and enjoyed some of the world''s best wines of unrivaled flavors at a monthly held Wine Tasting and Art Appreciation Night: PORT and PORTUGUESE WINE TASTING and FOOD BUFFET - at Vine Annex on last Friday and Saturday- 3rd and 4th November 2006. ?? <a href="http://vibforum.vcci.com.vn/news_detail.asp?news_id=8143"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">Vietnam Economic Times, SEA Game</span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?This entire preamble is by the way of preparing you, gentle reader for a possibly sickeningly enthusiastic review of Vine, Donald Berger?s latest venture. Best known as executive chef for some years at the Press Club in Hanoi, the affable Mr. Berger is probably one of the two or three most talented chefs to have worked in this country since the dawn of doi moi...? <a href="http://www.vine-group.com/web/VineByPress2006.html#VnEconomi"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">Destin Asian</span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?Vine has a cafï¿½-like feel, but also a touch of sleek urbanity in its backlit wine cellar and communal table. The wide-ranging menu gives global definition to comfort foods, whether all-American like meatloaf or classically Asian like tom yum goong...? <a href="http://www.vine-group.com/web/VineByPress2006.html#destAsia"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="newsDatum">Vietnam News</span></td></tr>\r\n<tr>\r\n<td align="left" valign="top"><span class="text">?Vine Art Antique and Annex- the antiques and Vietnamese handicraft compliment the art laden wall, which are full of mixed media painting of Fam Luc, ? a raising star in the world of Vietnamese original lacquer, ?- ? He captured different walks of life with a powerful brushstroke that vividly depicts realistic situations... ? <a href="http://www.vine-group.com/web/VineByPress2006.html#vnNews"><font color="gray" size="1"><i>Click here to view more</i></font></a><br></span></td></tr></tbody></table>', NULL, 1, 1),
(25, 1, '2007-05-02 18:33:18', '2007-06-30 23:33:01', NULL, NULL, 'Vine Awards', 'T', 0, 'T', '<img src="http://192.168.1.254/xampp/Vis_web/Photos/7.jpg">', '', '', '', NULL, 1, 3),
(26, 1, '2007-05-02 18:00:12', '2007-05-02 18:00:12', NULL, NULL, 'Donald & Team', 'T', 0, 'T', '', '', NULL, '<P>&nbsp;</P>\n<TABLE cellSpacing=1 cellPadding=2 width="100%" border=0>\n<TBODY>\n<TR>\n<TD class=tbAboutUs width="100%"><SPAN class=tbAboutUs><STRONG>Chef Donald Berger''s Advices through "HEAR IT ON THE GRAPEVINE" - TIMEOUT</STRONG> </SPAN></TD></TR></TBODY></TABLE>\n<TABLE cellSpacing=1 cellPadding=5 width="100%" border=0>\n<TBODY>\n<TR>\n<TD class=newsDatum vAlign=top align=left width="15%"><IMG src="http://www.vine-group.com/don.jpg" width=120 vspace=35> </TD>\n<TD class=text vAlign=top align=left width="48%">&nbsp; \n<P>Donald Berger is a partner and the Managing Director of the Vine Quality Hospitality Group based in Hanoi - the capital of Vietnam . His international experience with wine and food spans 29 years in the quality hospitality business, and he was responsible for organizing with the Chairman of the International Wine Challenge Robert Joseph; the annual International Wine Challenge Vietnam 2002 &amp; 2003, co-organizing for IWC Shanghai 1999 &amp; 2000. He was also on the founding Board of the Shanghai Chef?s Association and Shanghai Chaine de Rotisseurs as Consellier Culinare responsible for the wine program. </P></TD>\n<TD class=newsDatum vAlign=top align=left width="37%"><A href="http://www.vine-group.com/web/timeout_chilewine.jpg" target=blank><FONT color=black>+ Chilean Wine Information </FONT></A><IMG src="http://www.vine-group.com/new.gif" border=0> &nbsp; <BR><A href="http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=8617" target=blank><FONT color=black>+ Merlot is just so passe</FONT></A>&nbsp; <BR><A href="http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=10300" target=blank><FONT color=black>+ Roses are in season</FONT></A>&nbsp; <BR><A href="http://www.vir.com.vn/Client/TimeOut/index.asp?url=content.asp&amp;doc=8864" target=blank><FONT color=black>+ Beaujolais Nouveau </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/images/article/ForeverDrinkingBubble.jpg" target=blank><FONT color=black>+ Forever Drinking Bubbles </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/images/article/Timeout_July_3_9th__06_screw_off_or_get_cork.jpg" target=blank><FONT color=black>+ Stelvin Screw Cap Trend </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/timeout.jpg" target=blank><FONT color=black>+ Kiwi Wines </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/web/CheersAustraliaTimeout.jpg" target=blank><FONT color=black>+ Cheers to Australia </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/web/SOUTHAFRICANWINE.html" target=blank><FONT color=black>+ </FONT></A><A href="http://www.vine-group.com/web/SOUTHAFRICANWINE.html"><FONT color=#000000>South African Wines </FONT></A>&nbsp; <BR><A href="http://www.vine-group.com/on_the_edge_of_europe.jpg" target=blank><FONT color=black>+ </FONT></A><A title="On the edge of Europe" href="http://www.vine-group.com/on_the_edge_of_europe.jpg"><FONT color=#000000>Portuguese Wine</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title="Vive les vins Francais" href="http://www.vine-group.com/Vive.jpg"><FONT color=#000000>Vive les vins Francais</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title="Let the festivities begin" href="http://www.vine-group.com/web/festivities.jpg"><FONT color=#000000>Let the festivities begin</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title="Californian Wines" href="http://www.vine-group.com/web/californian.jpg"><FONT color=#000000>Californian Wines</FONT></A>&nbsp; <BR><FONT color=black>+ </FONT><A title="Italian Wine Information" href="http://www.vine-group.com/web/Italianwine.htm"><FONT color=#000000>Italian Wine Information</FONT></A>&nbsp; <BR><BR><A href="http://www.vine-group.com/web/DonaldBioEN.html"><FONT color=#333333 size=1><I>More detail about Chef Donald Berger Professional Biography...</I> </FONT></A></TD></TR></TBODY></TABLE>', NULL, 1, 0),
(72, 71, '2007-05-01 04:00:32', '2007-05-24 01:21:34', NULL, NULL, 'Customer Comments', 'T', 0, 'T', '', 'T', './addcustomer.php', '', NULL, 1, 0),
(94, 60, '2007-05-31 17:23:39', '2007-05-31 18:05:01', NULL, NULL, 'Menus & Food Photos(Vn)', 'F', 0, 'T', '', 'T', './vn_restaurantlist.php', '', NULL, 1, 0),
(98, 18, '2007-05-31 17:31:58', '2007-05-31 17:31:58', NULL, NULL, 'Cigar Learning (Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 0, 0),
(99, 18, '2007-05-31 17:32:24', '2007-05-31 17:59:19', NULL, NULL, 'Cigar List & Buy Online(Vn)', 'F', 0, 'T', '', 'T', './vn_cigarlist.php', '', NULL, 1, 0),
(71, 0, '2007-05-02 18:34:55', '2007-05-14 19:14:42', NULL, NULL, 'Contact Us', 'T', 1, 'T', '<IMG src="/xampp/Vis_web/Photos/imagesCAEZGUBS.jpg">', '', '', '<P>\n<TABLE class=content style="BACKGROUND: #e6e6e6; WIDTH: 414.8pt; BORDER-COLLAPSE: collapse; mso-padding-alt: 0in 5.4pt 0in 5.4pt; mso-yfti-tbllook: 480" cellSpacing=0 cellPadding=0 width=553 border=0>\n<TBODY>\n<TR style="HEIGHT: 1.25in; mso-yfti-irow: 0; mso-yfti-firstrow: yes">\n<TD style="BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 1.25in; BACKGROUND-COLOR: transparent" vAlign=top width=277>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=2><STRONG><SPAN style="COLOR: #333333; FONT-FAMILY: Arial">Vine Wine Boutique Bar &amp; Cafe</SPAN></STRONG><B style="mso-bidi-font-weight: normal"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></SPAN></B></FONT></P>\n<P style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><FONT size=2>#</FONT></SPAN></B><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><FONT size=2>1A Xuan Dieu, <BR>Tay Ho, <?xml:namespace prefix = st1 ns = "urn:schemas-microsoft-com:office:smarttags" /><st1:place w:st="on"><st1:City w:st="on">Hanoi</st1:City>, <st1:country-region w:st="on">Vietnam</st1:country-region></st1:place> <BR>Tel: <?XML:NAMESPACE PREFIX = SKYPE /><SKYPE:SPAN onmouseup="javascript:skype_tb_imgOnOff(this,1,''0'',true,16,'''');return skype_tb_stopEvents();" class=skype_tb_injection oncontextmenu="javascript:skype_tb_SwitchDrop(this,''0'',''sms=0'');return skype_tb_stopEvents();" onmousedown="javascript:skype_tb_imgOnOff(this,2,''0'',true,16,'''');return skype_tb_stopEvents();" id=softomate_highlight_0 onmouseover="javascript:skype_tb_imgOnOff(this,1,''0'',true,16,'''');" title="Call this phone number in United States of America with Skype: +18447198000" onclick="javascript:doRunCMD(''call'',''0'',null,0);return skype_tb_stopEvents();" onmouseout="javascript:skype_tb_imgOnOff(this,0,''0'',true,16,'''');" durex="160" context="(844)&nbsp;719&nbsp;8000"><SKYPE:SPAN onmouseup="javascript:doSkypeFlag(this,''0'',1,1,16);return skype_tb_stopEvents();" class=skype_tb_imgA onmousedown="javascript:doSkypeFlag(this,''0'',2,1,16);return skype_tb_stopEvents();" id=skype_tb_droppart_0 onmouseover="javascript:doSkypeFlag(this,''0'',1,1,16);" title="Change country code ..." style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)" onclick="javascript:doHandleChdial(this,1,''0'',1);return skype_tb_stopEvents();" onmouseout="javascript:doSkypeFlag(this,''0'',0,1,16);"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f0 style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s0></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text0><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText0>(844)&nbsp;719&nbsp;8000</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r0></SKYPE:SPAN></SKYPE:SPAN><BR>Fax: (844) 719 8001<B style="mso-bidi-font-weight: normal"><o:p></o:p></B></FONT></SPAN></P>\n<H2 style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><STRONG><SPAN style="FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD>\n<TD style="BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 1.25in; BACKGROUND-COLOR: transparent" vAlign=top width=277>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=2><STRONG><SPAN style="COLOR: #333333; FONT-FAMILY: Arial">Vine Group Head Office </SPAN></STRONG><B style="mso-bidi-font-weight: normal"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><o:p></o:p></SPAN></B></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><FONT size=2>2nd &amp; 3rd floors, #45 Au Co,<BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup="javascript:skype_tb_imgOnOff(this,1,''2'',true,16,'''');return skype_tb_stopEvents();" class=skype_tb_injection oncontextmenu="javascript:skype_tb_SwitchDrop(this,''2'',''sms=0'');return skype_tb_stopEvents();" onmousedown="javascript:skype_tb_imgOnOff(this,2,''2'',true,16,'''');return skype_tb_stopEvents();" id=softomate_highlight_2 onmouseover="javascript:skype_tb_imgOnOff(this,1,''2'',true,16,'''');" title="Call this phone number in United States of America with Skype: +18447198321" onclick="javascript:doRunCMD(''call'',''2'',null,0);return skype_tb_stopEvents();" onmouseout="javascript:skype_tb_imgOnOff(this,0,''2'',true,16,'''');" durex="459" context="(844)&nbsp;719&nbsp;8321"><SKYPE:SPAN onmouseup="javascript:doSkypeFlag(this,''2'',1,1,16);return skype_tb_stopEvents();" class=skype_tb_imgA onmousedown="javascript:doSkypeFlag(this,''2'',2,1,16);return skype_tb_stopEvents();" id=skype_tb_droppart_2 onmouseover="javascript:doSkypeFlag(this,''2'',1,1,16);" title="Change country code ..." style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)" onclick="javascript:doHandleChdial(this,1,''2'',1);return skype_tb_stopEvents();" onmouseout="javascript:doSkypeFlag(this,''2'',0,1,16);"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f2 style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s2></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text2><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText2>(844)&nbsp;719&nbsp;8321</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r2></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 8465 <o:p></o:p></FONT></SPAN></P>\n<H2 style="MARGIN: 0in 0in 0pt"><STRONG><SPAN style="FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD></TR>\n<TR style="HEIGHT: 94.4pt; mso-yfti-irow: 1; mso-yfti-lastrow: yes">\n<TD style="BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 94.4pt; BACKGROUND-COLOR: transparent" vAlign=top width=277>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=2><STRONG><SPAN style="COLOR: #333333; FONT-FAMILY: Arial">Vine Annex </SPAN></STRONG><B style="mso-bidi-font-weight: normal"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><o:p></o:p></SPAN></B></FONT></P>\n<P style="MARGIN: 0in 0in 0pt"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><FONT size=2>1st floor, #45 Au Co, <BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup="javascript:skype_tb_imgOnOff(this,1,''4'',true,16,'''');return skype_tb_stopEvents();" class=skype_tb_injection oncontextmenu="javascript:skype_tb_SwitchDrop(this,''4'',''sms=0'');return skype_tb_stopEvents();" onmousedown="javascript:skype_tb_imgOnOff(this,2,''4'',true,16,'''');return skype_tb_stopEvents();" id=softomate_highlight_4 onmouseover="javascript:skype_tb_imgOnOff(this,1,''4'',true,16,'''');" title="Call this phone number in United States of America with Skype: +18447198321" onclick="javascript:doRunCMD(''call'',''4'',null,0);return skype_tb_stopEvents();" onmouseout="javascript:skype_tb_imgOnOff(this,0,''4'',true,16,'''');" durex="141" context="(844)&nbsp;719&nbsp;8321"><SKYPE:SPAN onmouseup="javascript:doSkypeFlag(this,''4'',1,1,16);return skype_tb_stopEvents();" class=skype_tb_imgA onmousedown="javascript:doSkypeFlag(this,''4'',2,1,16);return skype_tb_stopEvents();" id=skype_tb_droppart_4 onmouseover="javascript:doSkypeFlag(this,''4'',1,1,16);" title="Change country code ..." style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)" onclick="javascript:doHandleChdial(this,1,''4'',1);return skype_tb_stopEvents();" onmouseout="javascript:doSkypeFlag(this,''4'',0,1,16);"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f4 style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s4></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text4><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText4>(844)&nbsp;719&nbsp;8321</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r4></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 8465 <o:p></o:p></FONT></SPAN></P>\n<H2 style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><STRONG><SPAN style="FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic"><o:p>&nbsp;</o:p></SPAN></STRONG></H2></TD>\n<TD style="BORDER-RIGHT: #ffffff; PADDING-RIGHT: 5.4pt; BORDER-TOP: #ffffff; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: #ffffff; WIDTH: 207.4pt; PADDING-TOP: 0in; BORDER-BOTTOM: #ffffff; HEIGHT: 94.4pt; BACKGROUND-COLOR: transparent" vAlign=top width=277>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=2><STRONG><SPAN style="COLOR: #333333; FONT-FAMILY: Arial">Vine Cellar </SPAN></STRONG><B style="mso-bidi-font-weight: normal"><SPAN style="COLOR: #333333; FONT-FAMILY: Arial"><o:p></o:p></SPAN></B></FONT></P>\n<H2 style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-WEIGHT: normal; FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; mso-bidi-font-weight: bold; mso-bidi-font-style: italic"><FONT face=Arial>#7Xuan Dieu,<BR>Tay Ho, Hanoi <BR>Tel: <SKYPE:SPAN onmouseup="javascript:skype_tb_imgOnOff(this,1,''6'',true,16,'''');return skype_tb_stopEvents();" class=skype_tb_injection oncontextmenu="javascript:skype_tb_SwitchDrop(this,''6'',''sms=0'');return skype_tb_stopEvents();" onmousedown="javascript:skype_tb_imgOnOff(this,2,''6'',true,16,'''');return skype_tb_stopEvents();" id=softomate_highlight_6 onmouseover="javascript:skype_tb_imgOnOff(this,1,''6'',true,16,'''');" title="Call this phone number in United States of America with Skype: +18447192922" onclick="javascript:doRunCMD(''call'',''6'',null,0);return skype_tb_stopEvents();" onmouseout="javascript:skype_tb_imgOnOff(this,0,''6'',true,16,'''');" durex="506" context="(844)&nbsp;719&nbsp;2922"><SKYPE:SPAN onmouseup="javascript:doSkypeFlag(this,''6'',1,1,16);return skype_tb_stopEvents();" class=skype_tb_imgA onmousedown="javascript:doSkypeFlag(this,''6'',2,1,16);return skype_tb_stopEvents();" id=skype_tb_droppart_6 onmouseover="javascript:doSkypeFlag(this,''6'',1,1,16);" title="Change country code ..." style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\inactive_a.compat.flex.w16.gif)" onclick="javascript:doHandleChdial(this,1,''6'',1);return skype_tb_stopEvents();" onmouseout="javascript:doSkypeFlag(this,''6'',0,1,16);"><SKYPE:SPAN class=skype_tb_imgFlag id=skype_tb_img_f6 style="BACKGROUND-IMAGE: url(C:\\DOCUME~1\\ADMINI~1\\LOCALS~1\\Temp\\__SkypeIEToolbar_Cache\\d632e8e4efb12ac2f8b4c147250be8b2\\static\\famfamfam/US.gif)"></SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgS id=skype_tb_img_s6></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_injectionIn id=skype_tb_text6><SKYPE:SPAN class=skype_tb_innerText id=skype_tb_innerText6>(844)&nbsp;719&nbsp;2922</SKYPE:SPAN></SKYPE:SPAN><SKYPE:SPAN class=skype_tb_imgR id=skype_tb_img_r6></SKYPE:SPAN></SKYPE:SPAN> <BR>Fax: (844) 719 3508 <BR>Email: cellar@vine-group.com </FONT></SPAN><STRONG><SPAN style="FONT-SIZE: 12pt; COLOR: #333333; FONT-STYLE: normal; FONT-FAMILY: Arial; mso-bidi-font-style: italic"><o:p></o:p></SPAN></STRONG></H2></TD></TR></TBODY></TABLE></P>', NULL, 21, 0),
(36, 6, '2007-05-01 04:03:27', '2007-05-01 04:03:27', NULL, NULL, 'Cigar Learning', 'T', 0, 'T', '', '', NULL, '<TABLE cellSpacing=0 cellPadding=0 width=616 border=0>\n<TBODY>\n<TR>\n<TD height=20>\n<H1 class=hdrcontent>Cigar Learning<BR></H1></TD></TR>\n<TR>\n<TD vAlign=top align=left>&nbsp;</TD></TR>\n<TR>\n<TD vAlign=top align=left>\n<TABLE cellSpacing=0 cellPadding=0 width=480 border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD><BR></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ? just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>\n<P class=txtfifty><STRONG>1. Sight </STRONG></P>\n<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wine?s color can provide hints as to its age, degree of sweetness, grape variety ? even how it is made.</P>\n<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>\n<P class=txtfifty>Evaluate the wine?s color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>\n<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wine?s color is part of its distinctive character ? try to use descriptive words when evaluating color.</P></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>', NULL, 1, 0),
(37, 6, '2007-05-01 04:04:54', '2007-09-25 17:27:09', NULL, NULL, 'Cigar List & Buy Online', 'T', 0, 'T', '', 'T', './cigarlist.php', '<p>\r\n<table style="width: 562px; height: 246px;" border="0">\r\n<tbody>\r\n<tr>\r\n<td><img style="width: 551px; height: 131px;" src="/xampp/Vis_web/Photos/Blue%20hills.jpg" height="509" width="645"></td></tr>\r\n<tr>\r\n<td>Sam''s Wines &amp; Spirits has been a global icon beverage retailer since 1942. We pride ourselves in providing outstanding selection, price, and the best customer service in the industry. Our staff is known worldwide for their breadth of knowledge and involvement with the wines and spirits they sell. Whether it?s a first growth Bordeaux bought on futures or a Chilean table wine bought for a barbecue, Sam?s service and selection can?t be beat.</td></tr></tbody></table></p>', NULL, 1, 0),
(38, 5, '2007-05-01 04:06:21', '2007-05-01 04:06:21', NULL, NULL, 'Wine Learning', 'T', 1, 'T', '', '', NULL, '<TABLE cellSpacing=0 cellPadding=0 width=616 border=0>\n<TBODY>\n<TR>\n<TD height=20>\n<H1 class=hdrcontent>Wine Learning<BR></H1></TD></TR>\n<TR>\n<TD vAlign=top align=left>&nbsp;</TD></TR>\n<TR>\n<TD vAlign=top align=left>\n<TABLE cellSpacing=0 cellPadding=0 width=480 border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/Wine-how.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ? just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>\n<P class=txtfifty><STRONG>1. Sight </STRONG></P>\n<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wine?s color can provide hints as to its age, degree of sweetness, grape variety ? even how it is made.</P>\n<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>\n<P class=txtfifty>Evaluate the wine?s color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>\n<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wine?s color is part of its distinctive character ? try to use descriptive words when evaluating color.</P>\n<P class=txtfifty><STRONG>2. Nose</STRONG></P>\n<P class=txtfifty>The human sense of smell is actually more discerning than the sense of taste, and your nose can provide a significant amount of information about a particular wine before you taste it. The ?perfume? of a wine can vary significantly depending not just on its age and the types of grape(s) from which it is made, but also on the soils and weather of the region where the grapes were grown (the ?terroir?) and on the way in which it was aged (in oak barrels or stainless steel tanks). </P>\n<P class=txtfifty>Put your nose well into the glass and sniff. Concentrate just on the smell - is it powerful and complex, or simple and light? Does the smell linger, or does it dissipate quickly? Use your own words to describe the smells present in the aroma of a wine. Many Chinese people are unfamiliar with the scents of black currants or raspberries; it is perfectly acceptable to use other olfactory references (oleanders, for instance, or yangmei [bayberries]) if they are more familiar, or more accurate. There is no absolute right or wrong in describing a wine ? just what is more helpful in describing it to others.</P>\n<P class=txtfifty>The aroma of a wine may also provide clues as to its age. White wines often become more honeyed over the years, while young whites are often described with reference to fresh flowers, fruit or newly cut grass. </P>\n<P class=txtfifty><STRONG>3. Taste</STRONG></P>\n<P class=txtfifty>And so finally to tasting the product of the winemaker?s art! A good wine should balance its various flavor aspects: sweetness and acidity in a white wine, for example; sweetness, acidity, and tannin in a red wine.</P>\n<P class=txtfifty>Sip the wine. Taste it in the front of your mouth with the tip of your tongue to detect its degree of sweetness. The bottom of the back of your tongue will tell you about the wine?s acidity. Your front gums will help you determine the character of the wine?s tannins. And finally, roll the wine around your whole mouth and swallow. First make a mental note of the ?mouth feel? ? is it ?soft and velvety? or ?thin and astringent??</P>\n<P class=txtfifty>Swallow, and pay close attention to both the changes in flavor and the time it takes for the taste to disappear. This is called the ?length? of a wine, and can make a very big difference in the determination of the quality of a wine. In great wines, the finish can last a minute or more, creating a moment of meditation that no other beverage can create.</P></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>', NULL, 1, 0),
(39, 5, '2007-05-02 18:14:12', '2007-07-02 11:07:29', NULL, NULL, 'Wine list & Buy Online', 'T', 0, 'T', '', 'T', './winelist.php', '<P>\r\n<TABLE style="WIDTH: 554px; HEIGHT: 284px" border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><IMG style="WIDTH: 540px; HEIGHT: 184px" height=506 src="/xampp/Vis_web/Photos/Sunset.jpg" width=641></TD></TR>\r\n<TR>\r\n<TD>Sam''s Wines &amp; Spirits has been a global icon beverage retailer since 1942. We pride ourselves in providing outstanding selection, price, and the best customer service in the industry. Our staff is known worldwide for their breadth of knowledge and involvement with the wines and spirits they sell. Whether it?s a first growth Bordeaux bought on futures or a Chilean table wine bought for a barbecue, Sam?s service and selection can?t be beat.</TD></TR></TBODY></TABLE></P>', NULL, 1, 1),
(87, 0, '2007-05-14 19:11:29', '2007-05-21 20:31:22', NULL, NULL, 'Vine Cellar', 'T', 0, 'T', '', 'T', './cellarlist.php', '<P>\n<TABLE style="WIDTH: 554px; HEIGHT: 284px" border=0>\n<TBODY>\n<TR>\n<TD><IMG style="WIDTH: 540px; HEIGHT: 184px" height=506 src="/xampp/Vis_web/Photos/Sunset.jpg" width=641></TD></TR>\n<TR>\n<TD>Sam''s Wines &amp; Spirits has been a global icon beverage retailer since 1942. We pride ourselves in providing outstanding selection, price, and the best customer service in the industry. Our staff is known worldwide for their breadth of knowledge and involvement with the wines and spirits they sell. Whether it?s a first growth Bordeaux bought on futures or a Chilean table wine bought for a barbecue, Sam?s service and selection can?t be beat.</TD></TR></TBODY></TABLE></P>', NULL, 13, 0),
(88, 0, '2007-05-14 19:12:28', '2007-05-31 18:11:27', NULL, NULL, 'Vine Cellar (Vn)', 'F', 0, 'T', '', 'T', './vn_cellarlist.php', '', NULL, 14, 0),
(40, 5, '2007-04-17 14:22:08', '2007-04-17 14:22:08', NULL, NULL, 'IWC Viet Nam 2004', 'T', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(41, 38, '2007-05-01 04:09:06', '2007-05-14 09:07:49', NULL, NULL, 'Wine Styles', 'T', 0, 'T', '', '', '', '<H1 class=hdrcontent align=center>Wine Styles<BR></H1>\n<P align=center><BR><BR>&nbsp;</P>\n<DIV align=center>\n<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/wine_labels.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty align=left><STRONG>How to Read a Wine Label</STRONG></P>\n<P class=txtfifty align=justify>Wine labels are like languages ? bottles from each region ?speak? a different <BR>language.&nbsp;So, to be conversant in wines from different locales, you must become conversant in the ?wine language? used on different labels.</P>\n<P class=txtfifty align=justify>As a general rule, labels from ?Old World? (European) countries contain more <BR>information on the wine described than do the labels of wines from the ?New<BR>World? (Australia, North America, South America and South Africa).&nbsp; However<BR>, there are some notable exceptions: New World wine labels usually identify<BR>the grape varieties used to produce a wine, whereas the labels of Old World<BR>wines normally omit this information.&nbsp; That?s because the grapes used to make<BR>Old World wines are well known and often prescribed by local laws.&nbsp; For example, almost all white wines from Burgundy are made from Chardonnay grapes, and nearly all Burgundian reds from Pinot Noir.&nbsp; Burgundy labels ?assume? that the purchaser knows this ?wine fundamental.?</P></TD></TR></TBODY></TABLE></DIV>\n<P align=center><BR>&nbsp;</P>', NULL, 1, 0),
(42, 38, '2007-05-01 04:10:29', '2007-05-14 09:06:46', NULL, NULL, 'Wine Grapes', 'T', 0, 'T', '', '', '', '<H1 class=hdrcontent align=center>Grape Guide<BR></H1>\n<P align=center><BR>&nbsp;</P>\n<DIV align=center>\n<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/grape_guide.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=3 cellPadding=0 width="100%" border=0>\n<TBODY>\n<TR>\n<TD width="8%">&nbsp;</TD>\n<TD width="47%">&nbsp;</TD>\n<TD width="46%">&nbsp;</TD></TR>\n<TR>\n<TD>&nbsp;</TD>\n<TD class=txt><STRONG><FONT size=2>Red Grape Varieties</FONT></STRONG></TD>\n<TD class=txt><BR></TD></TR>\n<TR>\n<TD>&nbsp;</TD>\n<TD class=txt vAlign=top><A class=redlink href="http://www.asc-wines.com/grape_guide.asp#cabernet">Cabernet Sauvignon</A><BR><A class=redlink href="http://www.asc-wines.com/grape_guide.asp#gamay">Gamay</A><BR><A class=redlink href="http://www.asc-wines.com/grape_guide.asp#zinfandel"></A><BR></TD>\n<TD class=txt vAlign=top><BR></TD></TR>\n<TR>\n<TD>&nbsp;</TD>\n<TD class=txt>&nbsp;</TD>\n<TD class=txt>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>\n<P class=txtfifty><STRONG><FONT size=3>Red Grape Varieties</FONT></STRONG></P>\n<P class=txtfifty><STRONG><A name=cabernet></A>Cabernet Sauvignon</STRONG></P>\n<P class=txtfifty>The Cabernet Sauvignon grape is perhaps the world?s most well-known grape, and for good reason: it is the principal variety used in making most Bordeaux wines, including those usually recognized as the world?s best. The Cabernet Sauvignon grape is late to ripen compared to other varieties, and requires a longer time to age in oak or bottle to bring out its complex flavors. Its thick skin enables ?Cab? to grow in a wide range of climates, so today it is grown throughout the world. Good examples of wines made from predominantly Cabernet Sauvignon include Chateau Cos d''Estournel from Bordeaux, and Santa Rita?s Medalla Real Cabernet Sauvignon from Chile.</P>\n<P class=txtfifty><STRONG>Flavor characteristics</STRONG>: black currants, cedar, green pepper, mint, dark chocolate, tobacco, olives.</P>\n<HR width="70%">\n\n<P class=txtfifty align=right><A class=redlink href="http://www.asc-wines.com/grape_guide.asp#">Back to top</A></P>\n<P class=txtfifty><STRONG><A id=gamay name=gamay></A>Gamay</STRONG></P>\n<P class=txtfifty>Gamay is a purple-colored grape variety used to make wines designed to be enjoyed young. It is most commonly grown in Beaujolais, France, and also grown quite extensively in the Loire Valley (notably Touraine). Traditionally, French wine lovers gather every year at the beginning of November to appreciate ?Beaujolais Nouveau? ? a Gamay wine produced and released only a few weeks after the harvest. Try the Chateau des Jacques Cru Moulin-a-vent from Beaujolais.</P>\n<P class=txtfifty><STRONG>Flavor characteristics</STRONG>: strawberries, cherries, spice</P></TD></TR></TBODY></TABLE></DIV>\n<P align=center><BR>&nbsp;</P>', NULL, 1, 0);
INSERT INTO `menu` (`CategoryID`, `PCID`, `CreateDate`, `ModifyDate`, `TChnName`, `SChnName`, `EngName`, `ShowInIndex`, `Queue`, `ActiveStatus`, `sPhoto`, `ActiveFile`, `File`, `Photo`, `FieldName`, `Position`, `OutletID`) VALUES 
(43, 38, '2007-05-01 04:11:25', '2007-05-14 09:05:33', NULL, NULL, 'Testing Wine', 'T', 0, 'T', '', '', '', '<H1 class=hdrcontent align=center>Testing Wine<BR></H1>\n<P align=center><BR>&nbsp;</P>\n<DIV align=center>\n<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>\n<TBODY>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/Wine-how.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty>With so many wines to choose from, determining your favorites is important (and pleasurable) work. Wine tasting does not have to be complicated ? just focus on three main factors: how a wine looks, how it smells, and how it tastes.<BR></P>\n<P class=txtfifty><STRONG>1. Sight </STRONG></P>\n<P class=txtfifty>Quite naturally, sight is the first sense to come into play when tasting wine. A wine?s color can provide hints as to its age, degree of sweetness, grape variety ? even how it is made.</P>\n<P class=txtfifty>Examine a wine by holding the glass against a white background. Look for clarity; cloudiness can indicate that there is something wrong.</P>\n<P class=txtfifty>Evaluate the wine?s color. White wines may be a pale straw color, lemon-yellow, or even gold. Green highlights may mean that the wine is quite young. Deep yellow or golden tones indicate maturity through aging.</P>\n<P class=txtfifty>In red wines, purple hues are generally characteristic of younger wines, while brick, tawny or brownish colors indicate maturity. Each wine?s color is part of its distinctive character ? try to use descriptive words when evaluating color.</P>\n<P class=txtfifty><STRONG>2. Nose</STRONG></P>\n<P class=txtfifty>The human sense of smell is actually more discerning than the sense of taste, and your nose can provide a significant amount of information about a particular wine before you taste it. The ?perfume? of a wine can vary significantly depending not just on its age and the types of grape(s) from which it is made, but also on the soils and weather of the region where the grapes were grown (the ?terroir?) and on the way in which it was aged (in oak barrels or stainless steel tanks). </P></TD></TR></TBODY></TABLE></DIV>\n<P align=center><BR>&nbsp;</P>', NULL, 1, 0),
(44, 38, '2007-05-01 04:12:23', '2007-05-01 04:12:23', NULL, NULL, 'Exploring Wine', 'T', 0, 'T', '', '', NULL, '<H1 class=hdrcontent>Exploring Wine<BR></H1><BR>\n<TABLE cellSpacing=0 cellPadding=0 width=494 border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD colSpan=2 height=2><BR></TD></TR>\n<TR>\n<TD colSpan=2>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/wine_regions.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD width=38 height=37>&nbsp;</TD>\n<TD vAlign=bottom width=456><SPAN class=style4>Argentina</SPAN></TD></TR></TBODY></TABLE>\n<TABLE width=606>\n<TBODY>\n<TR>\n<TD width=31 height=93>&nbsp;</TD>\n<TD vAlign=top width=563>\n<P class=style7>It may come as a surprise to discover that Argentina is the fifth largest wine producing nation in the world.&nbsp; Until only a decade or two ago, nearly all Argentine wines were consumed locally ? Argentineans at one time consumed 90 liters of wine per capita annually.&nbsp; But today, they drink only half as much wine, and Argentinean wine producers have turned their attention export markets.&nbsp; To compete with other global producers, some Argentine wineries have focused sharply on quality, producing wines that have gained favor with connoisseurs all over the world.</P></TD></TR></TBODY></TABLE>\n<TABLE width=603>\n<TBODY>\n<TR>\n<TD width=29>&nbsp;</TD>\n<TD vAlign=center noWrap align=left width=206 height=421><IMG height=419 alt="" src="http://www.asc-wines.com/images/Argentina%20map.gif" width=189></TD>\n<TD vAlign=top align=left width=352>\n<P><SPAN class=style5><SPAN class=style6><SPAN class=style8><SPAN class=style10><STRONG>Geography and Climate</STRONG><BR>&nbsp;<BR>The ecology of the Andes mountain chain defines the character of the wines of Argentina.&nbsp; Most of the country is arid, but the ?rain shadow? of the Andes provides sufficient water for agriculture.&nbsp; The generally warm climate supports viniculture from the far north of Argentina ? where the vineyards lie at the same latitude as Morocco ? to the south, which is roughly at the same latitude as New Zealand. &nbsp;Vineyards are mostly planted at altitudes between 2,000 and 3,000 feet to exploit cooler temperatures.</SPAN></SPAN></SPAN></SPAN></P>\n<P class=style7><STRONG>Grape Varieties</STRONG><BR>&nbsp;<BR>Argentina has a tradition of growing Spanish and Italian grape varieties like Tempranillo, Bonarda and Barbera that make wonderfully juicy berry and cherry-fruited reds.&nbsp; In recent years, in line with international tastes, Argentine growers have planted plenty of Chardonnay, Merlot, Cabernet Sauvignon.&nbsp; But two grape varieties in particular seem especially well-suited to growing conditions in Argentina.</P>\n<P class=style7>The Torrontés grape makes terrifically fragrant, perfumed, yet rich and fruity white wines with crisp acidity and plenty of body. Malbec is a red variety that can produce wines with excellent structure.&nbsp; While some other wine regions (like Cahors in France) also employ Malbec, Argentinian Malbecs are considered by many the best in the world, with powerful, smooth deeply-fruited inky black wines full of spice and character. </P></TD></TR></TBODY></TABLE><BR>', NULL, 1, 0),
(45, 38, '2007-05-01 04:13:15', '2007-05-14 09:02:24', NULL, NULL, 'Storing & Service', 'T', 0, 'T', '', '', '', '<H1 class=hdrcontent align=center>Storing &amp; Service<BR></H1>\n<P align=center><BR>&nbsp; </P>\n<DIV align=center>\n<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/how_to_store.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty>The Romans knew that some wines improved with age, but until the 1700s, glass bottles were rare and expensive, and the use of natural cork (made from the bark of the Cork Oak tree) was not widespread.</P>\n<P class=txtfifty>Once corked wine bottles were more widely available, the attention of winemakers turned to discovering the conditions of wine storage that produced the finest wines. This is what they learned over the past 300 years: </P>\n<P class=txtfifty><STRONG>Temperature</STRONG><BR>The two worst enemies of wine are extreme temperatures and fluctuating temperatures. A constant temperature of 10-14?C (50-57?F) is considered ideal for aging wine. Temperatures a few degrees cooler or warmer are acceptable, but rapid fluctuations in temperature are to be avoided at all costs. Wine cellars ? essentially, natural or manmade caves in the earth ? are the best place for wine conservation, as they naturally maintain stable temperatures and other ideal conditions. Today?s wine refrigerators simply recreate using scientific methods the climate found in natural cellars.</P>\n<P class=txtfifty><STRONG>Darkness</STRONG><BR>Light rapidly degrades wine through irreversible oxidation of the tannins. Ultraviolet light (UV) is especially dangerous, as UV penetrates even the dark green glass used to make many wine bottles. White wines and sparkling wines are more frequently bottled in clear glass, making them even more susceptible to light damage. This storage rule is simple: wine should be stored in total darkness.</P></TD></TR></TBODY></TABLE></DIV>\n<P align=center><BR>&nbsp;</P>', NULL, 1, 0),
(46, 38, '2007-05-01 04:14:05', '2007-05-14 09:04:27', NULL, NULL, 'Food & Wine', 'T', 0, 'T', '', '', '', '<H1 class=hdrcontent align=center>Food &amp; Wine<BR></H1>\n<P align=center><BR><BR>&nbsp;</P>\n<DIV align=center>\n<TABLE cellSpacing=0 cellPadding=0 width=480 align=center border=0>\n<TBODY>\n<TR bgColor=#993333>\n<TD height=2><BR></TD></TR>\n<TR>\n<TD>\n<TABLE cellSpacing=0 cellPadding=0 width=300 border=0>\n<TBODY>\n<TR>\n<TD width=40><BR></TD>\n<TD width=175 bgColor=#993333><IMG height=21 src="http://www.asc-wines.com/images/food_and_wine.jpg" width=194></TD>\n<TD width=77>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>\n<TR>\n<TD>&nbsp;</TD></TR>\n<TR>\n<TD>\n<P class=txtfifty>There was once a time when grape wine was consumed almost exclusively in Western countries, and enjoyed only with Western cuisine. Before the internationalization of wine and the explosion of interest in global cuisines, "red wine with meat, white wine with fish" was the only guideline that wine lovers needed to select wines to accompany their meals. Today, wine is available all over the world, and is enjoyed with dishes from every food tradition imaginable. Thus, choosing wine to go with your meal is no longer a red-and-white issue: the wide range of choices we enjoy today means that we must learn more about food and wine pairing in order to maximize our enjoyment.</P>\n<P class=txtfifty>Let''s start from the finish: how does one measure the success of a particular food and wine combination? Obviously, it is a highly subjective matter, but in general, we can say that success in food and wine pairing is achieved when the enjoyment generated by a particular combination exceeds the enjoyment which would have been reached by consuming each individually - when the whole exceeds the sum of the parts, so to speak.</P>\n<P class=txtfifty><STRONG>To choose a wine to go with a particular dish, ask yourself:</STRONG></P>\n<UL>\n<LI><I>What is the dominant flavor of the dish?</I></LI>\n<LI><EM>What is the most important ingredient ? e.g., white or red meat, seafood, a vegetable, pasta, rice? </EM></LI>\n<LI><I>What is the texture of the dish? Light or heavy? Dry or moist? Crispy or tender?</I></LI>\n<LI><I>Is a sauce an important element in the dish? Is the sauce sweet, sour, salty, or spicy? Is it strong or subtle?</I></LI></UL></TD></TR></TBODY></TABLE></DIV>\n<P align=center><BR>&nbsp;</P>', NULL, 1, 0),
(47, 4, '2007-04-17 15:10:52', '2007-04-17 15:10:52', NULL, NULL, 'Vine Wine Boutique Bar & Cafe', 'T', 1, 'T', NULL, '', NULL, '', NULL, 0, 0),
(48, 4, '2007-04-17 15:08:52', '2007-04-17 15:08:52', NULL, NULL, 'Catering', 'T', 1, 'T', NULL, '', NULL, '', NULL, 0, 0),
(49, 48, '2007-05-01 04:18:20', '2007-05-01 04:18:20', NULL, NULL, 'Catering Menu', 'T', 0, 'T', '', '', NULL, '<DIV style="FONT-SIZE: 0px; Z-INDEX: -100; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px">Hacking, Viethacker ,VNhacker , Security , Bug , Advisory , Exploit , Thiet ke web, web design, cheapest web design, low cost web design, best web design, dang ky ten mien, domain, luu tru web, hosting, software, software development, phat trien phan mem, phan mem, webdesign, e-commerce, web development, Internet, e-marketing, designer, register domain, free tool. </DIV>\n<FORM id=Form name=Form action=../S-Portal.aspx?tabid=27 method=post encType=multipart/form-data>\n<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>\n<TBODY>\n<TR>\n<TD><BR>\n<DIV class=hdrcontent>\n<H1 class=hdrcontent>Catering<BR></H1><BR>\n<DIV class=hdrbotcor><IMG height=5 alt="" src="http://cache.wine.com/images/clear.gif" width=590 border=0></DIV>\n<TABLE style="WIDTH: 590px; HEIGHT: 160px" cellSpacing=0 cellPadding=0 border=0>\n<TBODY>\n<TR>\n<TD><IMG height=10 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=588 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD></TR>\n<TR>\n<TD class=bdrdkgray><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px"><A href="http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW"><IMG style="WIDTH: 128px; HEIGHT: 110px" alt="Wine Club: Grand Tour" src="http://www.wine.com/images/wineclub/img_wow_club_home.jpg" border=0></A></DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><SPAN style="LINE-HEIGHT: 30px"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>\n<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>\n<LI><FONT size=+0><A href="http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE>\n<DIV class=hdrbotcor><IMG height=5 alt="" src="http://cache.wine.com/images/clear.gif" width=590 border=0></DIV>\n<TABLE style="WIDTH: 590px; HEIGHT: 160px" cellSpacing=0 cellPadding=0 border=0>\n<TBODY>\n<TR>\n<TD><IMG height=10 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=588 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD></TR>\n<TR>\n<TD class=bdrdkgray><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px"><A href="http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW"><IMG style="WIDTH: 128px; HEIGHT: 110px" alt="Wine Club: Grand Tour" src="http://www.wine.com/images/wineclub/img_wow_club_home.jpg" border=0></A></DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><SPAN style="LINE-HEIGHT: 30px"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>\n<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>\n<LI><FONT size=+0><A href="http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE><BR></DIV>\n<DIV class=hdrbotcor><IMG height=5 alt="" src="http://cache.wine.com/images/clear.gif" width=590 border=0></DIV>\n<TABLE style="WIDTH: 590px; HEIGHT: 160px" cellSpacing=0 cellPadding=0 border=0>\n<TBODY>\n<TR>\n<TD><IMG height=10 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=588 border=0></TD>\n<TD><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD></TR>\n<TR>\n<TD class=bdrdkgray><IMG height=1 alt="" src="http://cache.wine.com/images/clear.gif" width=1 border=0></TD>\n<TD>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FLOAT: left; PADDING-BOTTOM: 30px; PADDING-TOP: 10px"><A href="http://www.wine.com/wineclubs/wineclub_detail.asp?clubcode=WOW"><IMG style="WIDTH: 128px; HEIGHT: 110px" alt="Wine Club: Grand Tour" src="http://www.wine.com/images/wineclub/img_wow_club_home.jpg" border=0></A></DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><SPAN style="LINE-HEIGHT: 30px"><SPAN class=txtblackbold></SPAN></SPAN>&nbsp;</DIV>\n<DIV style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-TOP: 10px"><STRONG>1919 Cabernet Sauvignon Altos de Mendoza 2004 <BR><BR></STRONG></DIV>\n<LI><STRONG>This item does not currently have a description.....</STRONG> </LI>\n<LI><FONT size=+0><A href="http://www.samswine.com/1919-cabernet-sauvignon-altos-mendoza-2004-p-10027797.html"><FONT color=#990000>More Information...</FONT></A></FONT></LI></TD></TR></TBODY></TABLE><BR></TD></TR></TBODY></TABLE></FORM>', NULL, 1, 0),
(51, 47, '2007-04-17 15:13:28', '2007-09-25 11:46:26', NULL, NULL, 'Menus & Food Photos', 'T', 0, 'T', '', 'F', './restaurantlist.php', '<p>\r\n<table style="width: 554px; height: 284px;" border="0">\r\n<tbody>\r\n<tr>\r\n<td><img style="width: 539px; height: 174px;" src="/xampp/Vis_web/Photos/09dv9.jpg" height="680" width="859"></td></tr>\r\n<tr>\r\n<td>Sam''s Wines &amp; Spirits has been a global icon beverage retailer since 1942. We pride ourselves in providing outstanding selection, price, and the best customer service in the industry. Our staff is known worldwide for their breadth of knowledge and involvement with the wines and spirits they sell. Whether it?s a first growth Bordeaux bought on futures or a Chilean table wine bought for a barbecue, Sam?s service and selection can?t be beat.</td></tr></tbody></table></p>', NULL, 1, 0),
(52, 47, '2007-04-17 15:14:09', '2007-04-17 15:14:09', NULL, NULL, 'Beverage', 'T', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(53, 14, '2007-04-17 15:38:33', '2007-04-17 15:38:33', NULL, NULL, 'Th?ng tin', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(54, 14, '2007-04-17 15:40:51', '2007-04-17 15:40:51', NULL, NULL, 'Gi?i th??ng', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(55, 14, '2007-04-17 15:41:45', '2007-04-17 15:41:45', NULL, NULL, 'Gi?m ??c', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(56, 15, '2007-04-17 15:50:11', '2007-04-17 15:50:11', NULL, NULL, 'Qu?y R??u & Qu?n Caf', 'F', 1, 'T', NULL, '', NULL, '', NULL, 0, 0),
(57, 56, '2007-04-17 15:51:21', '2007-04-17 15:51:21', NULL, NULL, '??t ch?', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(58, 56, '2007-04-17 15:53:06', '2007-04-17 15:53:06', NULL, NULL, 'Th?c ??n v? ?? ?n', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(59, 56, '2007-04-17 15:54:43', '2007-04-17 15:54:43', NULL, NULL, '?? u?ng', 'F', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(60, 16, '2007-04-17 16:06:19', '2007-05-31 17:19:10', NULL, NULL, 'Vine Wine Boutique Bar & Cafe(Vn)', 'F', 1, 'T', '', '', '', '', NULL, 1, 0),
(62, 60, '2007-04-17 16:08:40', '2007-05-31 17:26:12', NULL, NULL, 'Beverage(Vn)', 'F', 0, 'T', '', '', '', '', NULL, 1, 0),
(97, 17, '2007-05-31 17:29:23', '2007-05-31 17:29:44', NULL, NULL, 'IWC Viet Nam 2004(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 1, 0),
(96, 17, '2007-05-31 17:28:52', '2007-07-02 14:21:57', NULL, NULL, 'Wine List $ Buy Online (Vn)', 'F', 0, 'T', '', 'T', './vn_winelist.php', '', NULL, 1, 1),
(95, 17, '2007-05-31 17:28:14', '2007-05-31 17:28:14', NULL, NULL, 'Wine Learning(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 0, 0),
(68, 0, '2007-05-02 18:34:14', '2007-09-25 10:12:44', NULL, NULL, 'Vá» Vine', 'F', 0, 'T', '<img src="http://192.168.1.254/Vis_web/Photos/1.jpg">', '', '', '<p><font style="background-color: rgb(244, 244, 244);">Nh? ?? Vine</font></p>', NULL, 2, 0),
(70, 22, '2007-04-18 15:42:32', '2007-05-31 18:47:04', NULL, NULL, 'Who is who (Vn)', 'F', 0, 'T', '', '', '', '', NULL, 1, 0),
(73, 71, '2007-04-18 16:09:31', '2007-04-18 16:09:31', NULL, NULL, 'Who is who', 'T', 0, 'T', NULL, '', NULL, '', NULL, 0, 0),
(75, 4, '2007-05-01 22:31:12', '2007-05-01 22:31:12', NULL, NULL, 'Reservation', 'T', 0, 'T', '', '', NULL, '', NULL, 0, 0),
(78, 9, '2007-05-11 16:44:06', '2007-05-11 16:44:06', NULL, NULL, 'Ha Noi Head Office', 'T', 0, 'T', '', '', NULL, '<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B><SPAN style="FONT-SIZE: 13pt"><?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p><FONT face="Times New Roman">&nbsp;</FONT></o:p></SPAN></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B><SPAN style="FONT-SIZE: 14pt; mso-bidi-font-size: 13.0pt"><FONT face="Times New Roman">RECRUITMENT NOTICE<o:p></o:p></FONT></SPAN></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify"><SPAN style="FONT-SIZE: 13pt"><o:p><FONT face="Times New Roman">&nbsp;</FONT></o:p></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify"><SPAN style="FONT-SIZE: 13pt"><FONT face="Times New Roman">The Vine Quality Hospitality Group ? is expanding&nbsp;&amp; we are seeking dynamic, enthusiastic quality minded team player&nbsp;to join our&nbsp;team in the following positions for Ha Noi Head Office.&nbsp;We offer very competitive benefits, wages and a challenging yet rewarding environment with excellent opportunities for advancement.<o:p></o:p></FONT></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><SPAN style="FONT-SIZE: 10pt; COLOR: purple; FONT-FAMILY: Arial"><o:p>&nbsp;</o:p></SPAN></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><U><FONT size=3><FONT face="Times New Roman">1. Kitchen Secretary: 01 position<o:p></o:p></FONT></FONT></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT face="Times New Roman" size=3>&nbsp;- Good computer skill of Word, Excel</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman"><SPAN style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN>- Good English speaking and writing skill.</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT size=3><FONT face="Times New Roman"><SPAN style="mso-spacerun: yes">&nbsp;</SPAN>-&nbsp;Flexible on time, enthusiasm and suitable for team work.</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT size=3><FONT face="Times New Roman"><SPAN style="mso-spacerun: yes">&nbsp;</SPAN>- Well organize in filling documents and follow the Company?s regulation</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT size=3><FONT face="Times New Roman"><SPAN style="mso-spacerun: yes">&nbsp;</SPAN>-&nbsp;Graduate from any College</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT size=3><FONT face="Times New Roman"><SPAN style="mso-spacerun: yes">&nbsp;</SPAN>-&nbsp;<SPAN lang=VI style="mso-ansi-language: VI">Priority </SPAN>the person has <SPAN lang=VI style="mso-ansi-language: VI">knowledge</SPAN> of the Food safety management system</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in"><FONT face="Times New Roman" size=3></FONT>&nbsp;</P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><FONT size=3><FONT face="Times New Roman"><U>2. Banquet Sales Coordinator (male/female)</U>: 01 position<o:p></o:p></FONT></FONT></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good communication skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Advanced English skills, both speaking and writing</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good computer skills in Word, Excel, Email</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours, smart, enthusiastic and teambuilding</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Organization skills in filling documents, preparing emails, contracts and function orders</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Skills and sense in organizing catering proposals</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Experience in F&amp;B and Sales strongly requested</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good sense of grooming and presentation</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><U><FONT size=3><FONT face="Times New Roman">3. Host-Hostess (male/female): 02 positions<o:p></o:p></FONT></FONT></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good communication skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Advanced English skills in speaking</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Attractive, smart and enthusiastic</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good computer skills of Word, Excel</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good time management and organization skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><U><o:p><SPAN style="TEXT-DECORATION: none"><FONT face="Times New Roman" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><U><o:p><SPAN style="TEXT-DECORATION: none"><FONT face="Times New Roman" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B><U><FONT size=3><FONT face="Times New Roman">4. Bartender (male): 02 positions<o:p></o:p></FONT></FONT></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Cocktail skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Beverage skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Experience in bartending strongly requested</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Basic English skills in speaking</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Hardworking, honest, teambuilding and enthusiastic</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Organization skills</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Good sense of cleaning and hygiene</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Flexible in working hours</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l1 level1 lfo2; tab-stops: list .5in"><FONT face="Times New Roman"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN><FONT size=3>Willing to work over time or late</FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal"><FONT size=3><FONT face="Times New Roman">5. <SPAN style="mso-bidi-font-weight: bold">Import-Export Staff: 01 position </SPAN></FONT></FONT></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Graduate from any College related to Trading</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>At least 2 years dealing with Import-Export activities</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Good English speaking and writing skill.</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Good computer skill of Word, Excel</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Flexible on time, enthusiasm and suitable for team work.</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Well organize in filling documents and follow the Company?s regulation</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal"><FONT size=3><FONT face="Times New Roman">6. <SPAN style="mso-bidi-font-weight: bold">Local Purchaser: 01 position<o:p></o:p></SPAN></FONT></FONT></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Requirement: </FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>At least 2 years dealing with Purchasing activities</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Flexible on time, enthusiasm and suitable for team work.</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Honest, well organize in filling documents and follow the Company?s regulation.</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt 0.5in; TEXT-INDENT: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><SPAN style="FONT-FAMILY: ''Comic Sans MS''; mso-fareast-font-family: ''Comic Sans MS''; mso-bidi-font-family: ''Comic Sans MS''"><SPAN style="mso-list: Ignore"><FONT size=3>-</FONT><SPAN style="FONT: 7pt ''Times New Roman''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN></SPAN></SPAN><FONT face="Times New Roman" size=3>Basic English, daily communication.</FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 8pt; COLOR: purple; FONT-FAMILY: ''Comic Sans MS''"><o:p>&nbsp;</o:p></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><I style="mso-bidi-font-style: normal"><SPAN style="FONT-SIZE: 13pt"><FONT face="Times New Roman">Interested candidates can send their typed Resume CV, cover letter with supporting documents and references to: Vine Group Head Office, No 45 Au Co, Tay Ho, Hanoi Or email to: </FONT><A href="mailto:vine@vine-group.com"><FONT face="Times New Roman">vine@vine-group.com</FONT></A><FONT face="Times New Roman"> (email capacity does not exceed 1MB). <o:p></o:p></FONT></SPAN></I></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 13pt"><o:p><FONT face="Times New Roman">&nbsp;</FONT></o:p></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal"><I style="mso-bidi-font-style: normal"><SPAN style="FONT-SIZE: 13pt"><FONT face="Times New Roman">Deadline for application: June 7<SUP>th</SUP> 2007. Early application is priority<o:p></o:p></FONT></SPAN></I></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>', NULL, 0, 0),
(79, 9, '2007-05-11 16:45:07', '2007-05-11 16:45:07', NULL, NULL, 'HCM office', 'T', 0, 'T', '', '', NULL, '<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B><FONT size=3><FONT face="Times New Roman">RECRUITMENT NOTICE<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></FONT></FONT></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: justify"><FONT size=3><FONT face="Times New Roman">The Vine Quality Hospitality Group is expanding&nbsp;&amp; we are seeking dynamic, enthusiastic quality minded team players&nbsp;to join our&nbsp;team in the following positions for HCM Branch.&nbsp;We offer very competitive benefits, wages and a challenging yet rewarding environment with excellent opportunities for advancement.<o:p></o:p></FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify"><B><U><o:p><SPAN style="TEXT-DECORATION: none"><FONT face="Times New Roman" size=3>&nbsp;</FONT></SPAN></o:p></U></B></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: center" align=center><FONT face="Times New Roman"><B><U><SPAN style="FONT-SIZE: 16pt; COLOR: blue; mso-bidi-font-size: 12.0pt">General accountant: 1 position</SPAN></U></B><SPAN style="FONT-SIZE: 16pt; mso-bidi-font-size: 12.0pt"><o:p></o:p></SPAN></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify"><SPAN style="COLOR: navy"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify"><SPAN style="COLOR: navy"><FONT size=3><FONT face="Times New Roman">Responsible for HCM branch office accounting and financial issue. <o:p></o:p></FONT></FONT></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify"><SPAN style="COLOR: navy"><FONT size=3><FONT face="Times New Roman">Direct reporting to Finance Controller and Managing Director<o:p></o:p></FONT></FONT></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt; LAYOUT-GRID-MODE: char; TEXT-ALIGN: justify"><SPAN style="COLOR: navy"><FONT size=3><FONT face="Times New Roman">Degree in Accounting and Finance prefereable, at least 3 years working experience, honest, responsible, team player spirits, work under pressure. Good English, strong analytical skill and management skill. Experience to deal with tax finalization would be an advantage.<o:p></o:p></FONT></FONT></SPAN></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">Interested candidates can send their typed Resume in English with supporting documents and references to: Vine Group Head Office, no 45 Au Co, Tay Ho, <?xml:namespace prefix = st1 ns = "urn:schemas-microsoft-com:office:smarttags" /><st1:place w:st="on"><st1:City w:st="on">Hanoi</st1:City></st1:place>. <o:p></o:p></FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Or email to: </FONT><A href="mailto:vine@vine-group.com"><FONT face="Times New Roman" size=3>vine@vine-group.com</FONT></A><FONT size=3><FONT face="Times New Roman">; <I style="mso-bidi-font-style: normal">Deadline to submit: April 10<SUP>th</SUP> 2007.<o:p></o:p></I></FONT></FONT></P>\n<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>', NULL, 0, 0),
(89, 68, '2007-05-31 17:15:50', '2007-06-30 15:57:14', NULL, NULL, 'Vine By Press(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 1, 1),
(90, 68, '2007-05-31 17:16:15', '2007-05-31 17:16:46', NULL, NULL, 'Vine Awards(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 1, 0),
(91, 68, '2007-05-31 17:17:18', '2007-05-31 17:34:06', NULL, NULL, 'Donald & Team (Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 1, 0),
(92, 16, '2007-05-31 17:19:26', '2007-05-31 17:21:13', NULL, NULL, 'Catering(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 1, 0),
(93, 16, '2007-05-31 17:20:33', '2007-05-31 17:20:33', NULL, NULL, 'Reservation(Vn)', 'F', 0, 'T', '', 'F', './error.php', '', NULL, 0, 0),
(100, 88, '2007-06-30 15:49:45', '2007-06-30 15:49:45', NULL, NULL, 'HUHUHU', 'T', 0, 'T', '', 'F', './error.php', '', NULL, 0, 1),
(101, 100, '2007-09-23 20:09:06', '2007-09-23 20:09:06', NULL, NULL, 'abc', 'T', 0, 'T', '<img src="http://localhostVis_web/PhotosWinter.jpg"><br>', 'F', './error.php', '', NULL, 0, 1),
(102, 0, '2007-09-23 21:57:15', '2007-09-23 21:57:35', NULL, NULL, 'abc', 'T', 0, 'T', '<br>', 'T', './error.php', '', NULL, 1, 1),
(103, 102, '2007-09-23 21:58:01', '2007-09-23 21:58:01', NULL, NULL, 'xyz', 'T', 0, 'T', '', 'T', './error.php', '', NULL, 0, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `outlet`
-- 

CREATE TABLE `outlet` (
  `ID` int(10) NOT NULL auto_increment,
  `Name` varchar(10) default NULL,
  `Notes` text,
  `ViewStatus` varchar(1) default NULL,
  `User` varchar(36) default NULL,
  `Date` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `outlet`
-- 

INSERT INTO `outlet` (`ID`, `Name`, `Notes`, `ViewStatus`, `User`, `Date`) VALUES 
(1, 'Wine', 'qwer tgtgtgtgtg<BR>', 'T', NULL, '2007-07-02 10:53:50'),
(3, 'Cigar', 'poiuhbvcx', 'T', NULL, '2007-07-02 10:53:56'),
(4, 'Restaurant', '', 'T', NULL, '2007-07-02 10:54:02'),
(5, 'VineCellar', '', 'T', NULL, '2007-07-02 10:55:47'),
(6, 'test', '', 'T', NULL, '2007-09-25 10:18:56');

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `ProdID` bigint(20) NOT NULL auto_increment,
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ProdCode` varchar(30) default NULL,
  `TChnHeader` varchar(50) default NULL,
  `SChnHeader` varchar(50) default NULL,
  `EngHeader` varchar(100) default NULL,
  `VnHeader` varchar(100) default NULL,
  `FamilyID` int(10) NOT NULL default '0',
  `CategoryID` int(10) NOT NULL default '0',
  `SubCategoryID` int(10) NOT NULL default '0',
  `WineList` enum('T','F') NOT NULL default 'F',
  `CigarList` enum('T','F') NOT NULL default 'F',
  `VineCellar` enum('T','F') NOT NULL default 'F',
  `FoodPhotos` enum('T','F') NOT NULL default 'F',
  `TChnSDesc` varchar(100) default NULL,
  `SChnSDesc` varchar(100) default NULL,
  `EngSDesc` text,
  `EngLDesc` text,
  `TChnLDesc` text,
  `SChnLDesc` text,
  `Queue` bigint(20) NOT NULL default '1',
  `EngSpec` text,
  `EngLpec` text,
  `TChnSpec` text,
  `SChnSpec` text,
  `Price1` double default NULL,
  `Price2` double default NULL,
  `Price3` double default NULL,
  `PriceDiscount1` varchar(25) default NULL,
  `PriceDiscount2` varchar(25) default NULL,
  `PriceDiscount3` varchar(25) default NULL,
  `TChnFeat` text,
  `SChnFeat` text,
  `ActiveStatus` enum('T','F') NOT NULL default 'T',
  `ShowInIndex` enum('T','F') NOT NULL default 'F',
  `Remark` text,
  `sPhoto` text,
  `lPhoto` text,
  `CatID` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`ProdID`),
  UNIQUE KEY `ProdCode` (`ProdCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` (`ProdID`, `CreateDate`, `ModifyDate`, `ProdCode`, `TChnHeader`, `SChnHeader`, `EngHeader`, `VnHeader`, `FamilyID`, `CategoryID`, `SubCategoryID`, `WineList`, `CigarList`, `VineCellar`, `FoodPhotos`, `TChnSDesc`, `SChnSDesc`, `EngSDesc`, `EngLDesc`, `TChnLDesc`, `SChnLDesc`, `Queue`, `EngSpec`, `EngLpec`, `TChnSpec`, `SChnSpec`, `Price1`, `Price2`, `Price3`, `PriceDiscount1`, `PriceDiscount2`, `PriceDiscount3`, `TChnFeat`, `SChnFeat`, `ActiveStatus`, `ShowInIndex`, `Remark`, `sPhoto`, `lPhoto`, `CatID`) VALUES 
(12, '2007-05-09 15:24:41', '2007-06-01 13:55:41', 'AM1230B', NULL, NULL, 'Magnifier(En)1', 'Magnifier(Vn)', 6, 6, 5, 'T', 'T', 'T', 'T', 'Magnifier(Vn)', NULL, 'sdfgsdfg', '<P><STRONG>Our magnifiersnakbkqwbqq</STRONG></P>', NULL, NULL, 0, '<FONT color=#0000ff>Short Description (Viet Nam):</FONT>', '<FONT color=#0000ff>Description (Viet Nam):</FONT> ', NULL, NULL, 12, 11, 11, '11', '11', '11', '', '', 'T', '', 'Other remarks!!', '<P><IMG height=89 src="/xampp/Vis_web/Photos/4.jpg" width=90></P>', '<IMG height=192 src="/pmp/pic/category/AM1230_1.jpg" width=256>', 0),
(10, '2007-05-07 15:51:29', '2007-05-16 07:48:25', 'A00123', NULL, NULL, 'Test2', '', 0, 0, 0, 'T', 'T', 'T', '', '', NULL, 'sdfsd', 'Testing Desp', NULL, NULL, 1, '<P>sfsd</P>', '', NULL, NULL, 12, 12, 0, '', '', '', '', '', 'F', 'T', '', '<P><IMG style="WIDTH: 81px; HEIGHT: 83px" height=108 src="/pmp/pic/category/main_pic_maths.gif" width=91></P>', '<P><IMG height=320 src="http://www.hipest.com/pmp/pic/category/AM1230.jpg" width=320></P>', 0),
(13, '2007-05-09 15:25:13', '2007-05-14 12:19:59', 'AM1460', NULL, NULL, 'Precision Balance', '', 0, 0, 0, 'T', 'T', 'T', '', '', NULL, '', 'Precision Balance', NULL, NULL, 0, 'specifications', '', NULL, NULL, 12, 12, 12, '12', '12', '12', '', '', 'T', '', '', '<P><IMG style="WIDTH: 83px; HEIGHT: 90px" height=161 src="/vine/Photos/zicafe-vn.jpg" width=105></P>', '<IMG height=192 src="/pmp/pic/category/AM1460W.jpg" width=256>', 0),
(11, '2007-05-09 15:25:54', '2007-05-09 15:25:54', 'M123', NULL, NULL, 'M', 'sdfsdf', 0, 0, 0, 'T', 'T', 'T', '', 'sdfsdf', NULL, '', '<P>jhnibhjhb</P>', NULL, NULL, 0, 's', '', NULL, NULL, 13, 13, 13, '13', '13', '13', NULL, '', 'T', 'T', '', '<IMG src="/pmp/pic/category/main_pic_tiles.gif">', '<P><IMG height=192 src="/pmp/pic/category/AE1331-1.JPG" width=256></P>', 0),
(14, '2007-05-09 15:26:36', '2007-05-09 15:26:36', '12', NULL, NULL, 'test12', 'qweqw', 0, 0, 0, 'T', 'T', 'T', '', 'qweqw', NULL, 'qweqw', 'kuyfkgvtgjygki', NULL, NULL, 0, 'asdfasdf', 'qweqwe', NULL, NULL, 14, 14, 14, '14', '14', '14', 'asdfsa', 'sdfsd', 'T', 'T', 'sdfsd', '<P><IMG style="WIDTH: 88px; HEIGHT: 90px" height=120 src="/vine/Photos/9.jpg" width=88></P>', 'sdfsd', 0),
(15, '2007-05-09 15:27:12', '2007-05-25 18:24:24', 'Product1', NULL, NULL, 'Name Eng', 'sdfsdf', 6, 27, 26, 'T', 'T', 'T', '', 'sdfsdf', NULL, '', 'Product1', NULL, NULL, 0, 'Product1', '', NULL, NULL, 15, 15, 15, '15', '15', '15', '12', 'adfs', 'T', 'T', 'asdf', '<IMG style="WIDTH: 86px; HEIGHT: 92px" height=120 src="/vine/Photos/9.jpg" width=86>', '<IMG src="/vine/Photos/9.jpg">', 0),
(16, '2007-04-18 03:06:24', '2007-04-18 03:06:24', 'rqwerqw', NULL, NULL, 'qwerwe', NULL, 0, 0, 0, 'T', 'T', 'T', '', 'wqerw', NULL, NULL, 'qwerwe', NULL, NULL, 0, 'werwe', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 'werwe', 'werwe', 'T', 'T', 'werwe', 'werwe', 'werwe', 0),
(17, '2007-05-09 15:19:19', '2007-05-15 14:16:10', 'Test 1', NULL, NULL, 'Coffee', 'sdfsdf', 2, 4, 4, '', 'T', 'T', '', 'sdfsdf', NULL, 'sdfsdf', 'Afds', NULL, NULL, 0, 'sdf', 'sdfsdf', NULL, NULL, 100, 0, 0, 'sdfsd', 'sdfsd', 'sdfs', '12143', 'qew', 'T', 'T', 'eqw', '<IMG style="WIDTH: 83px; HEIGHT: 89px" height=507 src="/vine/Photos/Sunset.jpg" width=612>', '<IMG style="WIDTH: 205px; HEIGHT: 218px" height=485 src="/vine/Photos/Sunset.jpg" width=610>', 0),
(19, '2007-05-15 12:24:07', '2007-06-03 00:25:44', 'Hanoi', NULL, NULL, 'Name', 'Hanoi', 6, 6, 5, 'T', 'T', '', '', 'Hanoi', NULL, 'Some thing about this product ', 'Some thing about this product more more and more....<br>', NULL, NULL, 0, '', '', NULL, NULL, 11, 12, 12, '12', '12.1', '1.2', NULL, '', 'T', 'T', '', '<img src="/xampp/Vis_web/Photos/2.jpg" height="88" width="93">', '', 0),
(20, '2007-05-26 01:07:06', '2007-05-26 01:07:06', 'Lkaldf', NULL, NULL, 'EngLish', 'Viet Nam', 9, 27, 26, 'T', 'T', 'T', 'T', NULL, NULL, '', '', NULL, NULL, 0, '', '', NULL, NULL, 0, 0, 0, '', '', '', NULL, '', 'T', 'T', '', '', '', 0),
(21, '2007-06-03 00:37:05', '2007-06-03 00:37:05', 'cigarhahaha', NULL, NULL, 'Cigar', 'Xiga', 8, 0, 0, 'T', 'T', 'T', 'T', NULL, NULL, '<span class="default"></span>', '', NULL, NULL, 0, '', '', NULL, NULL, 10, 11, 12, '', '', '', NULL, '<br>', 'T', 'T', 'Nothing', '', '', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `productarea`
-- 

CREATE TABLE `productarea` (
  `ProdAreaID` bigint(20) NOT NULL auto_increment,
  `ProdID` bigint(20) NOT NULL default '0',
  `AreaID` bigint(20) NOT NULL default '0',
  `ActiveStatus` enum('T','F') NOT NULL default 'T',
  PRIMARY KEY  (`ProdAreaID`),
  UNIQUE KEY `ProdID` (`ProdID`,`AreaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `productarea`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `productcategory`
-- 

CREATE TABLE `productcategory` (
  `CategoryID` int(10) NOT NULL auto_increment,
  `CategoryName` text,
  `ParentCategoryID` int(10) default NULL,
  `Status` varchar(36) default NULL,
  `Description` text,
  `ViewStatus` varchar(1) default NULL,
  PRIMARY KEY  (`CategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `productcategory`
-- 

INSERT INTO `productcategory` (`CategoryID`, `CategoryName`, `ParentCategoryID`, `Status`, `Description`, `ViewStatus`) VALUES 
(1, 'Beverage', 0, NULL, 'Description about ABC ABC<BR>', 'F'),
(2, 'Wine', 1, NULL, 'xyzxyz test of english as foreign language<BR>', 'T'),
(3, 'Waters', 1, NULL, 'MNU hixxxx<BR>', 'T'),
(6, 'Foods', 0, NULL, '', 'T'),
(7, 'Raw Foods', 6, NULL, '', 'T'),
(11, 'White Wine', 2, NULL, '', 'T'),
(10, 'Red Wine', 2, NULL, '', 'T'),
(12, 'Processed Foods', 6, NULL, '', 'T'),
(13, 'test', 2, NULL, '', 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `productcategoryinfamily`
-- 

CREATE TABLE `productcategoryinfamily` (
  `productcategoryinfamilyID` int(10) NOT NULL auto_increment,
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `FamilyID` varchar(255) default NULL,
  `CategoryID` varchar(255) default NULL,
  `Note` text,
  `ViewStatus` enum('T','F') NOT NULL default 'T',
  PRIMARY KEY  (`productcategoryinfamilyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- 
-- Dumping data for table `productcategoryinfamily`
-- 

INSERT INTO `productcategoryinfamily` (`productcategoryinfamilyID`, `CreateDate`, `ModifyDate`, `FamilyID`, `CategoryID`, `Note`, `ViewStatus`) VALUES 
(9, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '24', NULL, 'T'),
(8, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '23', NULL, 'T'),
(10, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '25', NULL, 'T'),
(11, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '14', NULL, 'T'),
(12, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '15', NULL, 'T'),
(13, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '16', NULL, 'T'),
(14, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '5', '17', NULL, 'T'),
(15, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '5', '18', NULL, 'T'),
(16, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '5', '19', NULL, 'T'),
(17, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '6', NULL, 'T'),
(18, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '7', NULL, 'T'),
(19, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '8', NULL, 'T'),
(20, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '9', NULL, 'T'),
(21, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '10', NULL, 'T'),
(22, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '11', NULL, 'T'),
(27, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '12', NULL, 'T'),
(24, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '20', NULL, 'T'),
(25, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '21', NULL, 'T'),
(26, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '22', NULL, 'T'),
(28, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '8', '0', NULL, 'T'),
(29, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '8', '26', NULL, 'T'),
(30, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '9', '27', NULL, 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `productcharacteristics`
-- 

CREATE TABLE `productcharacteristics` (
  `ID` int(10) NOT NULL auto_increment,
  `ProductID` int(10) NOT NULL default '0',
  `CharacteristicTypeID` int(10) NOT NULL default '0',
  `Name` text,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `productcharacteristics`
-- 

INSERT INTO `productcharacteristics` (`ID`, `ProductID`, `CharacteristicTypeID`, `Name`) VALUES 
(9, 6, 1, 'test'),
(2, 2, 2, 'AF'),
(16, 1, 1, '250ml'),
(17, 12, 2, '25'),
(18, 12, 1, '25');

-- --------------------------------------------------------

-- 
-- Table structure for table `productdetail`
-- 

CREATE TABLE `productdetail` (
  `ID` int(10) NOT NULL auto_increment,
  `ProductID` int(10) NOT NULL default '0',
  `SupplierID` varchar(36) NOT NULL default '0',
  `TransactionDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `InvID` varchar(36) default NULL,
  `LeadTimeMin` decimal(18,2) default NULL,
  `LeadTimeMax` decimal(18,2) default NULL,
  `Qty` decimal(18,2) default NULL,
  `BookedQty` decimal(18,2) default NULL,
  `Cost1` decimal(18,2) default NULL,
  `Cost2` decimal(18,2) default NULL,
  `CostDiscount1` decimal(18,2) default NULL,
  `CostDiscount2` decimal(18,2) default NULL,
  `Price1` decimal(18,2) default NULL,
  `Price2` decimal(18,2) default NULL,
  `Price3` decimal(18,2) default NULL,
  `PriceDiscount1` decimal(18,2) default NULL,
  `PriceDiscount2` decimal(18,2) default NULL,
  `PriceDiscount3` decimal(18,2) default NULL,
  `TaxID1` varchar(36) default NULL,
  `TaxID2` varchar(36) default NULL,
  `LocationID` varchar(36) default NULL,
  `ExpiredDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ShowOnWeb` varchar(1) default NULL,
  `ViewStatus` varchar(1) default NULL,
  `UserID` varchar(36) default NULL,
  `Timestamp` timestamp NOT NULL default '0000-00-00 00:00:00',
  `TransactionType` int(10) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `productdetail`
-- 

INSERT INTO `productdetail` (`ID`, `ProductID`, `SupplierID`, `TransactionDate`, `InvID`, `LeadTimeMin`, `LeadTimeMax`, `Qty`, `BookedQty`, `Cost1`, `Cost2`, `CostDiscount1`, `CostDiscount2`, `Price1`, `Price2`, `Price3`, `PriceDiscount1`, `PriceDiscount2`, `PriceDiscount3`, `TaxID1`, `TaxID2`, `LocationID`, `ExpiredDate`, `ShowOnWeb`, `ViewStatus`, `UserID`, `Timestamp`, `TransactionType`) VALUES 
(1, 1, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(2, 2, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '4.25', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(6, 6, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(7, 7, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(10, 9, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(11, 10, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '5.00', '10.00', '15.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(12, 11, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '7.00', '7.00', '7.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL),
(13, 12, '0', '0000-00-00 00:00:00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 'T', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `productfamily`
-- 

CREATE TABLE `productfamily` (
  `FamilyID` int(10) NOT NULL auto_increment,
  `Name` text,
  `Status` varchar(36) default NULL,
  `Description` text,
  `ViewStatus` varchar(1) default NULL,
  PRIMARY KEY  (`FamilyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `productfamily`
-- 

INSERT INTO `productfamily` (`FamilyID`, `Name`, `Status`, `Description`, `ViewStatus`) VALUES 
(1, 'Free Items', 'FUUFUFUFUF', '', 'T'),
(2, 'Gift Certificate', 'uuuuuuuuu', 'dfsdfsdfsdf', 'F'),
(4, 'Discount Items', 'GGGGGGG', '', 'T'),
(5, 'test', 'test', '', 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `productinoutlet`
-- 

CREATE TABLE `productinoutlet` (
  `ID` int(10) NOT NULL auto_increment,
  `ProductID` varchar(10) NOT NULL default '0',
  `OutletID` varchar(36) NOT NULL default '0',
  `Price` decimal(18,2) default NULL,
  `Discount` decimal(18,2) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

-- 
-- Dumping data for table `productinoutlet`
-- 

INSERT INTO `productinoutlet` (`ID`, `ProductID`, `OutletID`, `Price`, `Discount`) VALUES 
(83, '1', '3', NULL, NULL),
(53, '2', '3', NULL, NULL),
(65, '6', '3', NULL, NULL),
(64, '6', '1', NULL, NULL),
(27, '7', '3', NULL, NULL),
(82, '1', '1', NULL, NULL),
(47, '9', '3', NULL, NULL),
(46, '9', '1', NULL, NULL),
(76, '10', '1', NULL, NULL),
(77, '11', '1', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `productmaster`
-- 

CREATE TABLE `productmaster` (
  `ProductID` int(10) NOT NULL auto_increment,
  `ProductName` text,
  `VnProductName` text,
  `AlternativeID` varchar(36) default NULL,
  `FamilyID` int(10) NOT NULL default '0',
  `CategoryID` int(10) NOT NULL default '0',
  `Description` text,
  `CurrencyID` varchar(36) NOT NULL default '0',
  `BarcodeID` varchar(10) NOT NULL default '0',
  `BasePrice` decimal(18,2) default NULL,
  `PhysicalStockLevel` decimal(18,2) default NULL,
  `SafetyLevel` decimal(18,2) default NULL,
  `MinLevel` decimal(18,2) default NULL,
  `MaxLevel` decimal(18,2) default NULL,
  `ReorderLevel` decimal(18,2) default NULL,
  `SafetyStockFactor` decimal(18,4) default NULL,
  `HoldingCost` decimal(18,2) default NULL,
  `Qty` decimal(18,2) default NULL,
  `Type` varchar(36) default NULL,
  `UOMID` varchar(36) default NULL,
  `EngShortDesc` text,
  `VnShortDesc` text,
  `EngLongDesc` text,
  `VnLongDesc` text,
  `Photo` longblob,
  `IsPromotion` varchar(1) default NULL,
  `ReservedField1` text,
  `ReservedField2` text,
  `ReservedField3` text,
  `ReservedField4` text,
  `Remarks1` text,
  `Remarks2` text,
  `ViewStatus` varchar(1) default NULL,
  PRIMARY KEY  (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `productmaster`
-- 

INSERT INTO `productmaster` (`ProductID`, `ProductName`, `VnProductName`, `AlternativeID`, `FamilyID`, `CategoryID`, `Description`, `CurrencyID`, `BarcodeID`, `BasePrice`, `PhysicalStockLevel`, `SafetyLevel`, `MinLevel`, `MaxLevel`, `ReorderLevel`, `SafetyStockFactor`, `HoldingCost`, `Qty`, `Type`, `UOMID`, `EngShortDesc`, `VnShortDesc`, `EngLongDesc`, `VnLongDesc`, `Photo`, `IsPromotion`, `ReservedField1`, `ReservedField2`, `ReservedField3`, `ReservedField4`, `Remarks1`, `Remarks2`, `ViewStatus`) VALUES 
(1, 'ttttttt', 'ttttttttt', NULL, 2, 10, 'ttttttt', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 'aa', NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(2, 'vvvvvvxxxxxxxxxx', 'vvvvvvv', NULL, 2, 2, 'vvvvvvvvvvv', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 'aa', NULL, 'vvvv', 'vvvvvvvvvv', 'vvvvvvv', 'vvvv', NULL, 'T', NULL, NULL, NULL, NULL, 'vvvvvvv', 'vvvvvvvvvvvvvvvvv', 'T'),
(6, 'BBBBBB', 'BBBBB', NULL, 2, 3, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 'bb', NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(7, 'oooooooo', 'ooooooooooo', NULL, 1, 1, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 'cc', NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(9, 'New pro', 'san pham moi', NULL, 2, 2, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 'cc', NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(10, 'A to Z Wineworks Chardonnay ', 'A to Z Wineworks Chardonnay ', NULL, 0, 11, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(11, 'Amarelli Mints', 'Amarelli Mints', NULL, 0, 12, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T'),
(12, 'rÆ°Æ¡u test', 'test thá»­', NULL, 1, 2, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, '', '', '', '', NULL, 'T', NULL, NULL, NULL, NULL, '', '', 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `productsubcategory`
-- 

CREATE TABLE `productsubcategory` (
  `SubCategoryID` int(10) NOT NULL auto_increment,
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SubCategoryName` varchar(255) character set latin1 collate latin1_general_ci default NULL,
  `SubCategoryNameVn` varchar(255) character set latin1 collate latin1_general_ci default NULL,
  `Note` text character set latin1 collate latin1_general_ci,
  `ViewStatus` enum('T','F') character set latin1 collate latin1_general_ci NOT NULL default 'T',
  PRIMARY KEY  (`SubCategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `productsubcategory`
-- 

INSERT INTO `productsubcategory` (`SubCategoryID`, `CreateDate`, `ModifyDate`, `SubCategoryName`, `SubCategoryNameVn`, `Note`, `ViewStatus`) VALUES 
(6, '2007-05-16 10:26:51', '0000-00-00 00:00:00', 'Burgundy', 'Burgundy(Vn)', '', 'T'),
(5, '2007-05-16 10:15:55', '0000-00-00 00:00:00', 'Bordeaux', 'Bordeaux(Vn)', '', 'T'),
(7, '2007-05-16 10:27:17', '0000-00-00 00:00:00', 'California', 'California(Vn)', '', 'T'),
(8, '2007-05-16 10:27:38', '0000-00-00 00:00:00', 'Alasace', 'Alasace(Vn)', '', 'T'),
(9, '2007-05-16 10:28:07', '0000-00-00 00:00:00', 'Loire Valley', 'Loire Valley(Vn)', '', 'T'),
(10, '2007-05-16 10:31:44', '0000-00-00 00:00:00', 'Champagne', 'Champagne(Vn)', '', 'T'),
(11, '2007-05-16 10:32:04', '0000-00-00 00:00:00', 'Vin De Pays', 'Vin De Pays(Vn)', '', 'T'),
(12, '2007-05-16 10:32:26', '0000-00-00 00:00:00', 'Plalz', 'Plalz(Vn)', '', 'T'),
(13, '2007-05-16 10:35:50', '0000-00-00 00:00:00', 'Highlands', 'HighLands(Vn)', '', 'T'),
(14, '2007-05-16 10:36:13', '0000-00-00 00:00:00', 'Islay', 'Islay(Vn)', '', 'T'),
(15, '2007-05-16 10:36:33', '0000-00-00 00:00:00', 'Jura', 'Jura(Vn)', '', 'T'),
(16, '2007-05-16 10:43:35', '0000-00-00 00:00:00', 'Franch', 'Franch(Vn)', '', 'T'),
(17, '2007-05-16 10:43:51', '0000-00-00 00:00:00', 'Chinese', 'Chinese(Vn)', '', 'T'),
(18, '2007-05-16 10:44:19', '0000-00-00 00:00:00', 'Japanese', 'Japanese(Vn)', '', 'T'),
(19, '2007-05-16 10:46:56', '0000-00-00 00:00:00', 'Abbey Dubbel', 'Abbey Dubbel(Vn)', '', 'T'),
(20, '2007-05-16 10:47:10', '0000-00-00 00:00:00', 'Alt', 'Alt(Vn)', '', 'T'),
(21, '2007-05-16 10:47:31', '0000-00-00 00:00:00', 'Amber Ale', 'Amber Ale(Vn)', '', 'T'),
(24, '2007-05-18 18:52:08', '0000-00-00 00:00:00', 'SubCigar1', 'SubCigar1(Vn)', '', 'T'),
(25, '2007-05-19 11:29:42', '0000-00-00 00:00:00', 'SubRestaurant1', 'SubRestaurant1(Vn)', '', 'T'),
(26, '2007-05-21 22:34:13', '0000-00-00 00:00:00', 'SubAccessories', 'SubAccessories(Vn)', '', 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `productsubcategoryinfamily`
-- 

CREATE TABLE `productsubcategoryinfamily` (
  `productsubcategoryinfamilyID` int(10) NOT NULL auto_increment,
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `FamilyID` varchar(255) default NULL,
  `SubCategoryID` varchar(255) default NULL,
  `Note` text,
  `ViewStatus` enum('T','F') NOT NULL default 'T',
  PRIMARY KEY  (`productsubcategoryinfamilyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `productsubcategoryinfamily`
-- 

INSERT INTO `productsubcategoryinfamily` (`productsubcategoryinfamilyID`, `CreateDate`, `ModifyDate`, `FamilyID`, `SubCategoryID`, `Note`, `ViewStatus`) VALUES 
(5, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '20', NULL, 'T'),
(4, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '19', NULL, 'T'),
(6, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '23', NULL, 'T'),
(7, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '3', '21', NULL, 'T'),
(8, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '13', NULL, 'T'),
(9, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '14', NULL, 'T'),
(10, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '4', '15', NULL, 'T'),
(11, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '5', NULL, 'T'),
(12, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '6', NULL, 'T'),
(13, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '7', NULL, 'T'),
(14, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '8', NULL, 'T'),
(15, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '9', NULL, 'T'),
(16, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '10', NULL, 'T'),
(17, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '11', NULL, 'T'),
(18, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '6', '12', NULL, 'T'),
(19, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '16', NULL, 'T'),
(20, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '17', NULL, 'T'),
(21, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '7', '18', NULL, 'T'),
(22, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '8', '24', NULL, 'T'),
(23, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '9', '25', NULL, 'T'),
(24, '2007-06-29 12:24:36', '0000-00-00 00:00:00', '5', '26', NULL, 'T');

-- --------------------------------------------------------

-- 
-- Table structure for table `useraccount`
-- 

CREATE TABLE `useraccount` (
  `LoginID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) default NULL,
  `LastLoginDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ActiveStatus` enum('T','F') NOT NULL default 'T',
  `DelRight` enum('T','F') NOT NULL default 'T',
  `AdminGroup` varchar(11) default NULL,
  `CreateDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `ModifyDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `UserID` bigint(20) NOT NULL auto_increment,
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `LoginID` (`LoginID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `useraccount`
-- 

INSERT INTO `useraccount` (`LoginID`, `Password`, `UserName`, `Email`, `LastLoginDate`, `ActiveStatus`, `DelRight`, `AdminGroup`, `CreateDate`, `ModifyDate`, `UserID`) VALUES 
('admin', 'admin', 'Administrator', 'admin', '2007-04-19 13:51:20', 'T', 'T', 'admin', '2006-01-20 11:08:30', '2007-04-19 13:51:20', 1),
('oper', 'oper', 'Operations', 'Oper', '2007-04-20 10:13:51', 'T', 'T', 'oper', '2007-04-19 13:54:00', '2007-04-20 10:13:51', 7),
('user', 'user', 'Users', 'user', '2007-04-19 13:54:51', 'T', 'T', 'user', '2007-04-19 13:54:51', '2007-04-19 13:54:51', 8),
('sdfsdf', '1234', 'chi', 'sdfsd', '0000-00-00 00:00:00', 'T', 'T', 'user', '2007-05-03 21:56:29', '2007-05-03 21:58:14', 9),
('kemkem', 'kemkem', 'nguyen van chinh', 'chinhnv@designcentral.vn', '0000-00-00 00:00:00', 'T', 'T', 'user', '2007-09-23 21:25:32', '2007-09-23 21:25:32', 10);
