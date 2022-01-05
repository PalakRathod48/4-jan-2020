<html>
<head>
  <title>factorial program</title>
</head>
<body>
    <h1> factorial program</h1>
   <form method="POST">
         Enter the Number : <input type="number" name="number">
         <input type="submit" name="submit" value="submit">
    </form>
<?php  
if(isset($_POST['submit'])){
$num =  $_POST['number'];
//function
}
if(isset($_POST['submit'])){
	function factorial($num) {

    $a = 1;
	for ($i = 1; $i <= $num; $i++){         
            $a = $a * $i;  
           
           }
return $a;
}
if($num < 0){
      $f = factorial($num);
	  $f = -$f;
 echo "Factorial $f.";
}
else{

    $f = factorial($num);
 echo "Factorial $f";   
}
}

?>