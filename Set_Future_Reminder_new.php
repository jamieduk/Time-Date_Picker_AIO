<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Set Reminder</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<title>J~Net</title>
<font size="3" color="red"> </font>

<link rel="stylesheet" type="text/css" href="/apps/css/button3.css">

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


<?php
include_once("../../tracker.php");
include_once("../../headerb.php");
?>
<p><br><br><p><br><p>

<script type="text/javascript">
function TimeDate(description,date,time){
var url="Set_Future_Reminder.php";
$.post(url, {action: "TimeDate", description:description,date:date,time:time} ,function(data) { alert(data); });
}
</script>

<div style="clear:center; height:24px;"></div>
<div style="float:center; height:auto; width:510px;background:#EBEBEB; margin-left:25px; margin-right:5px; border:#CCC 2px solid;">

<?php
include_once("../../php_includes/check_login_status.php");
$id=$_SESSION['user_id'];
$username=$_SESSION['username'];
ini_set("display_errors", "0");
error_reporting(E_ALL);
?>

<h1>Set Email Alarm</h1>


<style type="text/css">
    body {
font: 14px monospace;
    }
</style>
<center>
 <script type="text/javascript" src="js/IP_generalLib.js"></script>
<h1>Select A Date</h1>
<form action="/apps/alarm_email/Set_Future_Reminder.php" id="Time_And_Date"><center>
<input type="text" name="date1" id="date1" alt="date" class="IP_calendar" title="d/m/Y" required="required"><p>
 
<h1>Select A Time</h1>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/timepicki.css" rel="stylesheet">

        <div class="inner cover indexpicker" width="50px">
          
	    <input id="time" type="text" name="time" width="50px"/>
 
          </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/timepicki.js"></script>
    <script>
	$('#time').timepicki();
    </script>
    <script src="js/bootstrap.min.js"></script><center>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.clockinput.css">
<script type="text/javascript" src="js/jquery.clockinput.js"></script>
<script type="text/javascript">
    $("input[type=time]").clockInput(false);
</script>


<center>
<h1>Choose A Description</h1>
  <input type="text" id="description" name="description" placeholder="Reminder Description" required="required">
  <input type="submit" value="Set" style="cursor:pointer;" >
</form>
<!-- the result of the search will be rendered inside this div -->
<div id="result3"></div> <div id="result"></div> <div id="result2"></div>
<div id="msg"></div>
<script>
// Attach a submit handler to the form
$( "#Time_And_Date" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form=$( this ),
    date=$form.find( "input[name='date1']" ).val(),
    time=$form.find( "input[name='time']" ).val(),
    description=$form.find( "input[name='description']" ).val(),
    url=$form.attr( "action" );
 
  // Send the data using post
  var posting=$.post( url, { time: time } );
  var posting=$.post( url, { date1: date } );
  var posting=$.post( url, { description: description } );
  // Put the results in a div
  posting.done(function( data ) {
   // var content=$( data ).find( "#date1" );
    $( "#result3" ).empty().append( description ); //content
    $( "#result" ).empty().append( date ); //content
    $( "#result2" ).empty().append( time ); //content


// Send to reciever!
    TimeDate(description,date,time):
        };

     
        });

// end of send!
// Time & Date Not Set! check here!
  });
});
</script>


<?php
ini_set("display_errors", "0");
error_reporting(E_ALL);
$date=[];
$formatted_Date="";
if(isset($_GET['time'])) {
//$errors=array(); //To store errors
//$form_data=array(); //Pass back the data to `form.php`
// echo json_encode($form_data);
echo 'You have Created An Alarm.';
$description=preg_replace('#[^a-z0-9 :._]#i', '', $_GET['description']);
       $date=preg_replace('#[^a-z0-9 :._]#i', '', $_GET['date1']);
       $time=preg_replace('#[^a-z0-9 :._]#i', '', $_GET['time']);
// Set Date Format

$day    = $date[0];
$day   .= $date[1];
$month  = $date[2];
$month .= $date[3];
$year   = $date[4];
$year  .= $date[5];
$year  .= $date[6];
$year  .= $date[7];
$year  .= $date[8];
$formatted_Date="$day/$month/$year";
// Insert!!
$sql="INSERT INTO alarm_email (reminder_details, alarm_date, alarm_time, username) VALUES ('$description', '$formatted_Date', '$time', '$username')";

$query=mysqli_query($db_conx, $sql);
session_start();
$_SESSION["Saved"]='success';
echo "<center>Your Future Email Alarm Has Been Created!<br />";
header("location: user.php?u=".$_SESSION["username"]);
} else {
// Update failed!
//echo "Failed To Create Reminder!";
}

$numrows='0';
$res='';

$sql="SELECT * FROM alarm_email WHERE username='$username' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
$numrows=mysqli_num_rows($user_query);
if($numrows < 1) {

$res   ='<p> ';
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
$res .= "$Rusername";
$res .= '<p>';
$res .= "$date";
$res .= '<p>';
$res .= "$time";
$res .= '<p>';
$res .= "$details";
}
echo $res;

?>
<div id="breadcrumbsc" onclick="location.href='index.php';" style="cursor: pointer;">
<h2>Back</h2>
</div>



</body>
</html>
