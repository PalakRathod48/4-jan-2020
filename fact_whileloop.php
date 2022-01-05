<body>
    <h1> factorial program</h1>
    <form method="POST">
         Enter the Number:<input type="number" name="number" required>
         <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$i = 1;
$x = 1;
$n = $_POST['number'];
while($i <= $n) {
     $x = $x * $i; 
  $i++;
}
echo $x;
}
 ?>