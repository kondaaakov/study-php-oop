<?php

class Car {
    public $color; // цвет автомобиля
    public $fuel; // количество топлива

    // Команда ехать:
    public function go() {
        // какой-то PHP код
    }

    // Команда поворачивать:
    public function turn() {
        // какой-то PHP код
    }

    // Команда остановиться:
    public function stop() {
        // какой-то PHP код
    }
}

$myCar = new Car; // командуем заводу сделать автомобиль

// Устанавливаем свойства объекта:
$myCar->color = 'red'; // красим в красный цвет
$myCar->fuel = 50; // заливаем топливо

// Вызываем методы объекта:
$myCar->go();   // автомобиль->едь
$myCar->turn(); // автомобиль->поверни
$myCar->stop(); // автомобиль->остановись