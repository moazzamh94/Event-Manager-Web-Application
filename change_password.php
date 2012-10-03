<?php
include("connect.php");
include("cse.php");
if(!(isset($_SESSION['id']))) 
{
$_SESSION['log']="YOU MUST BE LOGGED IN TO CHANGE YOUR PASSWORD";
$_SESSION['logurl']="change_password.php";
header('Location:login.php');
}
?>
<html>
<body>
<h1>
CHANGE PASSWORD
</h1>
<form name="c" action="check_changepassword.php">
</form>
</body>
</html>