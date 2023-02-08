<!-- Сокращенные арифметические операторы. Инкремент и декремент. -->
<title>Обучение PHP 10</title>

<?php
echo '<h4>Сокращенные арифметические операторы</h4>';

/*
    $number += $var; $number = $number + $var;
    $number -= $var; $number = $number - $var;
    $number *= $var; $number = $number * $var;
    $number /= $var; $number = $number / $var;
    $number %= $var; $number = $number % $var;
    $number .= $var; $number = $number . $var;
    $number **= $var; $number = $number ** $var;
*/

$number = 6.12;
$var = 1.25;

echo '$number = ' . $number . '<br>';
echo '$var = ' . $var . '<br>';
// Сложение
$number_var = $number += $var;
echo '$number += $var = ' . $number_var . '<br>';

// Вычитание
$number = 6.12;
$var = 1.25;
$number_var = $number -= $var;
echo '$number -= $var = ' . $number_var . '<br>';

// Умножение
$number = 6.12;
$var = 1.25;
$number_var = $number *= $var;
echo '$number *= $var = ' . $number_var . '<br>';

// Деление
$number = 6.12;
$var = 1.25;
$number_var = $number /= $var;
echo '$number /= $var = ' . $number_var . '<br>';

// Остаток от деления
$number = 6.12;
$var = 1.25;
$number_var = $number %= $var;
echo '$number %= $var = ' . $number_var . '<br>';

// Конкатенация
$number = 6.12;
$var = 1.25;
$number_var = $number .= $var;
echo '$number .= $var = ' . $number_var . '<br>';

// Возведение в степень
$number = 6.12;
$var = 1.25;
$number_var = $number **= $var;
echo '$number **= $var = ' . $number_var . '<br>';

echo '<h4> Инструмент инкремент и  декремент</h4>';
/*
    Инкремент ++ (+1) ++$num
    Декремент -- (-1) --$num
*/
echo '<h5>Префиксный</h5>';
$num = 5;
echo "++$num = " . ++$num . '<br>';
echo "--$num = " . --$num . '<br>';

/*
    Существует 2 вида инкремента и декремента
    Префиксный ++$num или --$num - сначала происходит мат. операция, а затем действия с переменной
    Постфиксный $num++ или $num-- - сначала происходит действия с переменной, а затем мат. операция
*/
echo '<h5>Постфиксный</h5>';
echo "$num++ = " . $num++ . '<br>';
echo "$num-- = " . $num-- . '<br>';
echo '<hr>';

// Инструмент инкремент и  декремент могут применяться только к переменным

// echo ++1; Ошибка!
$str = 'Какая-то строка ';
echo --$str . '<br>'; // Работает только с числами (проверка is_numeric())

$str1 = 'aaa';
echo ++$str1 . '<br>'; // Работает с англоязычными строками выводя следующую букву
// aaa = 111 прибавляя 1 получается 112 = aab

$str2 = 'zzz';
echo ++$str2 . '<br>'; // 1111 = aaaa
