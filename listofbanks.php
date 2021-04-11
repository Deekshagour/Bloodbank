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

<div class="row">
<div class="col-12">
<h3 style="padding-left:75%;padding-top:3%;margin-left:10%;margin-top:-1%;">
<a href="Login.html"><font color="white">Login</font></a></h3>


<h3 style="padding-left:80%;padding-top:2%;margin-left:10%;margin-top:-5%;">
<a href="Register.html"><font color="white">Registration</font></a></h3>
</div>
</div>

<?php
include('nav.php');
?>

<div class="row">
<div class="col-1" style="padding-right:20px;padding-top:20px;">

<?php
$con=mysqli_connect("localhost","root",12345,"blood1");
$q="select * from addblood";
$result = mysqli_query($con,$q);
$result_rows =mysqli_fetch_array($result);


?>
</div>
<table align="center" style="color:white;margin-left:-10%;" border="4" width="80%" cellspacing="10px" cellpadding="10px;">
<tr>

<th>Name</th>
<th>Phone_No</th>
<th>Address</th>

</tr>
<?php
do{
	?>
	<tr>
	<td><?php echo $result_rows[1]; ?></td>
	<td><?php echo $result_rows[2]; ?></td>
    <td><?php echo $result_rows[3]; ?></td>
	
	</tr>
<?php
}while($result_rows=mysqli_fetch_array($result))
	?>

</table>


<?php
include('footer.php');
?>






</div>
</body>
</html>


