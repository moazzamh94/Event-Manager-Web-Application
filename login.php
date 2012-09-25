<?php
include("cse.php");
?>
<html>
<head>
<style type="text/css">
.data
{
color:#FF0000;
background-color:#00FF00;
}
.submit
{
width:200px;
}
</style>
</head>
<body>
<form name="login_form" action="welcom.php">
<table>
<tr>
<td>
USER NAME
</td>
<td>
<input type="text" name="name" class="data" />
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
</body>
</html>
