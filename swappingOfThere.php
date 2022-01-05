<?php

$a = 100;
$b = 200;
$c = 300;

echo "<br>"."Before Swap";
echo "<br>"."Value of first number is  = ". $a;
echo "<br>"."Value of second number is  = ". $b;
echo "<br>"."Value of third number is  = ". $c;

$a = $a + $b + $c;
$b = $a - ($b + $c);
$c = $a - ($b + $c);
$a = $a - ($b + $c);

echo "<br>"."After Swap";
echo "<br>"."Value of first number is  = ". $a;
echo "<br>"."Value of second number is  = ". $b;
echo "<br>"."Value of third number is  = ". $c;
?>