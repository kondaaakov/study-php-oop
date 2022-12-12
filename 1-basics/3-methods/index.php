<?php

class User {
    public $name;
    public $age;

    // Создаем метод:
    public function show() {
        return '!!!';
    }
}

$user = new User;
$user->name = 'john';
$user->age = 25;

// Вызовем наш метод:
echo $user->show(); // выведет '!!!'