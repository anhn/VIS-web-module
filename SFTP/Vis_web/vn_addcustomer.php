<?
include_once("./dblink.php");
$msg="";

if ($_POST[FName]!="" && $_POST[LName]!="" && $_POST[Comment]!="")
{
#	      $success = InsertCategory($_POST["engname"], $_POST["pcid"], $_POST["photo"], $_POST["queue"], $_POST["status"], $_POST["show"], $_POST["position"], $_POST["sphoto"], $_POST["activefile"], $_POST["file"]);
$SQL = "INSERT INTO customer SET FirstName = '$_POST[FName]', LastName = '$_POST[LName]', Comment = '$_POST[Comment]'";
	$success = mysql_query($SQL);
	      if (!$success)  {
	        $msg.= "Update Data Failed"; 
	      } else {
	        $msg.= "Update Data Successful"; 
	      }
	     # header("location: ./addcustomer.php");
		 
}	      

?>
<HTML><HEAD id=Head><TITLE>Vine Wine Boutique Bar & Café</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="" name=DESCRIPTION>
<META content=",Portal, S-Portal,DNN" name=KEYWORDS>
<META content="Copyright 2002-2004 VSS" name=COPYRIGHT>
<META content="MSHTML 6.00.2900.3020" name=GENERATOR>
<META content=Vine-group name=AUTHOR>
<META content=DOCUMENT name=RESOURCE-TYPE>
<META content=GLOBAL name=DISTRIBUTION>
<META content="INDEX, FOLLOW" name=ROBOTS>
<META content="1 DAYS" name=REVISIT-AFTER>
<META content=GENERAL name=RATING>
<STYLE id=StylePlaceholder></STYLE>
<LINK id=_portal_Portals__default_ href="./images/default2.css" type=text/css rel=stylesheet></LINK>
<LINK id=_portal_Portals_0_ href="./images/portal.css" type=text/css rel=stylesheet></LINK>
<SCRIPT language="JavaScript">
function submitform()
{
  document.myform1.submit();
}
</SCRIPT>
</HEAD>
<BODY id=Body bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0" bgColor=#e4e4e4>

<H1 class=hdrcontent>Customer Comment<BR></H1><BR><BR>
<P>Please send us the following information to complete your&nbsp; application. </P>
<center>
 <form action="./vn_addcustomer.php" name="myform1" method="post" enctype="multipart/form-data">
<TABLE cellSpacing=5 cellPadding=0 width="88%" border=0>
<TBODY>
      <TR> 
        <TD class=formcaption width="20%"> Tên<SPAN class=normalText_Red>*</SPAN></TD>
          <TD width="48%"><input name="FName" type="text" id="FName"></TD>
<TD class=formcaption width="10%"><BR><SPAN class=normalText_Red></SPAN></TD>
<TD class=normalText width="22%" rowSpan=2><BR><BR></TD></TR>
      <TR> 
        <TD class=formcaption>Email<SPAN class=normalText_Red>*</SPAN></TD>
          <TD><input name="LName" type="text" id="LName"></TD>
<TD class=formcaption>&nbsp;</TD></TR>
      <TR> 
        <TD height="20" class=formcaption>Nội dụng<SPAN class=normalText_Red></SPAN></TD>
        <TD colSpan=3> 
          <textarea name="Comment" cols="30" rows="7" id="Comment"></textarea>
        
        <SPAN class=txt><BR>
        </SPAN></TD></TR>
<TR>
<TD class=formcaption><BR></TD>
<TD colSpan=3><BR><? echo $msg; ?></TD></TR>
<TR>
        <TD height="38" class=formcaption></TD>
<TD colSpan=3><BR><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"></TD>
</TR></TBODY></TABLE><BR>
</form>
</body>
</html>
</center>