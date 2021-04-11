<?php

session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
	
    header('location:logincheck.html');
}

?>

<html>
<head>
<title>blood bank </title>
<link rel="stylesheet" type="text/css" href="css/grid.css">
</head>
<style>
 a
 {color:white;
 }
 </style>
<body bgcolor="grey">

<div class="container">
<div class="row">
<div class="col-12">
<h1 style="background-color:#DC381F;" align="center"><font color="white">Online Blood Bank</font></center></h1>
</div>
</div><br>
<br>

<?php
include('nav.php');
?>
</div>
</div>

<div class="row">
<div class="col-1" style="padding-right:20px;padding-top:20px;">

<?php
$con=mysqli_connect("localhost","root",12345,"blood1");
$q="select * from register";
$result = mysqli_query($con,$q);
$result_rows =mysqli_fetch_assoc($result);


?>
</div>
<table align="center" width="100%" style="color:white"border="4" width="3px" cellspacing="10px" cellpadding="10px;">
<tr>

<th>User Name</th>

<th>Father Name</th>
<th>Gender</th>
<th>Age</th>S
<th>Address</th>
<th>Email Id</th>
<th>Mobile No</th>
<th>Area</th>
<th>City</th>
<th>Blood group</th>
<th>Action</th>
</tr>
<?php
do{
	?>
	<tr>
	<td><?php echo $result_rows['user_name']; ?></td>
	
    <td><?php echo $result_rows['fathers_name']; ?></td>
    <td><?php echo $result_rows['gender']; ?></td>
    <td><?php echo $result_rows['age']; ?></td>
    <td><?php echo $result_rows['address']; ?></td>
    <td><?php echo $result_rows['email_id']; ?></td>
    <td><?php echo $result_rows['mob']; ?></td>
    <td><?php echo $result_rows['area']; ?></td>
    <td><?php echo $result_rows['city']; ?></td>
    <td><?php echo $result_rows['blood_group']; ?></td>
	<td><a href="delete.php?id=<?php echo $result_rows['email_id']?>">delete user</th>
	</tr>
<?php
}while($result_rows=mysqli_fetch_assoc($result))
	?>



</div>
</div>
</table>
</body>
</html>