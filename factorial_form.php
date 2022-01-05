<!DOCTYPE html>
<html>
<head>
  <title>factorial program</title>
</head>
<body>
    <h1> factorial program</h1>
	<form method="POST">
		 Enter the Number:<input type="number" name="number" required>
		 <input type="submit" name="submit" value="submit" >
	</form>

<?php   
    if(isset($_POST['submit'])){  
        $a = 1;  
       
        $number = $_POST['number'];  
       
        //loop
        for ($i = 1; $i <= $number; $i++){         
            $a = $a * $i;  
            }  
            echo "Factorial of $number:$a .";  
    }  
?>
</body>
</html>


