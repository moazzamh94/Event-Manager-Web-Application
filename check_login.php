<?php
include("connect.php");
$flag=1;
if($_REQUEST['user']=='') {$flag=0;$_SESSION['error']='NAME MISSING';}
else if ($_REQUEST['pass']=='') {$flag=0;$_SESSION['error']='PASSWORD MISSING';}
if($flag==0) {header('Location:login.php');exit;}
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$q=mysql_query("select * from `member`");
$flag=0;
while($a=mysql_fetch_array($q))
{
if(($a['user']==$user) and (crypt($pass,$a['pass'])==$a['pass'])) {
$flag=1;
$_SESSION['id']=$a['id'];
break;
}
}
if($flag==0) {header('Location:login.php');$_SESSION['error']="isername or password is incorrect";exit;}
$to='Location:home.php';
header($to.'');
?>