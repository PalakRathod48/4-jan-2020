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
