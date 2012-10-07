<html>
<head>
<?php
include("connect.php");
if(isset($_SESSION['logurl'])) unset($_SESSION['logurl']);
if(!(isset($_SESSION['id'])))
{
$_SESSION['log']="you need to be logged in to book an event";
$_SESSION['logurl']="book_event.php";
header("Location:emergencylogin.php");
}
if(isset($_SESSION['error']))
{
?>
<script language="javascript">
alert("<?php echo $_SESSION['error'] ?>");
</script>
<?php
unset($_SESSION['error']);
}
if(isset($_SESSION['news']))
{
?>
<script language="javascript">
alert("<?php echo $_SESSION['news']; ?>");
</script>
<?php
unset($_SESSION['news']);
}
include("cse.php");
include("gen.php");
?>
<style type="text/css">
#comment
{
margin-left:100px;
}
#ok
{
background-color:#00FFFF;
width:170px;
height:50px;
font-size:24px;
font-style:italic;
color:#FF0000;
}
</style>
<script language="javascript">
$
(
function()
{
$("#enter_date").datepicker({ beforeShowDay: function(date) {
var de=new Date();
if((date.getYear())>de.getYear()) return [1];
if((date.getYear())<de.getYear()) return [0];
if((date.getMonth())>de.getMonth()) return [1];
if((date.getMonth())<de.getMonth()) return [0];
if((date.getDate())>=de.getDate()) return [1];
if((date.getDate())<de.getDate()) return [0];
}
});
var changeYear = $( "#enter_date" ).datepicker( "option", "Year" );
$( "#enter_date" ).datepicker( "option", "changeYear", true );
var changeMonth = $( "#enter_date" ).datepicker( "option", "Month" );
$( "#enter_date" ).datepicker( "option", "changeMonth", true );
$( "#enter_date" ).datepicker( "option", "dateFormat", "yy-mm-dd");
}
)
</script>
</head>
<body bgcolor="#00FF00">
<form name="book_seminar" action="save_seminar.php">
<font color="#FF0000">*</font>
START TIME&nbsp;&nbsp;&nbsp</font>
<select name="am">
<option value="0"> A.M. </option>
<option value="1"> P.M. </option>
</select>
<select name="hour" id="start_time">
<option value="0">12-1</option>
<option value="1">1-2</option>
<option value="2">2-3</option>
<option value="3">3-4</option>
<option value="4">4-5</option>
<option value="5">5-6.</option>
<option value="6">6-7</option>
<option value="7">7-8</option>
<option value="8">8-9</option>
<option value="9">9-10</option>
<option value="10">10-11</option>
<option value="11">11-12</option>
</select>
<table>
<tr>
<td>
<font color="#FF0000">
*
</font>
EVENT TITLE
</td>
<td>
<input type="text" name="event_name">
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
DATE
</td>
<td>
<input id="enter_date" type="text" name="date">
</td>
</tr>
<tr>
<td>
<font color="#FF0000">
*
</font>
VENUE
</td>
<td>
<select name="room">
<option value="-1">SELECT VENUE</option>
<option value="0">CS101</option>
<option value="1">CS102</option>
<option value="2">CS103</option>
<option value="3">CS210</option>
<option value="4">CS314</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="BOOK EVENT">
</form>
ALL FIELDS MARKED WITH <font color="#FF0000">*</font> ARE COMPULSORY
</body>
</html>
