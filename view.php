<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>J~Net Reminders</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<link rel="stylesheet" type="text/css" href="/apps/css/button3.css">
<style>
{width:100%;border:1px #444444 solid;background-color:}
H3 {margin-top:0px;font:bold 14pt '';color:#ff4444}
TD {font:normal 14pt '';color:#ff4444}
A {color:#444444}
</style>
<style type="text/css" media="screen">
a:link { color:blue; text-decoration: none; background-color: green; }
a:visited { color:blue; text-decoration: none; }
a:hover { color:#33348e; text-decoration: none; background-color: green; }
a:active { color:#7476b4; text-decoration: underline; }
</style>
<?php
include_once("../../tracker.php");
include_once("../../headerb.php"); 
if(isset($_GET['rid'])) {
$rid=preg_replace('#[^0-9]#i', '', $_GET['rid']);
}
?>

<center>
<?php
ini_set("display_errors", "0");
error_reporting(E_ALL);
$numrows='0';
$res='';
$date='';
//
$sql="SELECT * FROM alarm_email WHERE username='$username' AND id='$rid' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
$numrows=mysqli_num_rows($user_query);
if($numrows < 1) {

$res   ='<p><br><p><br> ';
$res  .= 'No Reminders Set For Future Reminder Emails!';
} else {
while($row=mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$rid=$row["id"];
$Rusername=$row["username"];
$details=$row["reminder_details"];
$date=$row["alarm_date"];
$time=$row["alarm_time"];
}
$res ='<p>';
//$res .= "$Rusername";
$res .= "Description $details";
$res .= '<p>';
$res .= "Date $date";
$res .= '<p>';
$res .= "Time $time";
$res .= '<p>';
$res .= '<a href="del.php?rid='.$rid.'">Delete</a>';
//$date=str_replace("/", "", "$date");
}


$dt=DateTime::createFromFormat('!d/m/Y', "$date");
$Month_f=strtoupper($dt->format('M')); # 24 DEC
$Day_f=strtoupper($dt->format('d')); # 24 DEC
$Year_f=strtoupper($dt->format('Y')); # 24 DEC
$target_Date="$Month_f $Day_f, $Year_f $time";

//echo $target_Date;
?>
  <body>
    <div class="page">
      <div class="countdown-col col">
        <div class="time middle">
         <span><div id="Res"></div></span>
            <span id="day_display"><div id="d"></div>
            Days
          </span>
          <span id="hour_display">
            <div id="h"></div>
            Hours
          </span>
          <span id="minute_display">
            <div id="m"></div>
            Minutes
          </span>
          <span id="second_display">
            <div id="s"></div>
            Seconds
          </span>
        </div> 
      </div>
    
        </div>
      </div>
    </div>
    <script>
var Res=document.getElementById('Res');
var d=document.getElementById('d');
var h=document.getElementById('h');
var m=document.getElementById('m');
var s=document.getElementById('s');
var dd=document.getElementById('day_display');
var hd=document.getElementById('hour_display');
var md=document.getElementById('minute_display');
var sd=document.getElementById('second_display');

//
function Ended(){
Res.innerHTML="Countdown Finished!";
d.innerHTML="";
h.innerHTML="";
m.innerHTML="";
s.innerHTML="";
d.style.display='none';
h.style.display='none';
m.style.display='none';
s.style.display='none';
dd.style.display='none';
hd.style.display='none';
md.style.display='none';
sd.style.display='none';
clearTimeout(setInterval);
alert('Countdown Finished!');
}
var comingdate=new Date("<?php echo $target_Date;?>");

var x=setInterval(function(){
  var now=new Date();
  var des=comingdate.getTime() - now.getTime();
  var days=Math.floor(des/(1000 * 60 * 60 * 24));
  var hours=Math.floor(des%(1000 * 60 * 60 * 24) / (1000 * 60 *60));
  var mins=Math.floor(des%(1000 * 60 * 60) / (1000 * 60));
  var secs=Math.floor(des%(1000 * 60) / 1000);
  if(secs < 1 && mins < 1 && hours < 1 && days < 1)  Ended();
  d.innerHTML=getTrueNumber(days);
  h.innerHTML=getTrueNumber(hours);
  m.innerHTML=getTrueNumber(mins);
  s.innerHTML=getTrueNumber(secs);

  if(des <= 0) clearInterval(x);

},1000);

function getTrueNumber(x) {
  if (x<10) return '0'+x;
  else return x;
}
</script>


<?php echo $res;?>
<center>
<div id="breadcrumbsc" onclick="location.href='index.php';" style="cursor: pointer;">
<h2>Back</h2>
</div>

<p><br>
  </body>
</html>
