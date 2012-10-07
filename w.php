<?php
include("connect.php");
/*$t = date("Y-m-d"); 
$r=mysql_query("select * from `memberlist` where convert(varchar(10),`schedule`, 101) >= '$t'");
$t=date("Y-m-d");
$test = new DateTime('2007-04-19');
$date = strtotime("+1 day", strtotime("2007-02-28"));
echo $test->format('Y-m-d')
*/
$t=date("Y-m-d")." 00:00:00";
$date = strtotime("+7 day", strtotime(date("Y-m-d")));
$date=date("Y-m-d", $date);
$date=$date." 23:59:59";
$r=mysql_query("SELECT * FROM `eventlist` WHERE `schedule` >= '$t' AND `schedule` <= '$date' ORDER BY `schedule`,`venue`");
$p=mysql_fetch_array($r);
$c = new DateTime($p['schedule']);
$z=new DateTime($p['schedule']);
$c=$c->format('D, j M, Y');
echo "<h3>".$c."</h3>";
?>
<table border="5px" width="400px">
<tr>
<th>
EVENT
</th>
<th>
VENUE
</th>
<th>
DURATION
</th>
</tr>
<?php
function pro($t)
{
if($t=="0") return "CS101";
if($t=="1") return "CS102";
if($t=="2") return "CS103";
if($t=="3") return "CS210";
if($t=="4") return "CS314";
}
echo "<tr><td>".$p['eventname']."</td><td>".pro($p['venue'])."</td>"."<td>".$z->format('H').":00</td>"."</tr>";
while($p=mysql_fetch_array($r))
{
$d=(new DateTime($p['schedule']));
$d=$d->format('D, j M, Y');
if($d!=$c)
{
echo "</table><h3>".$d."</h3>";
?>
<table border="5px" width="400px">
<tr>
<th>
EVENT
</th>
<th>
VENUE
</th>
<th>
DURATION
</th>
</tr>
<?php
$c=$d;
}
echo "<tr><td>".$p['eventname']."</td><td>".pro($p['venue'])."</td>"."</tr>";
}
?>
</table>