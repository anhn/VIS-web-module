<?
include_once("./dblink.php");
require_once('./libs/Smarty.class.php');
include_once("./backend/functions/menu.php");

$SQL_r = "SELECT * FROM advertise where CategoryID='1'";
$query_r = mysql_query($SQL_r);
$row_r =  mysql_fetch_array($query_r);
$SQL_l = "SELECT * FROM advertise where CategoryID='2'";
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
bgcolor="#e4e4e4";
bgcoloron="#dcdcdc";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=3;
paddingleft=5;
arrow="arrowblack.gif";
arrowon="arrowwhite.gif";
arrowright=20;
arrowtop=1;
}
		
		
	with(menuStyle=new fxmenustyle()){
filterover="Alpha(opacity=90)";
menubgcolor="#E8E8FF";
menuborderwidth=0;
menubordercolor="#3366CC";
separatorsize=0;
separatorcolor="#3366CC";
highlightpath=true;
wiseposition=true;
}';
					
echo $javascript_menu_start;
if ($recordCount>0)
{
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 0, 4";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 	{ $javascript_menu_item0.='fx("text='.$row0['EngName'].' ;url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';}
		else
		{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].' ;show='.$row0['CategoryID'].';url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
		
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
					width=180;
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
		$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		}
		else
		{
			$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;show='.$row1['CategoryID'].';url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				}
				else
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;show='.$row2['CategoryID'].';url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;show='.$row3['CategoryID'].';url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].' ;url=contact.php?id='.$row4['CategoryID'].';target=iframe;width=185");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=185");';
			 //  }
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
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
							width=180;
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
							width=180;
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
							width=180;
							height=20;
							'.$javascript_menu_item1.'
						}
						';
//echo $javascript_menu1;
}
 
 				if ($recordCount >4)
{ 
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 4, 2";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 	{ $javascript_menu_item0.='fx("text='.$row0['EngName'].' ;url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';}
		else
		{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].' ;show='.$row0['CategoryID'].';url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
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
					width=180;
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
		$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		}
		else
		{
			$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;show='.$row1['CategoryID'].';url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				}
				else
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;show='.$row2['CategoryID'].';url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;show='.$row3['CategoryID'].';url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].' ;url=contact.php?id='.$row4['CategoryID'].';target=iframe;width=185");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=185");';
			 //  }
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
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
							width=180;
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
							width=180;
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
							width=180;
							height=20;
							'.$javascript_menu_item1.'
						}
						';
