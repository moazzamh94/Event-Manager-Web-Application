<?php
if(!isset($_SESSION['id']))
{
header('Location:login.php');
}
session_start();
$flag=1;
if($_REQUEST['subscription_keyword']==''){$_SESSION['error']="subscription keyword is missing";$flag=0;}
else if($_REQUEST['subscribers_name']=='') {$_SESSION['error']="subscribers name is missing";$flag=0;}
else if($_REQUEST['subscribers_email']=='') {$_SESSION['error']="subscribers email id is missing"; $flag=0;}
if($flag==0)
{
if($_REQUEST['subscription_keyword']!='') $_SESSION['subscription_keyword']=$_REQUEST['subscription_keyword'];
if($_REQUEST['subscribers_name']!='') $_SESSION['subscribers_name']=$_REQUEST['subscribers_name'];
if($_REQUEST['subscribers_email']!='') $_SESSION['subscribers_email']=$_REQUEST['subscribers_email'];
if($_REQUEST['subscription_keyword']!='') $_SESSION['subscription_keyword']=$_REQUEST['subscription_keyword'];
header('Location:subscribe.php');
}
?>