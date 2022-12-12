<?php
class User {
    public $name;
    public $age;

    public function show() {
        return $this->name; // вернем имя из свойства
    }

    public function setName($name) {
        $this->name = $name; // запишем новое значение свойства name
    }
}

$user = new User; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = 25; // записываем возраст

// Вызываем наш метод:
echo $user->show(); // выведет 'john'

$user->setName('eric');
echo $user->show(); // выведет 'eric'

/* **********************ЗАДАНИЕ*********************** */

class Employee {
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function checkAge() {
        if ($this->getAge() > 18) return true;
        else return false;
    }
}

$employee1 = new Employee();
$employee1->age = 19;
$employee1->salary = 1200;
$employee1->name = 'Ed';

$employee2 = new Employee();
$employee2->age = 20;
$employee2->salary = 1500;
$employee2->name = 'Tom';

echo $employee1->getSalary() + $employee2->getSalary();