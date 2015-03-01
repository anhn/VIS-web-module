<?

function getContactUsContent() {
	$SQL = "SELECT SChnContent, TChnContent, EngContent, DATE_FORMAT(ModifyDate, '%M %d, %Y %H:%i') AS ModifyDate, ContactID FROM ContactUs";
	$result = mysql_query($SQL);
	return $result;
}

function UpdateContentUs($sChnContent, $tChnContent, $engContent, $cuID) {
	$SQL = "UPDATE ContactUs SET SChnContent='$sChnContent', TChnContent='$tChnContent', EngContent='$engContent', ModifyDate=NOW() WHERE ContactID=$cuID";
	$result = mysql_query($SQL);
	return $result;
}

?>
