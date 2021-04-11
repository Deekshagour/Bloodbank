<?php
echo"sita";

$sita_h=40;
$sita_e=22;
$sita_m=25;
$sita_ss=35;
$sita_s=20;

$sita_p=($sita_h+$sita_e+$sita_m+$sita_ss+$sita_s)*100/500;
echo "percentage is $sita_p<br>";

echo "gita";

$gita_h=66;
$gita_e=55;
$gita_m=77;
$gita_ss=75;
$gita_s=60;

$gita_p=($gita_h+$gita_e+$gita_m+$gita_ss+$gita_s)*100/500;
echo "percentage is  $gita_p<br>";

if($sita_p<35)
{
echo "sita is fail<br>";
}
else
{
echo "sita is pass<br>";
}
if($gita_p>35)
{
echo "gita is fail<br>";
}
else
{
echo "gita is pass<br>";
}
?>


