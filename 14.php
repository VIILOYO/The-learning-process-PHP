<!-- switch и goto -->
<title>Обучение PHP 13</title>

<?php
// switch и case
echo '<h4>switch и case</h4>';

$num = mt_rand(1,3);
echo 'switch:<br>';
switch ($num) { // Проверяемое выражение
    case 1: // Если $num = 1 выполняет инструкция ниже
        echo '$num = 1'; // Инструкция
        break; // Завершение скрипта

    case 2: // Если $num = 2 выполняет инструкция ниже
        echo '$num = 2'; // Инструкция
        break;  // Завершение скрипта

    default: // Выполняется, если ни один кейс не подошел
        echo '$num не равна 1 и не равна 2';
}
echo '<hr>';

// Аналог через if elseif else
echo 'if:<br>';
if ($num == 1) {
    echo '$num = 1';
}elseif($num == 2) {
    echo '$num = 2'; 
}else {
    echo '$num не равна 1 и не равна 2';
}
echo '<hr>';
/*
    switch работает быстрее при большом количестве 
    кейсов, чем аналогичный скрипт через if.
*/

echo 'switch с развернутым условием:<br>';

$number = mt_rand(-10, 10);

echo $number . '<br>';
switch (is_numeric($number)) { // в скобках пишется условие запуска, если туда попадает 0, то выполняется первый кейс!!!
    case $number >= -10 && $number < -5: // 10-=<$number<-5
        echo 'Сильноотрицательное число<br>';
        break;

    case $number >= -5 && $number < 0: // 5-=<$number<0
        echo 'Слабоотрицательное число<br>';
        break;

    case $number <= 5 && $number > 0: // 0<$number<=5
        echo 'Слабоположительное число<br>';  
        break;

    case $number <= 10 && $number > 5: // 5<$number<=10
        echo 'Сильноложительное число<br>';    
        break;

    default:
        echo 'Число равно 0<br>';  
}
echo '<hr>';

// goto
echo '<h4>goto</h4>';

echo 'Начало goto <br>';
$nums = 1; // Значение переменной 
begin: // Тег начало

$nums++; // Добавление 1 к переменной (инкремент)
echo "$nums<br>"; // Вывод переменной 
if ($nums>= 22) goto finish; // Если переменная >= 22 перейти к финишу

goto begin; // Перейти к началу

finish: // Тег конец
echo 'Конец goto<hr>';
// Теги можно использовать любые

echo '<h4>Задание 1</h4>';

$flag1 = false;
$flag2 = true;

if (isset($flag1) && isset($flag2)) $flag3 = true;

switch ($flag3) {
    case $flag1 && $flag2: // Обе переменных = true
        echo 'Оба флага возвращают true<hr>';
        break;
    
    case $flag1 || $flag2: // Одна из переменных = true
        echo 'Один флаг возвращают true<hr>';
        break;

    default:
        echo 'Оба флага возвращают false<hr>';
}

echo '<h4>Задание 2</h4>';
// Подготовка
$number1 = mt_rand(-2, 15);
echo $number . '<br>';

start: // Тег начала

$number1+=mt_rand(-1, 10); // Добавление случайного числа от -1 до 10)
echo "$number1<br>"; // Вывод переменной 
if ($number1>= 150) goto stop; // Если переменная >= 150 перейти к теги stop

goto start; // Перейти к началу

stop: // Тег конец
echo 'Конец файла!';
