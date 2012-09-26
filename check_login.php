<?php
include("connect.php");
if($_REQUEST['user']=='') {$flag=0;$_SESSION['error']='NAME MISSING';}
else if ($_REQUEST['pass']=='') {$flag=0;$_SESSION['error']='PASSWORD MISSING';}
if($flag==0) header('Location:login.php');
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$q=mysql_query("select * from `member`");
$flag=0;
while($a=mysql_fetch_array($q))
{
echo $a['user']."        ".$user."           ".$a['pass']."            ".$a['pass']."<br>";
if(($a['user']==$user) and ($a['pass']==$pass)) {$flag=1;break;}
}
//if($flag==0) header('Location:login.php');
?>