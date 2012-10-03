<!--username passoword confirmpassword name email category -->
<?php
include("connect.php");
$flag=1;
$user=$_REQUEST['username'];
if($user=='') {$_SESSION['error']="user name is missing";$flag=0;}
else {$pass=$_REQUEST['password'];if($pass=='') {$_SESSION['error']="passoword is missing";$flag=0;}
else if($_REQUEST['confirmpassword']=='') {$_SESSION['error']="please confirm your passowrd";$flag=0;}
else {$name=$_REQUEST['name'];if($name=='') {$_SESSION['error']="name is missing";$flag=0;}
else {$email=$_REQUEST['email'];if($email=='') {$_SESSION['error']="email is missing";$flag=0;}
else {$category=$_REQUEST['category'];if($_REQUEST['category']=='-1') {$_SESSION['error']="please select your category";$flag=0;}
else if($_REQUEST['password']!=$_REQUEST['confirmpassword']) {$_SESSION['error']="passwords do not match"; $flag=0;}
}}}}
$c=1;
$q=mysql_query("select * from `member`") or die(mysql_error());
while($qs=mysql_fetch_array($q))
{
if($qs['user']==$user or $qs['pass']==$pass or $qs['email']==$email) {$c=0;break;}
}
if($c==0) {$flag=0;$_SESSION['error']="either username,email-id or password you have provided has matched with a third person in the database";}
if($flag==0) {header('Location:signup.php');break;}
else 
{
header('Location:save_signup.php');
}
?>