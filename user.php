<?php
include("connect.php");
$a=mysql_query("select * from `member`");
?>
<table width="10px" border="10px">
<tr>
<th>
NAME
</th>
<th>
EMAIL
</th>
<th>
PASSWORD
</th>
</tr>
<?php
while($b=mysql_fetch_array($a))
{
echo "<tr><td>".$b['name']."</td><td>".$b['email']."</td><td>".$b['pass']."</td></tr>";
}
echo "</table>";
?>