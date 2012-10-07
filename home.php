<?php
include("connect.php");
if(isset($_SESSION['logurl'])) unset($_SESSION['logurl']);
if(isset($_SESSION['news']))
{
?>
<script language="javascript">
alert("<?php echo $_SESSION['news'];?>");
</script>
<?php
unset($_SESSION['news']);
}
include("cse.php");
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<a href="http://www.cse.iitk.ac.in">
<img src="cse.gif"  align="right"/>
</a>
</image>
</body>

</html>
