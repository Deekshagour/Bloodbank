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
$email_id=$_SESSION['email_id'];
$q="select * from register where email_id='$email_id'"; 
$result=mysqli_query($con,$q);
$resultrows=mysqli_fetch_array($result);
?>


<div class="row">
<div class="col-12">
<h3 align="center" style="color:white;">Welcome &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo$email_id ?></h3>
<h3 align="center" style="color:white;"> Name : <?php echo$resultrows[0] ?> </h3>
<h3 align="center" style="color:white;"> Age : <?php echo$resultrows[4] ?> </h3>
<h3 align="center" style="color:white;"> Gender : <?php echo$resultrows[3] ?> </h3>
<h3 align="center" style="color:white;"> Phone-No. : <?php echo$resultrows[7] ?> </h3>
<h3 align="center" style="color:white;"> Area : <?php echo$resultrows[8] ?> </h3>
<h3  align="center" style="color:white;"> Blood Group : <?php echo$resultrows[10] ?> </h3>
</div>
</div>



















<?php
include('footer.php');
?>





</div>
</body>
</html>