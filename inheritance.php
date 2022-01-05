<!DOCTYPE html>
<html>
<body>

<?php
class employee_name{
  public $name;
  public $age;

  public function e_name() {
    echo "Employee name is palak "; 
  }
}

// Strawberry is inherited from Fruit
class employee_age extends employee_name {
  public function e_age() {
    echo "currently i am doing my internship in yiion technology"; 
  }
}

$emlpoyee = new employee_age();

$emlpoyee->e_name();
$emlpoyee->e_age();
?>
 
</body>
</html>
