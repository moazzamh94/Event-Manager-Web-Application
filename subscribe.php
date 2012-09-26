<?php
include("cse.php");
if(!(isset($_SESSION['id'])))
{
header('Location:home.php');
}
?>
<html>
<head>
<style type="text/css">
.fields
{
color:#0000FF;
background-color:#99FF99;
}
#error
{
color:#FF0000;
}
.data
{
color:#00FF00;
background-color:#FF0000;
}
</style>
</head>
<body>
<div id="error">
<?php
if(isset($_SESSION['error'])) {echo "!!!!!".$_SESSION['error']; unset($_SESSION['error']);}
?>
<br>
</div>
<form name="subscription" action="save_subscribe.php">
<table>
<tr>
<td>
<font color="#FF0000">*</font>
<font class="fields">
SUBSCRIPTION KEYWORD
</div>
</td>
<td>
<input type="text" name="subscription_keyword" class="data"  />
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
<font class="fields">
NAME
</div>
</td>
<td>
<input type="text" name="subscribers_name" class="data"  />
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
<font class="fields">
YOUR EMAIL
</div>
</td>
<td>
<input type="text" name="subscribers_email" class="data"   />
</td>
</tr>
</table>
<input type="submit" value="SUBSCRIBE" />
</form>
</body>
</html>