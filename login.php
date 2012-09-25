<?php
include("cse.php");
?>
<?php
session_start();
?>
<html>
<head>
</head>
<body>
<form name="login_form" action="welcom.php">
<table>
<tr>
<td>
USER NAME
</td>
<td>
<input type="text" name="name" />
</td>
<tr>
<td>
PASSWORD
</td>
<td>
<input type="password" name="pass" />
</td>
</tr>
</table>
<input type="submit" value="LOGIN" />
</form>
</body>
</html>
