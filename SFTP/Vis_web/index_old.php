<?php
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/menu.php");
include_once("./backend/functions/outlet.php");

$SQL_r = "SELECT * FROM Advertise where CategoryID='1'";
$query_r = mysql_query($SQL_r);
$row_r =  mysql_fetch_array($query_r);
$SQL_l = "SELECT * FROM Advertise where CategoryID='2'";
$query_l = mysql_query($SQL_l);
$row_l =  mysql_fetch_array($query_l);
$SQL_c = "SELECT * FROM Menu WHERE PCID=0 and ShowInIndex='T' ORDER BY Position ASC";
	$result_c = mysql_query($SQL_c);
	$recordCount = mysql_num_rows($result_c);
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
echo "abcd";
$a = MenuOutlets(1);
for($i = 0; $i < count($a); $i++){
	echo $a[$i]." ";
}
echo "ABCD";
$javascript_menu_start= '
					<script language="javascript1.2">
					ordernumber="";
					emptyimage="transparent.gif";
					showdelay=200;
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
					
echo $javascript_menu_start;
if ($recordCount>0)
{
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 0, 4";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{
		if ($row0['Queue']=='0' && $row0['Queue']!='1')
		{ 
			if (strlen($row0['EngName']) > 20) {
				$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].';url=category.php?id='.$row0['CategoryID'].'&menu0='.$row0['EngName'].$row0['OutletID'].';fontweight=bold;target=iframe;height=30");';
			}
			else
			 {
				$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].';url=category.php?id='.$row0['CategoryID'].'&menu0='.$row0['EngName'].$row0['OutletID'].';fontweight=bold;target=iframe");';
			 }
		}
		else
		{
			 if (strlen($row0['EngName']) > 20) {
				$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].';show='.$row0['CategoryID'].';url=menudetail.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe;height=30");';
			 }
			 else
			 {
				$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].';show='.$row0['CategoryID'].';url=menudetail.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
			 }
		}
		//modified
		if($row0['OutletID'] != 0){
			$a = MenuOutlets($row0['OutletID']);
			for($i = 0; $i < count($a); $i++){
				$javascript_menu_item0.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
			}
		}
	}

	$javascript_menu0.= '
                    with(new fxmenu("Main Menu")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=160;
					left=70;
					width=175;
					height=20;
					orientation="horizontal";
					'.$javascript_menu_item0.'
						}
						';
	echo $javascript_menu0;	

	$javascript_menu1='';
	$javascript_menu2='';
	$javascript_menu3='';
	$javascript_menu_item1 = '';
	//level 1
	$SQL1 = "SELECT * FROM Menu where PCID=0 and ShowInIndex='T' and ActiveStatus='T'";
	$rs1 = mysql_query($SQL1);
	while($row1 = mysql_fetch_array($rs1))
	{
		if($row1['Queue']=='0' && $row1['Queue']!='1')
		{
		$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;url=contact_.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
		}
		else
		{
			$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;show='.$row1['CategoryID'].';url=menudetail.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
		
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;url=contact_.php?id='.$row2['CategoryID'].'&menu1='.$row2['EngName'].$row2['OutletID'].';target=iframe;width=175");';
				}
				else
				{
				
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;show='.$row2['CategoryID'].';url=menudetail.php?id='.$row2['CategoryID'].';target=iframe;width=175");';
				
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;url=contact_.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;show='.$row3['CategoryID'].';url=menudetail.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].$row4['OutletID'].' ;url=contact_.php?id='.$row4['CategoryID'].';target=iframe;width=175");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=175");';
			 //  }
			 	//modified
				if($row4['OutletID'] != 0){
					$a = MenuOutlets($row4['OutletID']);
					for($i = 0; $i < count($a); $i++){
						$javascript_menu_item4.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
					}
				}
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item4.'
						}
						';
						echo $javascript_menu4;
				
				
				//end menu 4
									
		
									}
									//modified
								if($row3['OutletID'] != 0){
									$a = MenuOutlets($row3['OutletID']);
									for($i = 0; $i < count($a); $i++){
										$javascript_menu_item3.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
									}
								}
							}
							
							$javascript_menu3.= 'with(new fxmenu("'.$row2['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item3.'
						}
						';
						echo $javascript_menu3;
				
				  // end menu 3
				  
				  
			}
			//modified
			if($row2['OutletID'] != 0){
				$a = MenuOutlets($row2['OutletID']);
				for($i = 0; $i < count($a); $i++){
					$javascript_menu_item2.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
				}
			}
			
		}
		$javascript_menu2.= 'with(new fxmenu("'.$row1['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item2.'
						}
						';
		echo $javascript_menu2;
	//end menu2
	}
}
$javascript_menu1.= 'with(new fxmenu("chinh")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item1.'
						}
						';
//echo $javascript_menu1;
}
 
