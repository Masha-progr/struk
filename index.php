<?php
class Employee{
public $name;
private $age;
public $salary;

public function __construct($name, $age, $salary) 
{
$this->name = $name;
$this->age = $age;
$this->salary = $salary;
}

public function getAge() {
    return $this->age;
}

public function getName() {
        return $this->name;
    }

public function getSalary() {
        return $this->salary;
    }

public function setAge($newAge) {
            $this->age = $newAge;
    }

public function getTotalSalary($emps) {
$total = 0;
foreach ($emps as $emp) {
    $total += $emp->getSalary();
}
return $total;
}
}

$emp1 = new Employee("Иван", 30, 50000);
$emp2 = new Employee("Мария", 25, 60000);

$emp1->setAge(40);
$emp2->setAge(80);

$emps = [$emp1, $emp2];

echo "{$emp1->name}, измененный возраст: {$emp1->getAge()}, зарплата: {$emp1->salary}<br>";
echo "{$emp2->name}, измененный возраст: {$emp2->getAge()}, зарплата: {$emp2->salary}<br>";

echo "Сумма зарплат: " . $emp1->salary + $emp2->salary . "<br>";
echo "Сумма возрастов: " . $emp1->getAge() + $emp2->getAge() . "<br>";

echo "Имя первого работника: " . $emp1->getName() . "<br>";
echo "Имя второго работника: " . $emp2->getName() . "<br>";

echo "Возраст первого работника: " . $emp1->getAge() . "<br>";
echo "Возраст второго работника: " . $emp2->getAge() . "<br>";

echo "Зарплата первого работника: " . $emp1->getSalary() . "<br>";
echo "Зарплата второго работника: " . $emp2->getSalary() . "<br>";

echo "Общая зарплата сотрудников: " . $emp1->getTotalSalary($emps) . "<br>";
?>