<?php  
$num = 5;
$a = $num;  
  
for ($x=1; $x<$num; $x++)   
{  
  $a *= $num - $x;  
}  
echo $a;  
?>