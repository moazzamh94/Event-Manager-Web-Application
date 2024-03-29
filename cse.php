<?php
if(isset($_SESSION['id'])) $log=1;
else $log=0;
?>
<html>
<head>
<style type="text/css">
body
{
background-image:url('bgimage.jpg');
}
#welcome
{
text-align:center;
color:#0000FF;
font-size:18px;
}
#heading
{
background-color:#FF0000;
color:#0000FF;
border:thick;
border-color:#00FFFF;
font:italic;
}
#menu, #menu ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
#menu {
	width: 960px;
	margin: 60px auto;
	border: 1px solid #222;
	background-color: #111;
	background-image: linear-gradient(#444, #111);
	border-radius: 6px;
	box-shadow: 0 1px 1px #777;
}
#menu:before,
#menu:after {
	content: "";
	display: table;
}

#menu:after {
	clear: both;
}

#menu {
	zoom:1;
}
#menu li {
	float: left;
	border-right: 1px solid #222;
	box-shadow: 1px 0 0 #444;
	position: relative;
}

#menu a {
	float: left;
	padding: 12px 30px;
	color:#00FFFF;
	text-transform: uppercase;
	font: bold 12px Arial, Helvetica;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
}

#menu li:hover > a {
	color: #fafafa;
}

*html #menu li a:hover { /* IE6 only */
	color: #fafafa;
}
#menu ul {
	margin: 20px 0 0 0;
	_margin: 0; /*IE6 only*/
	opacity: 0;
	visibility: hidden;
	position: absolute;
	top: 38px;
	left: 0;
	z-index: 1;    
	background: #444;	
	background: linear-gradient(#444, #111);
	box-shadow: 0 -1px 0 rgba(255,255,255,.3);	
	border-radius: 3px;
	transition: all .2s ease-in-out;  
}

#menu li:hover > ul {
	opacity: 1;
	visibility: visible;
	margin: 0;
}

#menu ul ul {
	top: 0;
	left: 150px;
	margin: 0 0 0 20px;
	_margin: 0; /*IE6 only*/
	box-shadow: -1px 0 0 rgba(255,255,255,.3);		
}

#menu ul li {
	float: none;
	display: block;
	border: 0;
	_line-height: 0; /*IE6 only*/
	box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}

#menu ul li:last-child{
	box-shadow: none;    
}

#menu ul a {    
	padding: 10px;
	width: 130px;
	_height: 10px; /*IE6 only*/
	display: block;
	white-space: nowrap;
	float: none;
	text-transform: none;
	color:#00FFFF;
	font:italic;
}

#menu ul a:hover {
	background-color: #0186ba;
	background-image: linear-gradient(#04acec, #0186ba);
}
#menu ul li:first-child > a {
	border-radius: 3px 3px 0 0;
}

#menu ul li:first-child > a:after {
	content: '';
	position: absolute;
	left: 40px;
	top: -6px;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #444;
}

#menu ul ul li:first-child a:after {
	left: -6px;
	top: 50%;
	margin-top: -6px;
	border-left: 0;	
	border-bottom: 6px solid transparent;
	border-top: 6px solid transparent;
	border-right: 6px solid #3b3b3b;
}

#menu ul li:first-child a:hover:after {
	border-bottom-color: #04acec; 
}

#menu ul ul li:first-child a:hover:after {
	border-right-color: #0299d3; 
	border-bottom-color: transparent; 	
}

#menu ul li:last-child > a {
	border-radius: 0 0 3px 3px;
}
</style>
</head>
<body>
<h2>
<marquee id="heading">
EVENT   MANAGER , Computer Science & Engineering , IIT KANPUR
</marquee>
</h2>
<div id="welcome">
<?php
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$q=mysql_query("select * from `member` where `id`='$id'")or die (mysql_error());
$temp=mysql_fetch_array($q);
echo "WElCOME ".$temp['name']."<br>";
}
?>
</div>
<ul id="menu">
    <li> <a href="home.php">Home </a> </li>
	<li><a href="http://www.cse.iitk.ac.in/">CSE</a></li>
	<li><a href=<?php if ($log==0) echo "login.php"; else echo "logout.php";?>> <?php if($log==0) echo "LOGIN"; else echo "LOGOUT"; ?></a></li>
	<li>
		<a href="#">EVENT</a>
		<ul>
			<li><a href="book_event.php">BOOK EVENT</a></li>
			<li><a href="home.php">NEXT EVENTS</a></li>
		</ul>
	</li>
	<?php
	if($log==0) echo "<li> <a href=\"signup.php\">REGISTER</a></li>";
	?>
	<li>
	<a href="#">RESOURCES</a>
	<ul>
	<li><a href="room.php ? room=0">CS101</a></li>
	<li><a href="room.php ? room=1">CS102</a></li>
	<li><a href="room.php ? room=2">CS103</a></li>
	<li><a href="room.php ? room=3">CS210</a></li>
	<li><a href="room.php ? room=4">CS314</a></li>
	</ul>
	</li>
	<li><a href="change_password.php">CHANGE PASSWORD</a></li>
	<li> <a href="help.php">HELP</a></li>
</ul>
</body>
</html>
