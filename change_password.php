<?php
include("connect.php");
include("cse.php");
if(isset($_SESSION['logurl'])) unset($_SESSION['logurl']);
if(!(isset($_SESSION['id']))) 
{
$_SESSION['log']="YOU MUST BE LOGGED IN TO CHANGE YOUR PASSWORD";
$_SESSION['logurl']="change_password.php";
header('Location:login.php');
}
?>
<html>
<body>
<form name="c" action="check_changepassword.php">
<h1>
CHANGE PASSWORD
</h1>
<table>
<tr>
<td>
OLD PASSWORD
</td>
<td>
<input type="password" name="opass" />
</td>
</tr>
<tr>
<td>
NEW PASSWORD
</td>
<td>
<input type="password" name="npass" />
</td>
</tr>
<tr>
<td>
CONFIRM PASSWORD
</td>
<td>
<input type="password" name="cpass"  />
</td>
</tr>
</table>
</form>
</body>
</html>