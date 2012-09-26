<!--username passoword confirmpassword name email category -->
<?php
session_start();
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
if($flag==0) {header('Location:signup.php');break;}
else 
{
$_SESSION['name']=$name;
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
$_SESSION['email']=$email;
$_SESSION['category']=$category;
header('Location:save_signup.php');
}
?>