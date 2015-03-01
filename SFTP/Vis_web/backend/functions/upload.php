<?

function checkfile($path) {
	if (file_exists($path)) { 
		return true;
	} else {
		return false;
	}
}


function upfile($file,$path) {
	$res = copy($file['tmp_name'], $path);
	if (!$res) { 
		return false;
	} else { 
		return true;
	}
}

?>