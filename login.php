<?php
session_start();
$con=mysqli_connect('localhost','root',12345,'blood1');

$email_id=$_POST['email_id'];
$password=$_POST['password'];

$q="select * from register where email_id='$email_id' and password='$password'";

$result=mysqli_query($con,$q);
$numrows=mysqli_num_rows($result);

if($numrows==1){
	
	header('location:profile.php');
	$_SESSION['email_id']=$email_id;
	$_SESSION['userlevel']='USER';
}
else{
	header('location:login.html');
}
?>
