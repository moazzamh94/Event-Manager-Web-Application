<?php
include("connect.php");
$opass=$_REQUEST['opass'];
$npass=$_REQUEST['npass'];
$cpass=$_REQUEST['cpass'];
$flag=1;
if($opass=='' or $npass=='' or $cpass=='')
{
$_SESSION['error']="NO FIELDS CAN BE LEFT BLANK";
$flag=0;
}
if($npass!=$cpass)
{
$_SESSION['error']="please retype your password correctly";
$flag=0;
}
if(strlen($npass)<4)
{
$_SESSION['error']="password new should be minimum 4 characters long";
$flag=0;
}
$id=$_SESSION['id'];
$o=mysql_query("select * from `member` where `id`='$id'") or die(mysql_error());
$r=mysql_fetch_array($o);
if(crypt($opass,$r['pass'])!=$r['pass']) 
{
$flag=0;
$_SESSION['error']="OLD PASSWORD ENTERED IS INCORRECT";
}
if($flag==0)
{
header('Location:change_password.php');
}
else
{
$_SESSION['news']="password changed successfully";
$npass=crypt($npass);
mysql_query("update `member` set `pass`='$npass' where `id`='$id'");
header('Location:home.php');
}
?>