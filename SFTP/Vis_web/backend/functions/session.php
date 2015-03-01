<?
session_start();

if ($_SESSION[logInfo][success] != 1) {    
	$msg="Please Login First.";
	header("location: ./login.php?msg=$msg");
}

$username=$_SESSION[logInfo][username];
$lastlogindate=$_SESSION[logInfo][lastlogindate];	

?>