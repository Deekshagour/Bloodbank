<?php
$name=$_POST['name'];
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root',12345,'blood1');

$q="update addblood set name='$name' ,phone_no='$phone_no' ,address='$address' where id='$id'";

$result=mysqli_query($con,$q);
if($result){
	header('location:listofbanks.php');
}
?>