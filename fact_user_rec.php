<!DOCTYPE html>
<html>
<head>
  <title>factorial program</title>
</head>
<body>
    <h1> factorial program</h1>
   <form method="POST" >
         Enter the Number:<input type="number" name="number" required>
         <input type="submit" name="submit" value="submit" >
    </form>
   
<?php
 if(isset($_POST['submit'])){
$number =  $_POST['number'];
function factorial($number) {

    if ($number < 2) {
        return 1;
    } 
    else{ 
     return ($number * factorial($number-1));
    }  
    

}

$f = factorial($number);
echo "factorial of ".$number;
echo " : ".$f;
}
?>

