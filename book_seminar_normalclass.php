<html>
<head>
<?php
include('cse.php');
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
$('#start_time').ptTimeSelect();
$('#end_time').ptTimeSelect();
}
)
</script>
</head>
<body bgcolor="#00FF00">
<form name="book_seminar" action="#">
<table>
<tr>
<td>
DATE
</td>
<td>
<input id="enter_date" type="text">
</td>
</tr>
<tr>
<td>
START TIME
</td>
<td>
<input type="text" id="start_time">
</td>
</tr>
<tr>
<td>
END TIME
</td>
<td>
<input type="text" id="end_time">
</td>
</tr>
</table>
<br>
<h1>
<font color="#FF0000">
*
</font>
DESCRIPTION
</h1>
<center>
<textarea name="description"  rows="5" cols="100">
</textarea>
</center>
<div id="comment">
ENTER COMMENTS
</div>
<center>
<textarea name="comment"  rows="5" cols="100">
</textarea>
</center>
<font color="#FF0000">
*
</font>
ENTER KEYWORDS SEPARATED BY BLANK SPACES
<center>
<input type="text" name="keywords" size="150" />
</center>
<br/>
<center>
<input type="submit" name="finalise" value="BOOK EVENT" id="ok">
</center>
</form>
</body>
</html>
