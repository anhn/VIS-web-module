<?php

include_once("./functions/dblink.php");
//include_once("./functions/category.php");
#include_once("./functions/regiongroup.php");
include_once("./functions/products.php");
include_once("./spaw/spaw_control.class.php"); // PHP Text Area Control

session_start();

if ($_SESSION[logInfo][success]==1) {    
	
	switch($_POST["submit"])  {
	  case "Save":
	  	  $master['ProductName'] = '';
	  	  $master['VnProductName'] = '';
	  	  $master['CategoryID'] = '';
	  	  $master['FamilyID'] = '';
	  	  //$master['OutletID'] = array();
	  	  $master['Description'] = '';
	  	  $master['EngShortDesc'] = '';
	  	  $master['VnShortDesc'] = '';
	  	  $master['EngLongDesc'] = '';
	  	  $master['VnLongDesc'] = '';
	  	  //$info['Photo'] = '';
	  	  $master['IsPromotion'] = '';
	  	  $master['Qty'] = '';
	  	  $detail['Qty'] = '';
	  	  $detail['BookedQty'] = '';
	  	  $detail['Cost1'] = '';
	  	  $detail['Cost2'] = '';
	  	  $detail['Price1'] = '';
	  	  $detail['Price2'] = '';
	  	  $detail['Price3'] = '';
	  	  $detail['PriceDiscount1'] = '';
	  	  $detail['PriceDiscount2'] = '';
	  	  $detail['PriceDiscount3'] = '';
	  	  $master['Remarks1'] = '';
	  	  $master['Remarks2'] = '';
	  	  $master['ViewStatus'] = '';
	  	  $detail['ViewStatus'] = '';
	  	  foreach ($master as $key=>$val) {
	  	  	$master[$key] = $_POST[$key];
	  	  }
	  	  foreach ($detail as $key=>$val) {
	  	  	$detail[$key] = $_POST[$key];
	  	  }
	  	  $info['Photo'] = '';
			if (is_uploaded_file($_FILES['Photo']['tmp_name'])) {
				$fh = fopen($_FILES['Photo']['tmp_name'], "rb");
				$master['Photo'] = "0x".bin2hex(fread($fh,filesize($_FILES['Photo']['tmp_name'])));
			} else {
				unset($master['Photo']);
			}
			$success = InsertProduct($master,$detail,$_POST['OutletID'],$_POST['OutletPrice'],$_POST['CharacteristicTypeID'],$_POST['Name']);

	      if (!$success)  {
	        $msg = "Update Data Failed"; 
	      } else {
	        $msg = "Update Data Successful"; 
	      }
	      header("location: ./viewproduct.php?msg=$msg");	 
	      exit();		  
		break;
	}
	
	#$regionCount = GetRecNoInRegion();
	#$regionResult = SelectAllRegionInPage(0, $regionCount);			
	
	#$catCount = GetRecNo("", "All");
	#$catCount = GetRecNoInProduct();
	#$catResult = SelectAllCategoryInPage(0, $catCount);			

	$username=$_SESSION[logInfo][username];
	$lastlogindate=$_SESSION[logInfo][lastlogindate];	
} else {
	header("location: ./index.php");	
}

?>

<?php
//if (!empty($_POST)) echo '<pre>$_POST:'.print_r($_POST,true).'</pre>';
//if (!empty($_GET)) echo '<pre>$_GET:'.print_r($_GET,true).'</pre>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<script src="functions.js" type="text/javascript" language="javascript"></script>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />

<script language="javascript">
<!--

function validateFields()  {
  f = document.prodform;

  if( f.prodcode.value.length == 0 )  {
    alert("Please input a Model No.");
    f.prodcode.focus();
	return false;
  }
  
  f.submit();
  return true;
}
//-->
</script>



</head>


<body onLoad="prodform.prodcode.focus();">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="490" align="left" valign="top"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td width="46%" align="left" valign="middle"></td>
          <td width="46%" align="right" valign="top"><span class="general-body">Welcome <? echo $username ?><br />
