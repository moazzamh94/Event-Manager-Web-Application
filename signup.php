<?php
include("connect.php");
include("cse.php");
?>
<html>
<head>
<style type="text/css">
#error
{
color:#FF0000;
};
</style>
</head>
<body>
<div id="error">
<?php
if(isset($_SESSION['error']))
{
echo "!!!".$_SESSION['error'];
unset($_SESSION['error']);
}
?>
</div>
<form name="signup" action="check_signup.php">
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
	<option value=1>ADMINSTRATOR</option>
	<option value=2>FACULTY</option>
	<option value=3>STAFF</option>
	<option value=4>STUDENTS</option>
	</select>
	</td>
  </tr>
  <tr>
  <td>
  </td>
  <td>
  </td>
  </tr>
  <tr>
  <td>
  USER NAME
  </td>
  <td>
  <input type="text" name="username" />
  </td>
  </tr>
  <tr>
  <td>
  PASSWORD
  </td>
  <td>
  <input type="password" name="password" />
  </td>
  </tr>
  <tr>
  <td>
  CONFIRM PASSOWORD
  </td>
  <td>
  <input type="password" name="confirmpassword" />
  </td>
  </tr>
</table>
<input type="submit"  value="REGISTER"/>
</form>
</body>
</html>