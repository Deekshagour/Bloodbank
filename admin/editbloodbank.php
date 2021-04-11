<?php

session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
	
    header('location:logincheck.html');
}

?>
<?php
$id=0;
if(isset($_GET['id'])){
	$id =$_GET['id'];
}
$query = "select * from addblood where id='$id'";
$con=mysqli_connect('localhost','root',12345,'blood1');
$result = mysqli_query($con,$query);
$resultrows= mysqli_fetch_array($result);
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
<div class="col-12">
<center>
<div style="border:1px solid white;width:30%; padding:30px;">
<h2 align="center" style="color:white;">ADD BLOOD BANK HERE</h2>

<table align="center" style="color:white;">
<form action="updatebank.php" method="POST">
<input type="hidden"  value="<?php echo $resultrows[0];?>" name="id">
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $resultrows[1];?>"></td></tr>
<tr><td>Phone no.:</td><td><input type="text" name="phone_no"  value="<?php echo $resultrows[2];?>"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address"  value="<?php echo $resultrows[3];?>"></td></tr>
<tr><td></td><td><input type="submit" value="Update Bank"></td></tr>


</form>

</table>
</div>
</center>
</div>










</div>
</div>
</body>
</html>
