<?php
session_start();
$flag=1;
if($_REQUEST['bookers_name']=='') { $_SESSION['error']="name is missing";$flag=0;}
else if($_REQUEST['email_id']=='') { $_SESSION['error']="email is missing";$flag=0;}
else if($_REQUEST['start_date']=='') { $_SESSION['error']="start date is missing";$flag=0;}
else if($_REQUEST['start_time']=='') { $_SESSION['error']="start time is missing";$flag=0;}
else if($_REQUEST['end_date']=='')  { $_SESSION['error']="end date is missing";$flag=0;}
else if($_REQUEST['end_time']=='') { $_SESSION['error']="end time is missing";$flag=0;}
else if($_REQUEST['category']=='-1') { $_SESSION['error']="category is missing";$flag=0;}
else if($_REQUEST['description']=='') { $_SESSION['error']="description is missing";$flag=0;}
else if($_REQUEST['keyword']=='')  { $_SESSION['error']="keywords are missing";$flag=0;}
if($flag==0)
{
header('Location:book_normalclass.php');
}
?>