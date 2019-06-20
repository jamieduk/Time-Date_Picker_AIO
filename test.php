<title>J~Net</title>
<font size="3" color="red"> </font>
<body style="background:#000000">
<body bgcolor="#000000" text="#FFFFFF" link="#0000FF"> 

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
//include_once("../../tracker.php");
//include_once("../../headerb.php"); 
?>
<p><br><br><p><br><p>


<div style="clear:center; height:24px;"></div>
<div style="float:center; height:auto; width:510px;background:#EBEBEB; margin-left:25px; margin-right:5px; border:#CCC 2px solid;">

<?php
include_once("../../php_includes/check_login_status.php");
$id=$_SESSION['user_id'];
$u=$_SESSION['username'];
ini_set("display_errors", "0");
error_reporting(E_ALL);
?>

        <h1>Set Email Alarm</h1>

 <script type="text/javascript" src="js/IP_generalLib.js"></script>

 
<input type="text" name="date1" id="date1" alt="date" class="IP_calendar" title="d/m/Y">
 


        <style type="text/css">
            body {
                font: 14px monospace;
            }
        </style>
    </head>
    <body>
<center>


        <input type="time" value="01:30" min="0:00" max="18:02">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.clockinput.css">
        <script type="text/javascript" src="js/jquery.clockinput.js"></script>
        <script type="text/javascript">
            $("input[type=time]").clockInput(false);
        </script>

<?php

if(isset($_POST['submit'])) {
$persinfo=preg_replace('#[^a-z0-9 :._]#i', '', $_POST['persinfo']);
$sql="UPDATE alarm_email SET details='$persinfo', date='$persinfo1' WHERE username ='$u'";
$query=mysqli_query($db_conx, $sql);
session_start();
$_SESSION["Saved"]='success';
echo "<center>Your Future Email Alarm Has Been Updated!<br />";
header("location: user.php?u=".$_SESSION["username"]);
} else {
// Update failed!
//echo "Failed To Update!";
}

$numrows='0';
$res='';

$sql="SELECT * FROM alarm_email WHERE username ='$u' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
$numrows=mysqli_num_rows($user_query);
if($numrows < 1) {

$res   ='<p> ';
$res  .= 'No Reminders Set For Future Reminder Emails!';
} else {
while($row=mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$rid=$row["id"];
$username=$row["username"];
$details=$row["reminder_details"];
$date=$row["date"];
$time=$row["time"];
}
$res ='<p>';
$res .= "$username";
$res .= '<p>';
$res .= "$date";
$res .= '<p>';
$res .= "$time";
$res .= '<p>';
$res .= "$details";
}
echo $res;

?>
<center><p><br><p>
<script>
$("button").click(function() {
    $(inputselector).datepicker('show');


});
</script>

<button id="button">Set</button>

<form action='Set_Future_Reminder.php' method='POST'>
Add/Edit Future Email Reminder<br /> 
<input type='text' name='persinfo' size='50' placeholder='Example: Remeber this event'></input>
<br />
<a href='index.php'><input type='button' value='Back'></a>
<input type='submit' name='submit' value='Update Reminder'></form>
</center>
</div>

    <body>
<center>


        <input type="time" value="01:30" min="0:00" max="18:02">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.clockinput.css">
        <script type="text/javascript" src="js/jquery.clockinput.js"></script>
        <script type="text/javascript">
            $("input[type=time]").clockInput(false);
        </script>

<?php

if(isset($_POST['submit'])) {
$persinfo=preg_replace('#[^a-z0-9 :._]#i', '', $_POST['persinfo']);
$sql="UPDATE alarm_email SET details='$persinfo', date='$persinfo1' WHERE username ='$u'";
$query=mysqli_query($db_conx, $sql);
session_start();
$_SESSION["Saved"]='success';
echo "<center>Your Future Email Alarm Has Been Updated!<br />";
header("location: user.php?u=".$_SESSION["username"]);
} else {
// Update failed!
echo "Failed To Update!";
}

$numrows='0';
$res='';

$sql="SELECT * FROM alarm_email WHERE username ='$u' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
$numrows=mysqli_num_rows($user_query);
if($numrows < 1) {

$res  ='<p> ';
$res  .= 'No Reminders Set For Future Reminder Emails!';
} else {
while($row=mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$rid=$row["id"];
$username=$row["username"];
$details=$row["reminder_details"];
$date=$row["date"];
$time=$row["time"];
}
$res ='<p>';
$res .= "$username";
$res .= '<p>';
$res .= "$date";
$res .= '<p>';
$res .= "$time";
$res .= '<p>';
$res .= "$details";
}
echo $res;

