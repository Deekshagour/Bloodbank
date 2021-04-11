<?php
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$fathers_name=$_POST['fathers_name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$mob=$_POST['mob'];
$area=$_POST['area'];
$city=$_POST['city'];
$blood_group=$_POST['blood_group'];

$con=mysqli_connect('localhost','root',12345,'blood1');

$q="insert into register(user_name,password,fathers_name,gender,age,address,email_id,mob,area,city,blood_group)
values('$user_name',$password,'$fathers_name','$gender',$age,'$address','$email_id',$mob,'$area','$city','$blood_group')";

$result=mysqli_query($con,$q);

if($result){
	header('location:login.html');
}
else{
	header('location:register.html');
}
?>






