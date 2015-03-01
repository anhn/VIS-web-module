<?
include_once("./functions/dblink.php");

$sql="SELECT * FROM temp";
$query=mysql_query($sql);

if ($query) {
	 $num=mysql_num_rows($query);
	if ($num==0) {
		print "&haverecord=0";
	} else {
		$count=0;
		while ($row=mysql_fetch_array($query)) {
			if ($count!=0) { $title=$title.'|'; $description=$description.'|'; $articleid=$articleid.'|';$catid=$catid.'|';}
			$title=$title.$row[link_title];
			$description=$description.$row[description];
			$articleid=$articleid.$row[id_article];
			$catid=$catid.$row[link_id_cat1];
			$count++;
		}
		print "&title=".$title;
		print "&description=".$description;
		print "&articleid=".$articleid;
		print "&catid=".$catid;
		print "&countrecord=".$count;
	}
} else {
	print "&haverecord=0";
}

?>