?>
<center><p><br><p>
<script>
$("button").click(function() {
    $(inputselector).datepicker('show');


});
</script>

<button id="button">Set</button>

<form action='Set_Future_Reminder.php' method='POST'>
Add/Edit Future Email Reminder<br /> 
<input type='text' name='persinfo' size='50' placeholder='Example: Remeber this event'></input>
<br />
<a href='index.php'><input type='button' value='Back'></a>
<input type='submit' name='submit' value='Update Reminder'></form>
</center>
</div>

    <body>
<center>


        <input type="time" value="01:30" min="0:00" max="18:02">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.clockinput.css">
        <script type="text/javascript" src="js/jquery.clockinput.js"></script>
        <script type="text/javascript">
            $("input[type=time]").clockInput(false);
        </script>

<?php

if(isset($_POST['submit'])) {
$persinfo=preg_replace('#[^a-z0-9 :._]#i', '', $_POST['persinfo']);
$sql="UPDATE alarm_email SET details='$persinfo', date='$persinfo1' WHERE username ='$u'";
$query=mysqli_query($db_conx, $sql);
session_start();
$_SESSION["Saved"]='success';
echo "<center>Your Future Email Alarm Has Been Updated!<br />";
header("location: user.php?u=".$_SESSION["username"]);
} else {
// Update failed!
echo "Failed To Update!";
}

$numrows='0';
$res='';

$sql="SELECT * FROM alarm_email WHERE username ='$u' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
$numrows=mysqli_num_rows($user_query);
if ($numrows < 1) {

$res  ='<p> ';
$res  .= 'No Reminders Set For Future Reminder Emails!';
} else {
while ($row=mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$rid=$row["id"];
$username=$row["username"];
$details=$row["reminder_details"];
$date=$row["date"];
$time=$row["time"];
}
$res ='<p>';
$res .= "$username";
$res .= '<p>';
$res .= "$date";
$res .= '<p>';
$res .= "$time";
$res .= '<p>';
$res .= "$details";
}
echo $res;

?>
<center><p><br><p>
<script>
$("button").click(function() {
    $(inputselector).datepicker('show');


});
</script>

<button id="button">Set</button>

<form action='Set_Future_Reminder.php' method='POST'>
Add/Edit Future Email Reminder<br /> 
<input type='text' name='persinfo' size='50' placeholder='Example: Remeber this event'></input>
<br />
<a href='index.php'><input type='button' value='Back'></a>
<input type='submit' name='submit' value='Update Reminder'></form>
</center>
</div>

<center>


        <input type="time" value="01:30" min="0:00" max="18:02">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.clockinput.css">
        <script type="text/javascript" src="js/jquery.clockinput.js"></script>
        <script type="text/javascript">
            $("input[type=time]").clockInput(false);
        </script>

<?php

if(isset($_POST['submit'])) {
$persinfo=preg_replace('#[^a-z0-9 :._]#i', '', $_POST['persinfo']);
$sql="UPDATE alarm_email SET details='$persinfo', date='$persinfo1' WHERE username ='$u'";
$query=mysqli_query($db_conx, $sql);
session_start();
$_SESSION["Saved"]='success';
echo "<center>Your Future Email Alarm Has Been Updated!<br />";
header("location: user.php?u=".$_SESSION["username"]);
}
else {

}

$numrows='0';
$res='';

$sql="SELECT * FROM alarm_email WHERE username ='$u' LIMIT 1";
$user_query=mysqli_query($db_conx, $sql);
mysqli_store_result($db_conx);
// Now make sure that user exists in the table
$numrows=mysqli_num_rows($user_query);
if ($numrows < 1) {

$res  ='<p> ';
$res  .= 'No Reminders Set For Future Reminder Emails!';
} else {
while ($row=mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
$rid=$row["id"];
$username=$row["username"];
$details=$row["reminder_details"];
$date=$row["date"];
$time=$row["time"];
}
$res ='<p>';
$res .= "$username";
$res .= '<p>';
$res .= "$date";
$res .= '<p>';
$res .= "$time";
$res .= '<p>';
$res .= "$details";
}
echo $res;

?>
<center><p><br><p>
<script>
$("button").click(function() {
    $(inputselector).datepicker('show');


});
</script>

<button id="button">Set</button>

<form action='Set_Future_Reminder.php' method='POST'>
Add/Edit Future Email Reminder<br /> 
<input type='text' name='persinfo' size='50' placeholder='Example: Remeber this event'></input>
<br />
<a href='index.php'><input type='button' value='Back'></a>
<input type='submit' name='submit' value='Update Reminder'></form>
</center>
</div>
