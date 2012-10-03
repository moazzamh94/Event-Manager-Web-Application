<?php
include("connect.php");
$name=$_SESSION['name'];
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$email=$_SESSION['email'];
$category=$_SESSION['category'];
//mysql_query("INSERT INTO `project`.`member` (`name`, `email`, `category`, `user`, `pass`, `id`) VALUES ($name, $email,'2', $user, $pass, NULL)");
mysql_query("INSERT INTO `project`.`member` (`name`, `email`, `category`, `user`, `pass`, `id`) VALUES ('$name', '$email', '$category', '$user', '$pass', NULL)");
unset($_SESSION['user']);
unset($_SESSION['name']);
unset($_SESSION['pass']);
unset($_SESSION['email']);
unset($_SESSION['category']);
$w=mysql_fetch_array(mysql_query("select * from `member` where `user`='$user'"));
$_SESSION['id']=$w['id'];
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
function g()
{
window.location="home.php";
}
setTimeout("g()",7000);
</script>
<!--<script language="javascript">
function gotohome()
{
//window.open("home.php");
}
setTimeout(gotohome,7000);
</script>!-->
</head>
<body background="congrat.gif">
<center>
<div id="message" onClick="g()">
<h2>
!!!CONGRATULATIONS YOU HAVE REGISTERED SUCCESSFULLY
</h2>
<h1>
<a href="home.php">GO TO HOME</a>
</h1>
</h2>
</div>
</center>
<br />
</body>
</html>