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
<div class="col-12">
<center>
<div style="border:1px solid white;width:30%; padding:30px;">
<h2 align="center" style="color:white;">ADD BLOOD BANK HERE</h2>

<table align="center" style="color:white;">
<form action="blood_check.php" method="POST">

<tr><td>Name:</td><td><input type="text" name="name" ></td></tr>
<tr><td>Phone no.:</td><td><input type="text" name="phone_no" ></td></tr>
<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
<tr><td></td><td><input type="submit" value="addbank"></td></tr>

</form>

</table>
</div>
</center>
</div>










</div>
</div>
</body>
</html>
