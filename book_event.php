<html>
<head>
<?php
include("connect.php");
if(isset($_SESSION['logurl'])) unset($_SESSION['logurl']);
if(!(isset($_SESSION['id'])))
{
$_SESSION['log']="you need to be logged in to book an event";
$_SESSION['logurl']="book_event.php";
header("Location:login.php");
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
}
)
</script>
</head>
<body bgcolor="#00FF00">
<form name="book_seminar" action="#">
<table>
<font>
<font color="#FF0000">*</font>
START TIME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select name="am">
<option value="0"> A.M. </option>
<option value="1"> P.M. </option>
</select>
<select name="text" id="start_time">
<option value="0">12-1</option>
<option value="1">1-2</option>
<option value="1">2-3</option>
<option value="1">3-4</option>
<option value="1">4-5</option>
<option value="1">5-6.</option>
<option value="1">6-7</option>
<option value="1">7-8</option>
<option value="1">8-9</option>
<option value="1">9-10</option>
<option value="1">10-11</option>
<option value="1">11-12</option>
</select>
<table>
<tr>
<td>
<font color="#FF0000">*</font>
DATE
</td>
<td>
<input id="enter_date" type="text">
</td>
</tr>

<tr>
<td>
<font color="#FF0000">
*
</font>
ENTER KEYWORD
</td>
<td>
<input type="text" name="keywords"/>
</td>
</tr>
</table>
<center>
<h1>
DESCRIPTION
</h1>
<textarea name="description"  rows="5" cols="100">
</textarea>
<font color="#FF0000">
*
</font>
<br/>
<input type="submit" name="finalise" value="BOOK EVENT" id="ok">
</center>
</form>
</body>
</html>
