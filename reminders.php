<title>J~Net</title>
<font size="3" color="red"> </font>

<style>
{width:100%;border:1px #444444 solid;background-color:}
H3 {margin-top:0px;font:bold 14pt '';color:#ff4444}
TD {font:normal 14pt '';color:#ff4444}
A {color:#444444}
</style>
</head>
<center>
<p>
<font color="blue" font size="+1">
<link rel="stylesheet" type="text/css" href="/apps/css/button3.css">

<?php
include_once("../../tracker.php");
include_once("../../headerb.php"); ?>
<p><br><br><p>
<br>
<style>
img:hover {
opacity:0.5;
}

#subcol1{
max-width:260px;

}
</style>

<div style="clear:center; height:24px;"></div>
<div style="float:center; height:auto; width:500px;background:#EBEBEB; margin-left:25px; margin-right:5px; border:#CCC 2px solid;"><br>

<h2>Your Reminders</h2>
<?php
$sql="SELECT * FROM alarm_email WHERE username='$username' ORDER BY id DESC";
$query=mysqli_query($db_conx, $sql);
echo "<table border cellpadding=3 bgcolor=\"00FF00\">";
$gap=" ";
while($info=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
$rid=$info['id'];
$reminder_details=$info['reminder_details'];
$alarm_date=$info['alarm_date'];
$alarm_time=$info['alarm_time'];
echo "<tr>"; 
echo "<th>Reminder</th> <td>".$reminder_details. "</td> "; 
echo "<th>Date</th> <td>".$alarm_date. $gap. $alarm_time."<td><a href='view.php?rid=$rid'><img src='images/info.png' widgth='40px' height='40px'></a></td>
    </td></tr>"; 
}

echo "</table>";
$num_rows=mysqli_num_rows($query);
echo "<p><br></p>";
echo "<div id='subcol1'>$num_rows Reminders Found</div>";

?>


<div id="breadcrumbsc" onclick="location.href='index.php';" style="cursor: pointer;">
<h2>Back</h2>
</div>

<p><br>
</div> 
