<?php
$x=10;
$x+=120;
echo "$x";
?>

<br>

<?php
$x=10;
$x-=120;
echo  "$x";
?>

<br>

<?php
$x=8;
$x*=225;
echo "$x";
?>

<br>

<?php
$x=9;
$x/=625;
echo "$x";
?>

<br>

<?php
$x=22;
$x%=225;
echo "$x";
?>
<br>


<?php
$x=50;
$y=20;
if($x>$y)
{
echo"$x is greater";
}
else
{
echo"$y is greater";
}
?>

<br>

<?php
$a=10;
$b=80;
$c=30;
if($a>$b && $a>$c)
{
echo"$a is greater than $b,$c";
}
else if($b>$c && $b>$a)
{
echo"$b is greater";
}
else
{
echo"$c is greater";
}
?>

<br>

<?php
$x=11;
$y=22;
$z=33;
if($x=11 and $y=22 and $z=33)
{
echo"HELLO WORLD";
}
?>

<br>

<?php
$x=4;
$y=2;
if($x=4||$y=2)
{
echo"HELLO WORLD";
}
?>

<br>

<?php
$x="hello";
$y="world";
if($x="hello" and $y="world")
{
echo"$x$y";
}
?>
<br>

<?php
$p="1000";
$r="2%";
$t="500hr";
if ($si=$p*$r*$t/100)
{
echo ("$si");
}
?>

<br>
<?php
$x="(a=a+b)";
$y="(b=a-b)";
$z="(a=a-b)";
if($p="$x <br> $y <br> $z")
{
echo"$p";
}
?>
<br>

<?php
$khushi="75%";
$Aayushi="55%";
if($khushi>$Aayushi)
{
echo"all clear";
{
echo"<br>";
if($Aayushi<$khushi)
{
echo("fail");
}
}
}
?>
<br>

<?php
$a="15";
$b="18";
if($a<$b)
{
echo"personn is not eligible for voting";
{
echo"<br>";
{
if("$b>$a")
echo"person is eligible for voting";
}
}
}	
?>
<br>