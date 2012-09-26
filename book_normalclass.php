<?php
include("cse.php");
if(!isset($_SESSION['id']))
{
$_SESSION['log']="You need to be first logged on to book a class";
header('Location:login.php');
}
?>
<html>
<head>
<?php
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
temp=new Date();
function compare(date,de)
{
if((date.getYear())>de.getYear()) return [1];
if((date.getYear())<de.getYear()) return [0];
if((date.getMonth())>de.getMonth()) return [1];
if((date.getMonth())<de.getMonth()) return [0];
if((date.getDate())>=de.getDate()) return [1];
if((date.getDate())<de.getDate()) return [0];
}
</script>
<script language="javascript">
$
(
function()
{
$("#start_date").click(function(){document.getElementById("end_date").value=''});
$("#start_date").datepicker({ beforeShowDay: function(date) {
return compare(date,new Date());
},
onSelect:function(date){temp=$.datepicker.parseDate("mm/dd/yy",date);}
});
$("#end_date").datepicker({ beforeShowDay: function(date) {
return compare(date,temp)}
});
var changeYear = $( ".enter_date" ).datepicker( "option", "Year" );
$( ".enter_date" ).datepicker( "option", "changeYear", true );
var changeMonth = $( ".enter_date" ).datepicker( "option", "Month" );
$( ".enter_date" ).datepicker( "option", "changeMonth", true ); 
$('#start_time').ptTimeSelect();
$('#end_time').ptTimeSelect();
}
)
</script>
</head>
<?php
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
<form name="book_seminar" action="save_normalclass.php">
<table>
<tr>
<td>
START DATE
</td>
<td>
<input type="text" name="start_date" id="start_date">
</td>
</tr>
<tr>
<td>
DAYS
</td>
<td>
</td>
</tr>
<tr>
<td>
END DATE
</td>
<td>
<input type="text" name="end_date" id="end_date" class="enter_date">
</td>
</tr>
<tr>
<td>
START TIME
</td>
<td>
<input type="text" id="start_time" name="start_time" class="enter_date">
</td>
</tr>
<tr>
<td>
END TIME
</td>
<td>
<input type="text" id="end_time" name="end_time">
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
CATEGORY
</td>
<td>
<select name="category">
<option value="-1">SELECT CATEGORY</option>
<option value="3">FACULTY</option>
<option value="2">STAFF</option>
<option value="1">STUDENT</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
NAME
</td>
<td>
<input type="text" name="bookers_name">
</td>
</tr>
<tr>
<td>
<font color="#FF0000">*</font>
EMAIL 
<font color="#FF0000">
@iitk
</font>
</td>
<td>
<input type="text" name="email_id">
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
<textarea name="description"  rows="5" cols="100" >
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
<input type="text" name="keyword" size="150" />
</center>
<br/>
<center>
<input type="submit" name="finalise" value="BOOK EVENT" id="ok">
</center>
</form>
</body>
</html>