//echo $javascript_menu1;
}

 			
 				if ($recordCount >8)
{ 
	$SQL = "SELECT CategoryID, EngName, ShowInIndex, Photo, Queue, ActiveStatus, DATE_FORMAT(CreateDate, '%M %d, %Y %H:%i') AS CreateDate, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate FROM Menu WHERE PCID=0 and ActiveStatus='T' and ShowInIndex='T' ORDER BY Position LIMIT 7, 5";
	$rs0 = mysql_query($SQL);
	
	$javascript_menu_item0 = '';
	while($row0 = mysql_fetch_array($rs0))
	{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 	{ $javascript_menu_item0.='fx("text='.$row0['EngName'].' ;url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';}
		else
		{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].' ;show='.$row0['CategoryID'].';url=contact.php?id='.$row0['CategoryID'].';fontweight=bold;target=iframe");';
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
					width=180;
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
		$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		}
		else
		{
			$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;show='.$row1['CategoryID'].';url=contact.php?id='.$row1['CategoryID'].';target=iframe;width=185");';
		
			//level2
			 //sql
			$SQL2 = "SELECT * FROM Menu where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs2 = mysql_query($SQL2);
			$javascript_menu_item2 = '';
			while($row2 = mysql_fetch_array($rs2))
			{
				if($row2['Queue']=='0' && $row2['Queue']!='1')
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				}
				else
				{
					$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;show='.$row2['CategoryID'].';url=contact.php?id='.$row2['CategoryID'].';target=iframe;width=185");';
				
				//level3
				//sql
				
				  	$SQL3 = "SELECT * FROM Menu where PCID='$row2[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
       				    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{
								if($row3['Queue']=='0' && $row3['Queue']!='1')
									{
										$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
									}
								else
									{
									$javascript_menu_item3.='fx("text='.$row3['EngName'].' ;show='.$row3['CategoryID'].';url=contact.php?id='.$row3['CategoryID'].';target=iframe;width=185");';
				// start level4
				
			$SQL4 = "SELECT * FROM Menu where PCID='$row3[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
      	  $rs4 = mysql_query($SQL4);
			$javascript_menu_item4 = '';
			while($row4 = mysql_fetch_array($rs4))
			  {
			//if($row3['Queue']=='0')
				 { $javascript_menu_item4.='fx("text='.$row4['EngName'].' ;url=contact.php?id='.$row4['CategoryID'].';target=iframe;width=185");';}
			
				//else
			 // {
			//	$javascript_menu_item4.='fx("text='.$row4['EngName'].' >;show='.$row4['CategoryID'].';target=iframe;width=185");';
			 //  }
			}
				
			               $javascript_menu4.= 'with(new fxmenu("'.$row3['CategoryID'].'")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
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
							width=180;
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
							width=180;
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
							width=180;
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


<?
// San Pham

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
bgcoloron="#dcdcdc";
fontsize="8pt";
fontfamily="Verdana,Arial";
paddingtop=3;
paddingleft=3;
arrow="arrowblack.gif";
arrowon="arrowwhite.gif";
//arrowright=20;
//arrowtop=0;
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
with(new fxmenu("Sanpham")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=true;
position="relative";
top=160;
left=20;
width=180;
height=20;
orientation="horizontal";
fx("text=Vine Cellar ;fontweight=bold;show=Product;target=iframe");

}';
					
echo $javascript_menu_start;

$javascript_menu0.= '
                    with(new fxmenu("Product")){
					style=itemStyle;
					menustyle=menuStyle;
					visible=false;
					position="relative";
					top=0;
					left=0;
					width=180;
					height=20;
					';
echo $javascript_menu0;					
$sql0 = "SELECT * FROM Category where PCID=0 and ShowInIndex='T' and ActiveStatus='T'";
$rs0=mysql_query($sql0);
$cate='101010';
$javascript_menu_item0 = '';
while($row0 = mysql_fetch_array($rs0))
{ if ($row0['Queue']=='0' && $row0['Queue']!='1')
	 { $javascript_menu_item0.='fx("text='.$row0['EngName'].' ;url=category.php?id='.$row0['CategoryID'].';target=iframe");';}
	else
	{
		$javascript_menu_item0.='fx("text='.$row0['EngName'].';url=categorydetail.php?id='.$row0['CategoryID'].';show='.$row0['CategoryID'].'101010;target=iframe");';
	}
}					
echo $javascript_menu_item0;		

echo'}';


$javascript_menu1='';
$javascript_menu2='';
$javascript_menu3='';
$javascript_menu_item1 = '';
//level 1
$SQL1 = "SELECT * FROM Category where PCID=0 and ShowInIndex='T' and ActiveStatus='T'";
$rs1 = mysql_query($SQL1);
while($row1 = mysql_fetch_array($rs1))
{
	if($row1['Queue']=='0' && $row1['Queue']!='1')
	{
		$javascript_menu_item1.='fx("text='.$row1['EngName'].' ;url=category.php?id='.$row1['CategoryID'].';target=iframe;width=150");';
	}
	else
	{
		$javascript_menu_item1.='fx("text='.$row1['EngName'].';show='.$row1['CategoryID'].'101010;target=iframe;width=150");';
		
		//level2
		 //sql
		$SQL2 = "SELECT * FROM Category where PCID='$row1[CategoryID]' and ShowInIndex='T' and ActiveStatus='T'";
        $rs2 = mysql_query($SQL2);
		$javascript_menu_item2 = '';
		while($row2 = mysql_fetch_array($rs2))
		{
			if($row2['Queue']=='0' && $row2['Queue']!='1')
			{
				$javascript_menu_item2.='fx("text='.$row2['EngName'].' ;url=category.php?id='.$row2['CategoryID'].';target=iframe;width=150");';
			}
			else
			{
				$javascript_menu_item2.='fx("text='.$row2['EngName'].';url=product.php?id='.$row2['CategoryID'].';show='.$row2['CategoryID'].'101010;target=iframe;width=150");';
			
				//level3
				//sql
				//$SQL3 = "SELECT * FROM ProductCategory where CategoryID='$row2[CategoryID]'";
       			$SQL3 = "SELECT * FROM Product INNER JOIN ProductCategory ON Product.ProdID=ProductCategory.ProdID where CategoryID='$row2[CategoryID]'";
					    $rs3 = mysql_query($SQL3);
						$javascript_menu_item3 = '';
						while($row3 = mysql_fetch_array($rs3))
							{ 
							$javascript_menu_item3.='fx("text='.$row3['ProdCode'].' ;url=productdetail.php?id='.$row3['ProdID'].';target=iframe;width=150");';
							}
							
							$javascript_menu3.= 'with(new fxmenu("'.$row2['CategoryID'].'101010")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_menu_item3.'
						}
						';
						echo $javascript_menu3;
				
				  // end menu 3
				  
				  
			}
			
		}
		$javascript_menu2.= 'with(new fxmenu("'.$row1['CategoryID'].'101010")){
							style=itemStyle;
							menustyle=menuStyle;
							visible=false;
							position="relative";
							top=0;
							left=0;
							width=180;
							height=20;
							'.$javascript_menu_item2.'
						}
						';
		echo $javascript_menu2;
	//end menu2
	}
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
<td><script language="javascript1.2">fixMenu("Sanpham")</script></td>
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
id=_ctl0__ctl1__ctl0_HtmlHolder><iframe src="contact.php?id=1" name="iframe" width="100%" marginwidth="0" height="500px" marginheight="0" align="middle" scrolling="auto" frameborder="0" id="iframe"></iframe></TD>
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
	<A href="<? echo $row_r["EngName"]?>" target=_blank>
<IMG height=433 alt="" src=".<? echo $row_r["Queue"]?>" width=105 border=0>
<BR>
	</A></DIV>
	<DIV id=divAdRight style="LEFT: -110px; WIDTH: 115px; POSITION: absolute; TOP: 71px">
	<A href="<? echo $row_l["EngName"]?>" target=_blank>
	<IMG height=433 alt="" src=".<? echo $row_l["Queue"]?>" width=105 border=0></A></DIV>
	{literal}
	<SCRIPT language=JavaScript1.2 src=adv.js></SCRIPT>
	{/literal}
</BODY></HTML>
