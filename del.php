<?php
include_once("../../headerb.php");
require("tracker.php");
// Check login
if(!$_SESSION['userid']){
header("Location: /login.php");
exit;
}
$rid="";
ini_set("display_errors", "1");
error_reporting(E_ALL | ~E_NOTICE);
// Removing Job
$rid=preg_replace('#[^0-9]#i', '', $_GET['rid']);

$sql="DELETE FROM alarm_email WHERE id='$rid' AND username='$username'";
$query=mysqli_query($db_conx, $sql);
$num=mysqli_affected_rows($db_conx);
if($num >0){
echo '<center><p><br><p><br><p><br><p><br><div style="float:center; height:auto; width:850px;background:#EBEBEB; margin-left:25px; margin-right:5px; border:#CCC 2px solid;">';
echo "<center><p><br><h2>Job Deleted</h2><br />";
echo "<p><a href='index.php'><img src='../../images/continue.jpg'></a></center>";
} else {
echo '<center><p><br><p><br><p><br><p><br><div style="float:center; height:auto; width:850px;background:#EBEBEB; margin-left:25px; margin-right:5px; border:#CCC 2px solid;">';
echo "<p><br><h2>Removal Of Job Failed!<h2><p><a href='index.php'><img src='../../images/continue.jpg'></a>";
}

?>
<title>J~Net Jobs</title>
<p><br><p><br><p><br><p><br>
<link rel="stylesheet" type="text/css" href="css/button3.css">
<center>






<p><br>
<div id="breadcrumbsc" onclick="location.href='index.php';" style="cursor: pointer;">
<h2>Back</h2>
</div>


<br>
</div>