</span></td>
          <td width="4"></td>
        </tr>
      </table>
      <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="4%"></td>
          <td align="left" valign="middle"><p class="general-body"><br />
          </p></td>
          <td width="4"></td>
        </tr>
      </table>
      <table width="100%" height="32" border="0" cellpadding="1" cellspacing="1"
        <tr>
          <td width="8%"></td>
          <td width="88%" align="left" valign="top"><form action="./addproduct.php" method="post" name="prodform" enctype="multipart/form-data">
            <table width="600"  border="1" cellpadding="1" cellspacing="1" bordercolor="#EDF3E3" bgcolor="#eeeeee">
              <tr bgcolor="#646464" style="border:1 ">
                <td colspan="4" class="thead"><font color="#00ff00" size="3">
				    Add New Product </font></td>
              </tr>
              <tr>
			   <td width="100" align="left" class="general-search">Name (English): </td>
			  <td><input name="ProductName" type="text" value="" size="20" maxlength="100" /> 
              </tr>
			  
			  <tr>
			      <td width="100" align="left" class="general-search">Name
                    (Viet Nam):</td>
			  <td><input name="VnProductName" type="text" value="" size="20" maxlength="100" /> 
              </tr>
			  <tr>
                <td width="100" align="left" class="general-search">Category ID </td>
                <td colspan="4" align="left" class="general-body">
				<select name="CategoryID">
				<?php
				echo tree_view("ProductCategory","CategoryID","CategoryName","ParentCategoryID",0,0);
				?>
				</select>
				</td>
              </tr>
			  <tr>
                <td width="100" align="left" class="general-search">Family ID </td>
                <td colspan="4" align="left" class="general-body">
				<select name="FamilyID">
				<option value="">&nbsp;
				<?php
				$sql = "SELECT * FROM ProductFamily";
				$fresult = mysql_query($sql);
				while ($frow = mysql_fetch_array($fresult)) {
					echo '<option value='.$frow['FamilyID'].'>'.$frow['Name'];
				}
				?>
				</select>
				</td>
              </tr>
			  <tr>
                <td width="100" align="left" class="general-search">Characteristic Type ID </td>
                <td colspan="4" align="left" class="general-body" id='pcharac'>
				<script>
				function addmore() {
					var newNode = document.getElementById('acharac1').cloneNode(true);
					document.getElementById('numrow').value++;
					newNode.id = "acharac"+document.getElementById('numrow').value;
					document.getElementById('pcharac').insertBefore(newNode,document.getElementById('more'))
				}
				function remove(obj) {
					if (document.getElementById('numrow').value > 1) {
						document.getElementById('numrow').value--;
						document.getElementById('pcharac').removeChild(obj);
					}
				}
				</script>
                <input type="hidden" name="numchar" id="numrow" value="1">
                <div id='acharac1'>
					<select name="CharacteristicTypeID[]">
					<option value="">&nbsp;
					<?php
					$sql = "SELECT * FROM CharacteristicType";
					$fresult = mysql_query($sql);
					while ($frow = mysql_fetch_array($fresult)) {
						echo '<option value='.$frow['ID'].'>'.$frow['Name'];
					}
					?>
					</select>
					<input type="text" name="Name[]" value="">
					<font onclick="remove(this.parentNode);" style="cursor:pointer;">Remove</font>
				</div>
				<div onclick="addmore();" id="more" style="cursor:pointer;">More...</div>
				</td>
              </tr>
			 <tr>
                <td width="100" align="left" class="general-search">Show in outlet</td>
                <td colspan="4" align="left" class="general-body">
				<table width="100%" border="0">
				<?php
				$sql = "SELECT * FROM Outlet";
				$outletresult = mysql_query($sql);
				$ii = 0;
				while ($outletrow = mysql_fetch_array($outletresult)) {
					if ($ii % 2 ==0) echo '<tr>';
					echo '<td>';
					echo '<input type="checkbox" name="OutletID['.$ii.']" value="'.$outletrow['ID'].'">'.$outletrow['Name'].'&nbsp;';
					echo '- Price: <input type="text" size="4" name="OutletPrice['.$ii.']" value="'.$outletrow['Price'].'">&nbsp;';
					echo '</td>';
					if ($ii % 2 ==1) echo '</tr>';
					$ii++;
				}
				?>
				</table>
				</td>
              </tr>
			  
              <tr>
                <td width="100" align="left" valign="top" class="general-search">Description: </td>
                <td colspan="4" align="left" class="general-body"><?php
				    $sw = new SPAW_Wysiwyg('Description','','en','default','classic','300px','100px');
				    $sw->show();
				  ?>
                </td>
              </tr>				  	  
             <tr>
                <td width="100" align="left" valign="top" class="general-search">Short Description (English): </td>
                <td colspan="4" align="left" class="general-body"><?php
				    $sw = new SPAW_Wysiwyg('EngShortDesc','','en','default','classic','300px','100px');
				    $sw->show();
				  ?>
                </td>
              </tr>		
			  
              <tr>			  
                  <td width="100" align="left" valign="top" class="general-search">Short Decription
                    (Viet Nam):</td>
                <td colspan="4" align="left" class="general-body">
				  <?php
				    $sw = new SPAW_Wysiwyg('VnShortDesc','','en','default','classic','300px','100px');
				    $sw->show();
				  ?>            
				</td>
			  </tr>
				
				<tr>			  
                  <td width="100" align="left" valign="top" class="general-search">Long Decription
                    (English):</td>
                <td colspan="4" align="left" class="general-body">
				  <?php
				    $sw = new SPAW_Wysiwyg('EngLongDesc','','en','default','classic','300px','100px');
				    $sw->show();
				  ?>            
				</td>
              </tr>			  	  	  
				<tr>			  
                  <td width="100" align="left" valign="top" class="general-search">Long Decription
                    (Viet Nam):</td>
                <td colspan="4" align="left" class="general-body">
				  <?php
				    $sw = new SPAW_Wysiwyg('VnLongDesc','','en','default','classic','300px','100px');
				    $sw->show();
				  ?>            
				</td>
              </tr>			  	  	  
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Photo
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Photo" type="file"/>
                </td>
              </tr>	
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Is Promotion: </td>
                <td colspan="4" align="left" class="general-body">
				<input name="IsPromotion" type="radio" value="T" checked="checked">Enable
				<input name="IsPromotion" type="radio" value="F">Disable
                </td>
              </tr>	
              </tr>
			<!--
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Quantity
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Qty" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Booked quantity
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="BookedQty" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Cost 1
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Cost1" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Cost 2
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Cost2" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
                <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price 1
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Price1" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
			  <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price 2
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Price2" type="text" value="" size="20" maxlength="100" />
                 </td>
              </tr>	
			  <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price 3
                    : </td>
                <td colspan="4" align="left" class="general-body">
				<input name="Price3" type="text" value="" size="20" maxlength="100" />
				             
				</td>
              </tr>	
			  <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price Discount 1
                    :</td>
                <td colspan="4" align="left" class="general-body">
				   <input name="PriceDiscount1" type="text" id="v" value="" size="20" maxlength="100" />    
				</td>
              </tr>		
			  
			  <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price Discount 2
                    :</td>
                <td colspan="4" align="left" class="general-body">
				   <input name="PriceDiscount2" type="text" id="v" value="" size="20" maxlength="100" />    
				</td>
              </tr>
			  
			   <tr> 
                  <td width="100" align="left" valign="top" class="general-search">Price Discount 3
                    :</td>
                <td colspan="4" align="left" class="general-body">
				   <input name="PriceDiscount3" type="text" id="v" value="" size="20" maxlength="100" />    
				</td>
              </tr>
			-->
			    	  	  			  
              <tr>
                <td width="100" align="left" valign="top" class="general-search">Remark 1: </td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
				    $sw = new SPAW_Wysiwyg('Remarks1','','en','default','classic','300px','100px');
				    $sw->show();
		          ?>
                </td>
              </tr>	
			  
			       <tr>
                  <td width="100" align="left" valign="top" class="general-search">Remark 2:</td>
                <td colspan="4" align="left" class="general-body">
				  <?php 
				    $sw = new SPAW_Wysiwyg('Remarks2','','en','default','classic','300px','100px');
				    $sw->show();
		          ?>
                </td>
              </tr>
			  
              <tr>
                <td class="general-search">Active Status: </td>
                <td colspan="4" class="general-body">
				  <input name="ViewStatus" type="radio" value="T" checked="checked" />
                  Active
                  <input name="ViewStatus" type="radio" value="F" />
                  Inactive</td>
              </tr>

              <tr>
                <td>&nbsp;</td>
                <td colspan="4"><input name="submit" type="submit" class="general-body" value="Save"/>
                    <input type="reset" name="Reset" value="Reset" class="general-body"/>
                </td>
              </tr>
            </table>
          </form></td>
          <td width="4"></td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>