if ($recordCount >4)
{ 
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 4, 4";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 	{
		 if (strlen($row0['EngName']) > 20) 
		  {
		  $javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;url=contact_.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe;height=30");';
		  }
		
		else
		 {
		 $javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;url=contact_.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
		 }
		}
		else
		{
		 if (strlen($row0['EngName']) > 20) {
		$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;show='.$row0['CategoryID'].';url=menudetail.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe;height=30");';
		}
		else
		{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;show='.$row0['CategoryID'].';url=menudetail.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
		
		}
		}
		if($row0['OutletID'] != 0){
					$a = MenuOutlets($row0['OutletID']);
					for($i = 0; $i < count($a); $i++){
						$javascript_menu_item0.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
					}
				}
	}

	$javascript_menu0.= '
                    with(new fxmenu("Main Menu 1")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=160;
					left=70;
					width=175;
					height=20;
					orientation="horizontal";
					'.$javascript_menu_item0.'
						}
						';
	echo $javascript_menu0;	

	$javascript_menu1='';
	$javascript_menu2='';
	$javascript_menu3='';
	$javascript_menu_item1 = '';
	//level 1
	$SQL1 = "SELECT * FROM Menu where PCID=0 and ShowInIndex='T' and ActiveStatus='T'";
	$rs1 = mysql_query($SQL1);
	while($row1 = mysql_fetch_array($rs1))
	{
		if($row1['Queue']=='0' && $row1['Queue']!='1')
		{
		$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;url=contact_.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
		}
		else
		{
			$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;show='.$row1['CategoryID'].';url=menudetail.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
		
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;url=contact_.php?id='.$row2['CategoryID'].';target=iframe;width=175");';
				}
				else
				{
				if (strlen($row2['EngName']) > 20) {
				$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;show='.$row2['CategoryID'].';url=menudetail.php?id='.$row2['CategoryID'].';target=iframe;width=175;height=40;");';
				}
				else
				{
				$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;show='.$row2['CategoryID'].';url=menudetail.php?id='.$row2['CategoryID'].';target=iframe;width=175");';
				}
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;url=contact_.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;show='.$row3['CategoryID'].';url=menudetail.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].$row4['OutletID'].' ;url=contact_.php?id='.$row4['CategoryID'].';target=iframe;width=175");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=175");';
			 //  }
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item4.'
						}
						';
						echo $javascript_menu4;
				
				
				//end menu 4
									
		
									}
									if($row4['OutletID'] != 0){
										$a = MenuOutlets($row4['OutletID']);
										for($i = 0; $i < count($a); $i++){
											$javascript_menu_item4.='fx("text='.$a[$i]['Name'].';show='.$a['ID'].';url=categorydetail.php?id='.$a['ID'].';fontweight=bold;target=iframe");';
										}
									}
							}
							
							$javascript_menu3.= 'with(new fxmenu("'.$row2['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item3.'
						}
						';
						echo $javascript_menu3;
				
				  // end menu 3
				  
				  
			}
			
		}
		$javascript_menu2.= 'with(new fxmenu("'.$row1['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item2.'
						}
						';
		echo $javascript_menu2;
	//end menu2
	}
}
$javascript_menu1.= 'with(new fxmenu("chinh")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item1.'
						}
						';
//echo $javascript_menu1;
}

 			
if ($recordCount >8)
{ 
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 8, 4";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 	{ $javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;url=contact_.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';}
		else
		{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].$row0['OutletID'].' ;show='.$row0['CategoryID'].';url=menudetail.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
		}
	}

	$javascript_menu0.= '
                    with(new fxmenu("Main Menu 2")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
					position="relative";
					top=160;
					left=70;
					width=175;
					height=20;
					orientation="horizontal";
					'.$javascript_menu_item0.'
						}
						';
	echo $javascript_menu0;	

	$javascript_menu1='';
	$javascript_menu2='';
	$javascript_menu3='';
	$javascript_menu_item1 = '';
	//level 1
	$SQL1 = "SELECT * FROM Menu where PCID=0 and ShowInIndex='T' and ActiveStatus='T'";
	$rs1 = mysql_query($SQL1);
	while($row1 = mysql_fetch_array($rs1))
	{
		if($row1['Queue']=='0' && $row1['Queue']!='1')
		{
		$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;url=contact_.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
		}
		else
		{
			if (strlen($row1['EngName']) > 20) {
			$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;show='.$row1['CategoryID'].';url=menudetail.php?id='.$row1['CategoryID'].';target=iframe;width=175;height=40;");';
			} else {	
			$javascript_menu_item1.='fx("text='.$row1['EngName'].$row1['OutletID'].' ;show='.$row1['CategoryID'].';url=menudetail.php?id='.$row1['CategoryID'].';target=iframe;width=175");';
			}
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;url=contact_.php?id='.$row2['CategoryID'].';target=iframe;width=175");';
				}
				else
				{
				if (strlen($row2['EngName']) > 20) {
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;show='.$row2['CategoryID'].';url=menudetail.php?id='.$row2['CategoryID'].';target=iframe;width=175;height=40;");';
				} else {
					$javascript_menu_item2.='fx("text='.$row2['EngName'].$row2['OutletID'].' ;show='.$row2['CategoryID'].';url=menudetail.php?id='.$row2['CategoryID'].';target=iframe;width=175;height=20;");';
				}
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;url=contact_.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].$row3['OutletID'].' ;show='.$row3['CategoryID'].';url=menudetail.php?id='.$row3['CategoryID'].';target=iframe;width=175");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].$row4['OutletID'].' ;url=contact_.php?id='.$row4['CategoryID'].';target=iframe;width=175");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=175");';
			 //  }
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item4.'
						}
						';
						echo $javascript_menu4;
				
				
				//end menu 4
									
		
									}
							}
							
							$javascript_menu3.= 'with(new fxmenu("'.$row2['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item3.'
						}
						';
						echo $javascript_menu3;
				
				  // end menu 3
				  
				  
			}
			
		}
		$javascript_menu2.= 'with(new fxmenu("'.$row1['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item2.'
						}
						';
		echo $javascript_menu2;
	//end menu2
	}
}
$javascript_menu1.= 'with(new fxmenu("chinh")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=175;
							height=20;
							'.$javascript_menu_item1.'
						}
						';
//echo $javascript_menu1;
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