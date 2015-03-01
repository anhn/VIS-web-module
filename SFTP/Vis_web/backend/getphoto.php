<?php
include_once("./functions/dblink.php");
$sql = "SELECT Photo FROM ProductMaster WHERE ProductID=".$_GET['id'];
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
header("Content-type: image/png");
echo ($row['Photo']);
?>
