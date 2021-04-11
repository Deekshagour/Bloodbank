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
<div class="col-6">
<img src="images/ff.jpg"height="15%"width="30%">
</div>

<div class="col-6">
<h1 style="background-color:red;padding-left:50%;margin-bottom:5%;margin-top:0%;margin-left:-70%;align="center"><font color="white">Online Blood Bank</font></center></h1>
</div>
</div><br>
<br>

<div class="row">
<div class="2">
<h3 style="padding-left:75%;margin-left:15%;margin-top:-3%;">
<a href="login.html"><font color="white">Logout</font></a></h3>
</div>
<div class="row">
<div class="col-6">
</div>


<div class="col-2">
<h3 style="padding-left:20%;margin-left:40%;margin-right:-2%;padding-bottom:10%;padding-top:10%;background-color:red;">
<a href="home.php"><a href="home1.html"><font color="white">Home</font></a></a></h3>
</div>


<div class="col-2">
<h3 style="padding-left:20%;margin-right:-20%;margin-left:20%;padding-top:10%;padding-bottom:10%;background-color:red;">
<a href="Tips on Donation.php">
<font color="white">Tips on Donation</font></a></h3>
</div>

<div class="col-2">
<h3 style="padding-left:20%;margin-right:-50%;margin-left:40%;padding-top:10%;padding-bottom:10%;background-color:red;">
<a href="Why Donate Blood">
<font color="white">Why Donate Blood</font></a></h3>
</div>

<div class="col-2">
<h3 style="padding-left:20%;margin-right:-40%;margin-left:70%;padding-top:10%;padding-bottom:10%;background-color:red;">
<a href="About Us">
<font color="white">About Us</font></a></h3>
</div>

<div class="col-2">
<h3 style="padding-left:20%;margin-right:-35%;margin-left:60%;padding-top:10%;padding-bottom:10%;background-color:red;">
<a href="Contact Us.php">
<font color="white">Contact Us</font></a></h3>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-6">
<table align="center">
<form action="blood_check.php" method="POST">
<tr><td>Name:<input type="text" name="name" style="margin-left:35px;"></td></tr><br><br>
<tr><td>Phone no.:<input type="text" name="phone_no" style="margin-left:10px;"></td></tr><br><br>
<tr><td>Address:<input type="text" name="address" style="margin-left:23px;"></td></tr><br>
<tr><td><input type="submit" value="addbank"></td></tr>
</table>
</form>
</div>










</div>
</div>
</body>
</html>
