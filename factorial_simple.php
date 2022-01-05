<!DOCTYPE html>
<html>
<head>
  <title>factorial program</title>
</head>
<body>
  <h1> factorial program</h1>
<?php  
$num = 4;
$a = 1;  
  
for ($x=$num; $x>=1; $x--)   
{  
  $a = $a * $x;  
}  
echo "Factorial of $num is $a";  
?>
</body>
</html>