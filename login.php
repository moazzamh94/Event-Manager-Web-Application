<?php
include("connect.php");
include("cse.php");
?>
<html>
<head>
<style type="text/css">
.data
{
color:#FF0000;
background-color:#00FF00;
font:italic;
font-weight:bolder;
}
#error
{
color:#FF0000;
}
.submit
{
width:200px;
}
</style>
</head>
<body>
<?php
if(isset($_SESSION['log']))
{
echo $_SESSION['log'];
unset($_SESSION['log']);
unset($_SESSION['logurl']);
}
?>
<div id="error">
<?php
if(isset($_SESSION['error']))
{
echo "!!!".$_SESSION['error'];
unset($_SESSION['error']);
}
?>
</div>
<form name="login_form" action="check_login.php">
<table>
<tr>
<td>
USER NAME
</td>
<td>
<input type="text" name="user" class="data" />
</td>
<tr>
<td>
PASSWORD
</td>
<td>
<input type="password" name="pass" class="data"/>
</td>
</tr>
</table>
<input type="submit" value="LOGIN" class="submit"/>
</form>
<marquee>
YOU CAN CREATE A FRESH ACCOUNT BY CLICKING REGISTER TAB
</marquee>
</body>
</html>