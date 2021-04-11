<?php
$name=$_POST['name'];
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];
$con=mysqli_connect('localhost','root',12345,'blood1');

$q="insert into addblood(name,phone_no,address)values('$name','$phone_no','$address')";

$result=mysqli_query($con,$q);
if($result){
	header('location:home.php');
}
?>