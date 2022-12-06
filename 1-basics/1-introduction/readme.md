# Введение 👨‍🏫

В качестве примера возьмем автомобиль. У него есть колеса, цвет, вид кузова, объем двигателя и так далее. 
Кроме того, водитель может отдавать ему команды: ехать, остановится, повернуть направо, налево и тп.

Можно говорить о том, что существует некоторый **класс** автомобилей, обладающий общими **свойствами** (у всех есть 
колеса и всем им можно отдавать команды).

Конкретный автомобиль, стоящий на улице - это **представитель этого класса**, или, другими словами, **объект этого 
класса**. У всех объектов этого класса есть **свойства**: количество колес, цвет, вид кузова и **методы**: ехать, 
остановится, повернуть направо, налево.

Другими словами сам класс - это чертеж, по которым на заводе делаются автомобили. Объект же - это сама машина, сделанная 
по этим чертежам.

<hr>

В PHP класс создается с помощью ключевого слова `class`, за которым следует название этого класса. 
Класс `Car`: `index.php:3:21`
```
class Car {
    some code
}
```

Укажем теперь в чертеже, что любой автомобиль, созданный по этому чертежу, будет иметь свойство для цвета и 
свойство для количества топлива.

Для этого внутри класса определено свойство `$color` и свойство `$fuel`: `index.php:4:5`
```
public $color; // цвет автомобиля
public $fuel; // количество топлива
```

Теперь сделаем методы нашего класса. В PHP методы, подобно обычным функциям, объявляются с помощью ключевого слова 
`function`, перед которым пишется ключевое слово `public` (хотя не обязательно).

Как уже упоминалось выше, автомобиль может ехать, может поворачивать, может останавливаться. Сделаем соответствующие 
методы в нашем классе: `index.php:8:20`
```
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
```

Теперь нужно "отправится на завод" и сделать объект этого класса (то есть конкретный автомобиль).

В PHP это делается с помощью ключевого слова `new`, после которого пишется имя класса. Однако, если просто создать 
объект класса - это ни к чему не приведет (это все равно, что, к примеру, объявить массив и никуда его не записать). 
Нам нужна переменная для хранения этого объекта. Пусть эта переменная будет называться `$myCar` - запишем в нее
созданный нами объект: `index.php:23`
```
$myCar = new Car; // командуем заводу сделать автомобиль
```

После создания автомобиля можно обращаться к его свойствам. Обращение к ним происходит через стрелочку `->`. Давайте 
установим свойства нашего объекта: `index.php:26:27`
```
// Устанавливаем свойства объекта:
$myCar->color = 'red'; // красим в красный цвет
$myCar->fuel = 50; // заливаем топливо
```

Все, наш автомобиль создан, покрашен и заправлен. Теперь мы можем отдавать ему команды через методы этого автомобиля.

Обращение к методам также происходит через стрелочку, но, в отличие от свойства, после имени метода следует писать 
круглые скобки. Давайте покомандуем нашим объектом: `index.php:30:32`
```
// Вызываем методы объекта: 
$myCar->go();   // автомобиль->едь
$myCar->turn(); // автомобиль->поверни
$myCar->stop(); // автомобиль->остановись
```

<hr>

[↩️ назад](https://github.com/kondaaakov/study-php-oop#содержание)