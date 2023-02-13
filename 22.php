<!-- Работа с параметрами функций -->
<title>Обучение PHP 22</title>

<?php
// Изменение переменной внутри функции
echo '<h4>Изменение переменной внутри функции</h4>';

// Функция не меняет переменную, которую успользует как параметр
function getResult($var) {
    $var *= 2;
    return $var;
}

$num = mt_rand(1, 10);
echo "\$num = $num<br>";
echo 'Результат функции = ' . getResult($num) . '<br>';
echo "\$num = $num<hr>";

// Для изменения переменной внутри функции перед параметром ставится знак &
function getVar(&$var) { // Параметр по ссылке
    $var *= mt_rand(2, 3);
    return $var;
}
$num = mt_rand(1, 10);
echo "\$num = $num<br>";
echo 'Результат функции = ' . getVar($num) . '<br>';
echo "\$num = $num<hr>";

// Необязательные параметры
echo '<h4>Необязательные параметры</h4>';
// Такие параметры имеют значение по умолчанию

function getSum($var1, $var2 = 5) { // $var2 - необязательный параметр
    return $var1 + $var2;
}

echo getSum(12) . ' - результат функции<br>';
echo getSum(12, 2) . ' - результат функции<hr>';

// Переменное количество параметров
echo '<h4>Переменное количество параметров</h4>';
// Нет четкого количества параметров

function myList(...$items) { // $items - массив
    foreach($items as $key => $item) {
        echo "[$key] => $item<br>";
    }
}

myList(1, 5, 'Alexey', 126, 'hi', 7348, 82);
echo '<hr>';

// Вызов функции без четкого количества переменных
echo '<h4>Вызов функции без четкого количества переменных</h4>';

for ($i=0; $i < 51; $i++) { 
    $some[$i] = mt_rand(); // Заполенине массива случайными числами
}
mylist(...$some);
echo '<hr>';

// Задание 1
echo '<h4>Задание 1</h4>';
echo '<p>1. Создайте массив с именами ваших друзей<br>
    2. Создайте функцию, которая будет принимать аргументов массив и внутри<br>
    каждый элемент массива будет выводить в браузер с приветствием и именем друга.
</p><hr>';

$friends = ['Mike', 'Nick', 'Alex', 'Alena', 'Alexa', 'Lisa', 'Slava', 'Sveta'];

function welcomeFriends(...$friends) {
    foreach($friends as $friend) {
        echo "Hello, $friend!!!<br>";
    }
}

welcomeFriends(...$friends);
echo '<hr>';
