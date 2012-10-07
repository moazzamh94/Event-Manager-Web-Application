<?php
function nex($e)
{
if($e=="00") return "00:00 - 01:00";
if($e=="01") return "01:00 - 02:00";
if($e=="02") return "02:00 - 03:00";
if($e=="03") return "03:00 - 04:00";
if($e=="04") return "04:00 - 05:00";
if($e=="05") return "05:00 - 06:00";
if($e=="06") return "06:00 - 07:00";
if($e=="07") return "07:00 - 08:00";
if($e=="08") return "08:00 - 09:00";
if($e=="09") return "09:00 - 10:00";
if($e=="10") return "10:00 - 11:00";
if($e=="11") return "11:00 - 12:00";
if($e=="12") return "12:00 - 13:00";
if($e=="13") return "13:00 - 14:00";
if($e=="14") return "14:00 - 15:00";
if($e=="15") return "15:00 - 16:00";
if($e=="16") return "16:00 - 17:00";
if($e=="17") return "17:00 - 18:00";
if($e=="18") return "18:00 - 19:00";
if($e=="19") return "19:00 - 20:00";
if($e=="20") return "20:00 - 21:00";
if($e=="21") return "21:00 - 22:00";
if($e=="22") return "22:00 - 23:00";
if($e=="23") return "23:00 - 00:00";
}
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
<tr bgcolor="#00FF00">
<th>
EVENT
</th>
<th>
VENUE
</th>
<th>
DURATION
</th>
<th>
CONDUCTED BY
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
echo "<tr><td>".$p['eventname']."</td><td>".pro($p['venue'])."</td>"."<td>".nex($z->format('H'))."</td><td>".$p['booker']."</td></tr>";
while($p=mysql_fetch_array($r))
{
$d=(new DateTime($p['schedule']));
$d=$d->format('D, j M, Y');
if($d!=$c)
{
echo "</table><h3>".$d."</h3>";
?>
<table border="5px" width="400px">
<tr bgcolor="#00FF00">
<th>
EVENT
</th>
<th>
VENUE
</th>
<th>
DURATION
</th>
<th>
CONDUCTED BY
</th>
</tr>
<?php
$c=$d;
}
echo "<tr><td>".$p['eventname']."</td><td>".pro($p['venue'])."</td><td>".nex($z->format('H'))."</td><td>".$p['booker']."</td></tr>";
}
?>
</table>