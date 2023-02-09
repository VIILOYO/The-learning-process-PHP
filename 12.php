<!-- Условные операторы if(), else(), elseif() -->
<title>Обучение PHP 12</title>

<?php
echo '<h4>Условные операторы if(), else(), elseif()</h4>';

/*
    Синтаксис:
    if (условие) {
        Инструкция если true;
    }
    elseif (условие, выполняется, если if - false) { 
        Инструкция если true;
    }
    else {
        Инструкция, если остальное false (или если один из if неверно)
    }
    elseif может быть множество, как и if (может выполняться несколько)
*/

function test_funct($number) {
    intval($number);
    echo "Проверяемое число - $number <br>";
    if ($number > 2) {
        echo 'Число больше 2<br>';
    }
    elseif ($number == 2) {
        echo 'Число равно 2<br>';
    }
    else {
        echo 'Число не подходит<br>';
    }    
    echo '<hr>';
}

test_funct(13);
test_funct('2');
test_funct(-15);

// Несколько if()
echo '<h4>Несколько if()</h4>';

function test_if($number) {
    intval($number);
    echo "Проверяемое число - $number <br>";
    if ($number > 0) {
        echo 'Число больше 0<br>';
    }
    if ($number == 15) {
        echo 'Число равно 15<br>';
    }
    if ($number == 0) {
        echo 'Число равно 0<br>';
    }
    else {
        echo 'Число меньше 0<br>'; 
    }    
    echo '<hr>';
}

test_if(0); // Работает 1 и 3 if
test_if(15); // Так как if перед else дает false срабатывает оператор else
test_if(-15); // Работает else
test_if(11); // Так как if перед else дает false срабатывает оператор else

// Сокращенная записать if (когда else не нужно)
echo '<h5>Сокращенная записать if (когда else не нужно)</h5>';
// Не рекомендуется без фигурных скобок 
$number = 5;
if ($number >= 3) echo "$number >= 3";

// Комбинирование условных операторов
echo '<h5>Комбинирование условных операторов</h5>';

function comb_oper($var) {
    echo "Переменная - $var <br>";
    if (is_numeric($var) && is_integer($var)) { // Выполняется если оба значения true
        echo 'Переменная является целочисленной <br>';
    }
    elseif ($var == 'Дробь' || gettype($var) == 'double') { // Выполняется если хотя бы одно из значений true
        echo 'Переменная равна "Дробь или является дробной <br>';
    }
    else {
        echo 'Переменная не является числом <br>';
    }
    echo '<hr>';
}

comb_oper(15);
comb_oper(2.5);
comb_oper('Дробь');
comb_oper('Строка');

// Сокращенное использование if() else()
echo '<h5>Сокращенное использование if() else()</h5>';

$alpha = 'a';

if ($alpha == 'b'): ?>
<h5>Альфа = b</h5> <!-- Выполняется, если if дает true -->

<?php 
elseif ($alpha == 'a'): ?>
<h5>Альфа = a</h5> <!-- Выполняется, если elseif дает true -->

<?php 
else: ?>
<h5>Альфа != a и != b </h5> <!-- Выполняется, если все дает false -->
<?php 
endif // При такой конструкции необходимо писать endif внутри php?> 

<?php 
// Задание
echo '<h4>Задание</h4>';
$timels = 4;

function get_time($time, &$timels) { // '&' - изменение переменной из вне
    if ($time > 0 && $time <= 6) {
        $timels = 0;
    }elseif ($time > 6 && $time <= 12) {
        $timels = 1;
    }elseif ($time > 12 && $time <= 18) {
        $timels = 2;
    }elseif ($time > 18 && $time <= 24) {
        $timels = 3;
    }else {
        $timels = 4;
    }
}

get_time(25, $timels);

if ($timels == 0): ?>
<p>Сейчас ночь<p>

<?php elseif($timels == 1): ?>
<p>Сейчас утро</p>

<?php elseif($timels == 2): ?>
<p>Сейчас День</p>

<?php elseif($timels == 3): ?>
<p>Сейчас Вечер</p>

<?php else: ?>
<p>Неверное значение времени</p>

<?php endif ?>
