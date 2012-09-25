<?php
include("cse.php");
?>
<html>
<head>
</head>
<body>
<form name="signup" action="save_signup.php">
<table>
  <tr>
    <td>NAME</td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>IITK EMAIL</td>
    <td><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td>CATEGORY</td>
    <td>
	<select name="category">
	<option> </option>
	</select>
	</td>
  </tr>
</table>

</form>
</body>
</html>