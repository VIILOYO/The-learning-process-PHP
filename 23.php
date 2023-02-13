<!-- Глобальные и статические переменные -->
<title>Обучение PHP 23</title>

<?php
// Глобальные переменные
echo '<h4>Глобальные переменные</h4>'; // Не рекомендуется

function getSum(){
    $var = 2; // Локальная переменнная
    return $var;
}

$var = 5; // Внешняя переменная
echo getSum() . '<br>'; // Локальная
echo $var . '<hr>'; // Внешняя

// Чтобы сделать из локальной переменной сделать глобальной используется слово global

function testFun() {
    global $var; // Глобальная переменная
    $var = 2;
    return $var;
}

$var = 5; // На неё влияет переменная из функции
echo testFun() . '<br>'; 
echo $var . '<hr>'; 

// Статические переменные
echo '<h4>Статические переменные</h4>';

echo 'Локальная переменная<br>';
function calculator1() {
    $start=0;
    return ++$start;
}

// Локальная переменная каждый раз переписывается на 0
echo (calculator1()) . '<br>'; // 1
echo (calculator1()) . '<br>'; // 1
echo (calculator1()) . '<br>'; // 1
echo (calculator1()) . '<hr>'; // 1 

// Статическая переменная не инициализируется каждый раз
echo 'Статическая переменная<br>';
function calculator() {
    static $start=0; // Не приравнивается к 0 каждый раз
    return ++$start;
}

// К статической переменной каждый раз добавляется 1
echo (calculator()) . '<br>'; // 1
echo (calculator()) . '<br>'; // 2
echo (calculator()) . '<br>'; // 3
echo (calculator()) . '<br>'; // 4
echo (calculator()) . '<br>'; // 5
echo (calculator()) . '<hr>'; // 6

// Функция может возвращать массив
echo '<h4>Возврат массива функцией</h4>';

function myFriends() {
    $kate = 'Kate';
    $nick = 'Nick';
    $bob = 'Bob';

    return [$kate, $nick, $bob];
}

echo '<pre>'; print_r(myFriends()); echo '</pre><hr >';

// Задание 1
echo '<h4>Задание 1</h4>';
echo '<p>Создайте функцию с глобальной переменной, которая будет делать следующие вещи:<br>
    1. Принимать параметрами два числа<br>
    2. Внутри умножать их друг на друга<br>
    3. Возвращать глобальную переменную с результатом</p><hr>';

function globalFun(int $a, int $b) : int {
    global $c;
    return $c = $a*$b;
}

$a = mt_rand(0, 10);
$b = mt_rand(0, 10);
echo "\$a = $a<br>\$b = $b<br>";

echo 'Значение гломальной переменной $c = ' . globalFun($a, $b) . '<hr>';

// Задание 2
echo '<h4>Задание 2</h4>';
echo '<p>Вызовите функцию два раза<br>Второй раз используйте первый параметр саму функцию<hr>';

$a = 5;
$b = 4;
echo "\$a = $a<br>\$b = $b<br>";
echo globalFun($a, $b) . '<br>';
echo globalFun(globalFun($a, $b), $b) . '<hr>';

// Задание 3
echo '<h4>Задание 3</h4>';
echo '<p>Создайте функцию с следующим функционалом:<br>
1. Принимает два параметра (имя, дату возраст);<br>
2. внутри функции считаете (преобразовываете) возраст в количество прожитых месяцев;<br>
3. внутри функции считаете (преобразовываете) возраст в количество прожитых дней;<br>
4. Через return возвращаете массив: [имя, возраст, месяца, дни].</p><hr>';

function dateCalculat(string $name, int $age) : array {
    $array['name'] = $name;
    $array['age'] = $age;
    $array['months'] = $age*12;
    $array['days'] = round(($age * 366) - ($age-$age/4)); // Точность +- 1 день

    return $array;
}

echo '<pre>'; 
print_r(dateCalculat('Алексей', 44));
 echo '</pre><hr >';
 