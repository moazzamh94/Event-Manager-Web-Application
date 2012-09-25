<?php
include("cse.php");
?>
<!--username passoword confirmpassword name email category -->
<?php
$flag=1;
if($_REQUEST['username']=='') {$_SESSION['error']="user name is missing";$flag=0;}
else if($_REQUEST['passoword']=='') {$_SESSION['error']="passoword is missing";$flag=0;}
else if($_REQUEST['confirmpassword']=='') {$_SESSION['error']="please confirm your passowrd";$flag=0;}
else if($_REQUEST['name']=='') {$_SESSION['error']="name is missing";$flag=0;}
else if($_REQUEST['email']=='') {$_SESSION['error']="email is missing";$flag=0;}
else if($_REQUEST['categor']=='-1') {$_SESSION['error']="please select your category";$flag=0;}
if($flag==0) {header('Location:signup.php');}
?>