<?php
include("connect.php");
$result = mysql_query("SELECT * FROM `member`");
echo "<table>";
print_r($row);
while($row = mysql_fetch_array( $result ))
{
echo "<tr>"."<td>".$row['name']."</td>"."<td>".$row['email']."</td>"."</tr>";
}
echo "</table>";
?>