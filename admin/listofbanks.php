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
$q="select * from addblood";
$result = mysqli_query($con,$q);
$result_rows =mysqli_fetch_assoc($result);


?>
</div>
<table align="center" width="100%" style="color:white"border="4" width="3px" cellspacing="10px" cellpadding="10px;">
<tr>

<th>Name</th>
<th>Phone_No</th>
<th>Address</th>
<th>ACTION</th>
</tr>
<?php
do{
	?>
	<tr>
	<td><?php echo $result_rows['name']; ?></td>
	<td><?php echo $result_rows['phone_no']; ?></td>
    <td><?php echo $result_rows['address']; ?></td>
	<td><a href="editbloodbank.php?id=<?php echo $result_rows['id']; ?>">Edit</a></td>
	</tr>
<?php
}while($result_rows=mysqli_fetch_assoc($result))
	?>

</div>
</body>
</html>


