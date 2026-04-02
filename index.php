<?php
class Employee{
public $name;
public $age;
public $salary;

public function __construct($name, $age, $salary) 
{
$this->name = $name;
$this->age = $age;
$this->salary = $salary;
}
}

$emp1 = new Employee("Иван", 30, 50000);
$emp2 = new Employee("Мария", 25, 60000);

echo "{$emp1->name}, возраст: {$emp1->age}, зарплата: {$emp1->salary}<br>";
echo "{$emp2->name}, возраст: {$emp2->age}, зарплата: {$emp2->salary}<br>";

echo "Сумма зарплат: " . $emp1->salary + $emp2->salary . "<br>";
echo "Сумма возрастов: " . $emp1->age + $emp2->age . "<br>";
?>