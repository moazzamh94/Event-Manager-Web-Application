<?php
include("connect.php");
$flag=1;
if($_REQUEST['user']=='') {$flag=0;$_SESSION['error']='NAME MISSING';}
else if ($_REQUEST['pass']=='') {$flag=0;$_SESSION['error']='PASSWORD MISSING';}
if($flag==0) header('Location:login.php');
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$q=mysql_query("select * from `member`");
$flag=0;
while($a=mysql_fetch_array($q))
{
if(($a['user']==$user) and ($a['pass']==$pass)) {
$flag=1;
$_SESSION['id']=$a['id'];
break;}
}
if($flag==0) header('Location:login.php');
$to='home.php';
if(isset($_SESSION['logurl']))
{
$to=$_SESSION['logurl'];
}
else  header('Location:'.$to);
?>