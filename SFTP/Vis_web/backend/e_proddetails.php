<?php

include_once("./functions/dblink.php");
include_once("./functions/area.php");
include_once("./functions/category.php");

session_start();

if (isset($_SESSION["lang"])) {
} else  {
  $_SESSION["lang"] = "eng";
}

if (isset($_SESSION["area"]))  {
} else  {
  $_SESSION["area"] = SelectDefaultArea();
}

$menuContent = getCategory($_SESSION["lang"]);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Motic</title>
<link href="stylesheets/portal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#Layer2 {
	position:absolute;
	width:165px;
	height:46px;
	z-index:1;
}
-->
</style>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" id="pageContainer">
  <tr>
    <td align="center" valign="top"><table width="748" height="418" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="4" background="images/shade_left.gif">&nbsp;</td>
        <td width="740" valign="top">
<?php  include("header.php") ?>		
		<table width="740" height="279" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="11" align="left" valign="top">&nbsp;</td>
              <td width="718" valign="top"><table width="718" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="7"><img src="images/pic_topleft.jpg" width="7" height="7" /></td>
                  <td width="703"  class="general-topborder" ><img src="images/transparent.gif" width="1" height="1"/></td>
                  <td width="7"><img src="images/pic_topright.jpg" width="7" height="7" /></td>
                </tr>
              </table>
                <table width="718" height="132" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="7" class="general-leftborder"><img src="images/transparent.gif" width="1" height="1" /></td>
                    <td width="702" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" class="header"><img src="images/head_prod.gif" width="563" height="73" /></td>
                      </tr>
                    </table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="2%">&nbsp;</td>
                          <td width="98%"><a href="#" class="product_name">Categories</a> &gt; <span class="product_name"><a href="#" class="product_name">SubCategories</a></span> &gt; Products </td>
                        </tr>
                      </table>
                      <table width="703" height="32" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="15">&nbsp;</td>
                          <td width="146" align="left" valign="top">
						  <?php include("e_catmenu.php") ?>
						  <br /></td>
                          <td width="552" align="left" valign="top"><a href="#"></a>
                            <table width="542" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="13">&nbsp;</td>
                                <td width="529"><table width="529" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="312" valign="top" class="content"><p><span class="title">Model B1-211A</span><br />
                                      <br />
                                      Product Header Here <br />
                                      <br />
                                      Product Long description here<br />
                                      <br />
                                      <br />
                                    </p>
                                      </td>
                                    <td width="16">&nbsp;</td>
                                    <td width="201"><img src="images/dm143.gif" width="156" height="213" /></td>
                                  </tr>
                                </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><span class="general-title">Specification</span><br />
                                        <br />
                                        <span class="content">Product specification here</span></td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="8"></td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><span class="general-title">Features</span><br />
                                          <br />
                                          <span class="content">Product feature here</span></td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="8"></td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><span class="general-title">Downloads</span><br />
                                          <br />
                                          <ul>
                                            <li><a href="#" class="product_name">Download Driver </a></li>
                                            <li><a href="#" class="product_name">Download Document </a></li>
                                          </ul>
                                        </td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="8"></td>
                                    </tr>
                                  </table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><span class="general-title">Remarks</span><br />
                                          <span class="content"> Remark here </span></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                      </table>
                      <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                    <td width="7" class="general-rightborder"><img src="images/transparent.gif" width="1" height="1" /></td>
                  </tr>
                </table>
                <table width="718" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="7"><img src="images/pic_btmleft.jpg" width="7" height="7" /></td>
                    <td width="703"  class="general-btmborder" ><img src="images/transparent.gif" width="1" height="1"/></td>
                    <td width="7"><img src="images/pic_btmright.jpg" width="7" height="7" /></td>
                  </tr>
                </table></td>
              <td width="11">&nbsp;</td>
            </tr>
          </table>
          <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
            </tr>
          </table>
          <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
            </tr>
          </table></td>
        <td width="4" background="images/shade_right.gif">&nbsp;</td>
      </tr>
    </table>
      <table width="748" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="7" background="images/shade_btm.gif"></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
