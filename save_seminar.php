<?php
include("connect.php");
$flag=1;
$title=$_REQUEST['event_name'];
$date=$_REQUEST['date'];
$venue=$_REQUEST['room'];
$am=$_REQUEST['am'];
$hour=$_REQUEST['hour'];
$id=$_SESSION['id'];
if($title=='') {$_SESSION['error']="event title is missing"; $flag=0;}
else if($date=='') {$_SESSION['error']="event date is missing"; $flag=0;}
else if($venue=='-1') {$_SESSION['error']="event venue is missing"; $flag=0;}
if($flag==0)
{
header('Location:book_event.php');
exit;
}
if($am==0) $t=$hour;
if($am==1) $t=$hour+12;
if($t<=9) $m=0;
else $m=1;
$time=$date." ".$m."".($t%10).":00:00";

$q=mysql_query("select * from `eventlist` where `schedule`='$time'");
$inquire=0;
while($t=mysql_fetch_array($q))
{
if($t['venue']==$venue)
{
echo $t['venue'];
$inquire=1;
$s="No rooms available in ";
break;
}
}
$q=mysql_query("select * from `eventlist` where `schedule`='$time'");
if($inquire==1)
{
while($t=mysql_fetch_array($q))
{
$eq=$t['venue'];
if($eq=="0") $pw="  CS101  ";
if($eq=="1") $pw="  CS102  ";
if($eq=="2") $pw="  CS103  ";
if($eq=="3") $pw="  CS210  ";
if($eq=="4") $pw="  CS314  ";
$s=$s.$pw;
}
$_SESSION['news']=$s;
header('Location:book_event.php');
}
else
{
if($flag==0){header('Location:book_event.php');}
$q=mysql_fetch_array(mysql_query("select * from `member` where `id`='$id'"));
$booker=$q['name'];
mysql_query("INSERT INTO `eventlist` (`eventname`, `schedule`, `venue`, `booker`, `bookerid`,`id`) VALUES ('$title', '$time', '$venue', '$booker','$id', NULL)");
//$az=mysql_query("SELECT `eventname` , `schedule` , `venue` , `booker` , `bookerid` , `id`
//FROM `eventlist`
//ORDER BY `schedule` ASC") or die(mysql_error());
$_SESSION['news']="event booked successfully";
header('Location:home.php');
}
?>