<!-- Статические переменные класса -->
<title>Обучение PHP 6</title>
<?php
echo '<h4>Статические переменные класса</h4>';

class SomePeople {
    public $name;
    public $age;
    public static $people = 1; // Статическая переменная
}

// Переменные объекта класса
$nick = new SomePeople();
$nick->name = 'Nick';
$nick->age = 52;

// Переменные класса
echo SomePeople::$people; // Обращение к статической переменной класса
echo '<br>' . $nick::$people; // Аналогичное обращение к переменной

$nick->people = 0; // Не меняет статическую переменную, а создает новую внутри объекта
echo '<br>' . $nick::$people . ' - переменная класса'; // Старая переменная не удаляется
echo '<br>' . $nick->people . ' - переменная объекта'; // Наглядное отображение 

/*
echo SomePeople::$name; // Выдает ошибку, даже при присвоении значения переменной в классе
*/

// Последовательное присвоение
echo '<h4>Последовательное присвоение</h4>';

$first = $second = 12.5; // Переменная $second равно 12.5, а переменная $first равна $second
echo "first - $first" . '<br>' . "second - $second";
$second *=2;
echo '<br>' . "second - $second";

$tim = new SomePeople();
$tim->age = 15;

$bob = $tim;
echo '<br>' . "Возвраст Тима - $tim->age и возраст Боба -  $bob->age". '<br>';
$tim->age = 17;

/* Присваивание переменной какой-то объект создается полное 
зеркало объекта и все изменения влияют на обе переменные */
echo $bob->age; // Вывод 17

$bob->name = 'Боб';
echo '<br>' . "Имя Тима - $tim->name" . '<br>' . "Имя Боба - $bob->name"; // Одинаковое значение переменных

$gabe = $anne = new SomePeople(); // Такое присваивание работает аналогично предыдущему
$gabe->age = 62;
$anne->age = 25; // Конечное значение возраста для обеих переменных

echo '<br>' . "Гейб - $gabe->age" . '<br>' . "Анна - $anne->age";

// Клонирование объекта
echo '<h4>Клонирование объекта</h4>';

$tom = clone $tim; // команда clone клонируют переменную, а не создает ссылку на неё
echo $tom->age;
$tom->age = 25;
$tim->name = 'Тим';
$tom->name = 'Том';

echo '<br>' . "$tim->name - $tim->age" . '<br>' . "$tom->name - $tom->age";
