<!-- Вложенные, динамические и анонимные функции -->
<title>Обучение PHP 25</title>

<?php
// Вложенные функции
echo '<h4>Вложенные функции</h4>';


function box() {
    function inn() { // Вложенная функция
        echo 'TEST<br>';
    }
    function getNum() { //Вложенная функция
        echo mt_rand(0, 10) . '<br>';
    }
    getNum(); // При вызове функции box() сразу вызывает функцию getNum
}

box(); // Позволяет запустить вложенные функции
inn(); // Запускает вложенную функцию
echo '<hr>';

$array = [1, 5, 7, 12];

function testov($arr) { // Требует параметр
    function getStrArray() { // Не требует параметр
        echo '<br>array<br>';
    }
    print_r($arr); // Требует параметр
}

testov($array);
getStrArray();

// Динамическое имя функции
echo '<h4>Динамическое имя функции</h4>';

function hello() {
    return 'Hello<br>';
}
$var = hello(); // Функция 1 раз отрабатывает (если есть echo, то текст выведется)
echo $var; // Вызов функции через переменную
$var1 = 'hello'; // Не вызывает функцию
echo $var1() . '<hr>'; // Вызов функции

// Анонимные функции
echo '<h4>Анонимные функции</h4>';
// Функция без имени (аргумент другой функции)

$array = [5, 1, 3, 12, 75];

$some = function($arr) {
    foreach($arr as $val) {
        echo $val . '<br>';
    }
};

$some($array);

$var2 = function(){
    echo 'Запуск анонимной функции';
};
$var2();
echo '<hr>';

// Задание 1
echo '<h4>Задание 1</h4>';
echo '<p>Напишите две разные функции с использованием динамического имени:<br>
        1. С аргументами<br>
        2. Без аргументов<hr></p>';

function plus($a, $b) {
    return $a+$b;
}

$plus = 'plus'; // Передача переменной названия функции
echo '2 + 5 = ' . $plus(2, 5) . '<br>'; // Вызов функции через переменную

function getTest() {
    return 'Test<hr>';
}

$test = getTest();
echo $test;

// Задание 2
echo '<h4>Задание 2</h4>';
echo '<p>
    Создайте функцию sum ( ) , которая принимает любое количество числовых аргументов и возвращает их сумму.
<hr></p>';

function sum(...$numbers) {
    $sum = 0;
    foreach($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

for ($i=0; $i < mt_rand(25, 100); $i++) { 
    $array[$i] = mt_rand(0, ($i+2)**2);
}

echo '<pre>'; print_r($array); echo '</pre><br>';

echo 'Сумма чисел массива $array = ' . sum(...$array);
