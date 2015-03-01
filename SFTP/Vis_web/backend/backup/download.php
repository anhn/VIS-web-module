<?PHP
extract($_POST);
include ("dbinfo.php");

function compress($zip) {
   // compress a file without using shell
   $zip=rtrim($zip); 
   $fp = @fopen("dump/backup.sql","rb");
   if (file_exists("dump/".$zip.".gz")) unlink("dump/".$zip.".gz");
   $zp = @gzopen("dump/".$zip.".gz", "wb9");
   if (!$fp) {
      die("No sql file found"); 
   }    
   if(!$zp) {
      die("Cannot create zip file");
   }    

   while(!feof($fp)){
	$data=fgets($fp, 8192);	// buffer php
	gzwrite($zp,$data);
   }
   fclose($fp);
   gzclose($zp);
   return true;
}
// end function

if ($zipit==1) {
   $farr[0]="backup.sql";
} elseif ($zipit==2 && compress($zipname)==true ) {
   $farr[0]=$zipname.".gz";
} else {
   die("File error");
}
  header('Cache-control: private');
  header('Content-Description: File Transfer');
  header('Content-Type: application/force-download');
- header("location:".$path."dump/".$farr[0]);
+ header("location:".dirname($_SERVER[PHP_SELF])."/dump/".$farr[0]);;   

?>         

	
	

