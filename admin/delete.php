<?php
$email_id=$_GET['id'];
$con=mysqli_connect('localhost','root',12345,'blood1');


$q="delete from register where email_id='$email_id'";
$result=mysqli_query($con,$q);

if($result){

     echo "user is being deleted";
	 header('location:viewuser.php');
}
 else{
 echo "user is not deleted";
 }
 ?>