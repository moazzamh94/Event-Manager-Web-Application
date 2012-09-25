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
	<option value="-1">SELECT CATEGORY</option>
	<option value="1">ADMINSTRATOR</option>
	<option value="2">FACULTY</option>
	<option value="3">STAFF</option>
	<option value="4">STUDENTS</option>
	</select>
	</td>
  </tr>
</table>

</form>
</body>
</html>