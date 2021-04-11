<?php
echo"Ramesh<br>";
$p=2000;
$r=4;
$t=8/12;
$Ramesh_si=$p*$r*$t/100;

echo"Ramesh simple intrest is equal to $Ramesh_si<br>";

echo"Suresh<br>";
$p=1400;
$r=5;
$t=6/12;

$Suresh_si=$p*$r*$t/100;
echo"Suresh simple intrest is equal to $Suresh_si<br>";

if ($Ramesh_si>$Suresh_si)
{
echo"Ramesh is greater";
}
else
{
echo"Suresh is greater";
}
?>

