<!--username passoword confirmpassword name email category -->
<?php
include("connect.php");
session_start();
$flag=1;
$user=$_REQUEST['username'];
if($user=='') {$_SESSION['error']="user name is missing";$flag=0;}
else {$pass=$_REQUEST['password'];if($pass=='') {$_SESSION['error']="passoword is missing";$flag=0;}
else if($_REQUEST['confirmpassword']=='') {$_SESSION['error']="please confirm your passowrd";$flag=0;}
else {$name=$_REQUEST['name'];if($name=='') {$_SESSION['error']="name is missing";$flag=0;}
else {$email=$_REQUEST['email'];if($email=='') {$_SESSION['error']="email is missing";$flag=0;}
else {$category=$_REQUEST['category'];if($_REQUEST['category']=='-1') {$_SESSION['error']="please select your category";$flag=0;}
else if($_REQUEST['password']!=$_REQUEST['confirmpassword']) {$_SESSION['error']="passwords do not match"; $flag=0;}
if($flag==0) {header('Location:signup.php');}}}}}
?>
<html>
<head>
<style type="text/css">
#message
{
color:#00FF00;
background-color:#FFFF00;
}
</style>
<script language="javascript">
function gotohome()
{
window.open("home.php");
}
//setTimeout(gotohome,7000);
</script>
</head>
<body background="congrat.gif">
<center>
<div id="message">
<h2>
!!!CONGRATULATIONS YOU HAVE REGISTERED SUCCESSFULLY
<br />
YOUR ACCOUNT DETAILS HAVE BEEN MAILED AT YOU E-MAIL ID
<br />
NOW YOU CAN LOGIN TO YOUR ACCOUNT
<br />
</h2>
<h1>
<a href="home.php">GO TO HOME</a>
</h1>
</h2>
</div>
</center>
<br />
<?php
//a=mysql_query("insert into `PROJECT`.`member`(`name`,`email`,`category`,`user`,`pass`,`id`) values($name,$email,$category,$user,$pass,NULL)");
?>
</body>