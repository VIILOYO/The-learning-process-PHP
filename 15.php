<!-- Цикл while -->
<title>Обучение PHP 15</title>

<?php
// Цикл while
echo '<h4>Цикл while</h4>';

/*
    Синтаксис
    while (условие) {
        Инструкция;
    }
*/

$i = 0;

// Повторение действие пока условие в while верно
while ($i<=12){ // true или false
    echo 'Hello, World! ';
    echo $i . '<br>';
    $i++; // Обязательно, иначе будет бесконечный цикл
}

echo '<hr>';

$i = 40;

while (true) {
    $i--;
    if ($i <= 25) break; // Условие выхода из цикла
    echo $i . '<br>';
}

echo '<hr>';

$i = 10;
while (--$i) { // Всё, кроме 0 = true
    echo $i . '<br>'; // Вычитание до проверки
}
echo '<hr>';

$i = 10;
while ($i--) { // Всё, кроме 0 = true
    echo $i . '<br>'; // Вычитание после проверки
}
echo '<hr>';

echo '<h4>Задание</h4>';

$i = 0;
while ($i<=10) {
    if ($i%2) {
        echo "$i - Нечетное число<br>";
    }else {
        echo "$i - четное число<br>";
    }
    $i++;
}
echo '<hr>';

echo '<h4>Задание 2</h4>';

$arr = [];
$i = 0;

while (count($arr) < 10) {
    array_push($arr, ($i+2)/2);
    echo $arr[$i] . '<br>';
    $i++;
}

echo '<hr>';

echo '<pre>'; print_r($arr); echo '</pre>';
