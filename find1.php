<?php
$i = 1;
session_start();
if(!isset($_SESSION['email_id']) OR $_SESSION['userlevel']!="USER"){
	$i=0;
    header('location:login.html');
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
if($i!=1){
?>
<div class="row">
<div class="col-12">
<h3 style="padding-left:75%;padding-top:3%;margin-left:10%;margin-top:-5%;">
<a href="Login.html"><font color="white">Login</font></a></h3>


<h3 style="padding-left:80%;padding-top:2%;margin-left:10%;margin-top:-5%;">
<a href="Register.html"><font color="white">Registration</font></a></h3>
</div>
</div>
<?php
}else{
	
	?>
	<div class="row">
<div class="col-12">
<h3 style="padding-left:75%;padding-top:3%;margin-left:10%;margin-top:-2%;">
<a href="profile.php"><font color="white">My Profile</font></a></h3>


<?php
	
	
	
}
?>
<?php
include('nav.php');
?>
<?php
$con=mysqli_connect('localhost','root',12345,'blood1');
$area=$_POST['area'];
$blood_group=$_POST['blood_group'];
$q="select * from register where area='$area' and blood_group='$blood_group'";
$result=mysqli_query($con,$q);
$resultrows=mysqli_fetch_array($result);
?>




<div class="row">
<div class="col-12">
<table border="2px" width="100%" cellpadding="5px" align="center" style="color:white;margin:20px;">
<tr>
<th>Username</th>
<th>Gender</th>
<th>Age</th>
<th>Phone No.</th>
<th>Area</th>
<th>Blood Group</th>
</tr>
<?php
do{
	?>
<tr align="center">
<td><?php echo$resultrows[0] ?> </td>
<td><?php echo$resultrows[3] ?> </td>
<td><?php echo$resultrows[4] ?> </td>
<td><?php echo$resultrows[7] ?> </td>
<td><?php echo$resultrows[8] ?> </td>
<td><?php echo$resultrows[10] ?> </td>
</tr>
<?php
}while(mysqli_fetch_array($result));
?>
</table>
</div>
</div>


<?php
include('footer.php');
?>





</div>
</body>
</html>










