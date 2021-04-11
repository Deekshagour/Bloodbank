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





<div class="row">
<div class="col-12">
<form action="find1.php" method="post"><br>
<h2 align="center"style="margin-bottom:-2%;"><font color="white"><u>Find Donor</u></h2></font>



<form action="" method="post">
<table align="center" style="margin-top:-3%;margin-bottom:-2%;border:1px ridge;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:15px;"><br><br>

<tr><td><h4 style="color:white;margin-top:30px;">Area:<select name="area" style="margin-left:2%;">
<option>Select Area</option>
<option>Ratnagiri by pass</option>
<option>Board Office</option>
<option>Mp Nager</option>
<option>Aanand Nager</option>
<option>Minal</option>
<option>Piplani</option>
<option>Asoka Garden</option>
</select></h4><br><br>
</td>

<td><h4 style="color:white;">Blood Group:<select name="blood_group" style="margin-left:2%;">
<option>Select Bloodgroup</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
</h4>
</td>


<tr><td></td>
<td><input type="submit" name="submit" value="search" align="center" style="margin-top:-20px;">
</td></tr>


</table>
</form>
<br><br>




<?php
include('footer.php');
?>





</div>
</body>
</html>










