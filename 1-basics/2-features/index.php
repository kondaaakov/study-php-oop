<?php

class User {
    public $name;
    public $age;
}

// Первый объект
$user1 = new User; // создаем первый объект
$user1->name = 'john'; // записываем имя
$user1->age = 25; // записываем возраст

// Второй объект
$user2 = new User; // создаем второй объект
$user2->name = 'eric'; // записываем имя
$user2->age = 30; // записываем возраст

// Найдем сумму возрастов:
echo $user1->age + $user2->age; // выведет 55



/* **********************ЗАДАНИЕ*********************** */
class Employee {
    public $name;
    public $age;
    public $salary;
}

$employee1 = new Employee;
$employee1->name = 'john';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee;
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;

echo $employee1->salary + $employee2->salary; // 3000
echo $employee1->age + $employee2->age; // 51
