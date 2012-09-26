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
setTimeout(gotohome,7000);
</script>
</head>
<body background="congrat.gif">
<?php
$name=$_SESSION['name'];
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$email=$_SESSION['email'];
$category=$_SESSION['category'];
?>
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