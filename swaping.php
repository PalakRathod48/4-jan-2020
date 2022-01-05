<!DOCTYPE html>
<html>


<body>
<?php
$a = 3;
$b = 4;
echo "Before Swapping ";
echo $a;?>
<br>
<?php
echo $b;
//logic swapping
$temp = $a;
$a = $b;
$b = $temp;
?>
<br><br>
<?php 
echo "After Swapping ";
echo $a;?>
<br>
<?php
echo $b;
//again swapping
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
?>
<br><br>
<?php 
echo "Again Swapping ";
echo $a;?>
<br>
<?php
echo $b;
?>
</body>
</html>