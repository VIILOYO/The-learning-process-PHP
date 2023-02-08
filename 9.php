<!-- Операторы. Перевод переменной в другой тип. -->
<title>Обучение PHP 9</title>

<?php
echo '<h4>Операторы</h4>';
// Конкатенация
echo '<h5>Конкатенация</h5>';

$str1 = 'Хорошо, что я учу ';
$str2 = 'PHP';
$num1 = 2.78;
$num2 = 9.5e3;

$str = $str1 . $str2; // '.' - конкатенация (объединение) строк
$num = $num1 . $num2; // Конкатенировать можно и числа
echo $str . '<br>';
echo $num . '<br>';

echo 'Тип переменной $num1 - ' . gettype($num1); // Конкатенация работает только со строками
echo '<br>Тип переменной $num - ' . gettype($num); // Остальные типы переводятся в строку

// Присваивание с объединением строк

$str1 .= $num1; // Объединяет строки (работает как += или -= например)
echo '<br>', $str1; // В echo вместо конкатенации можно использовать запятую

// Арифметические операторы
echo '<h5>Арифметические операторы</h5>';

/*
    + Сложение
    - Вычитание
    * Умножение
    / Деление
    % Целочисленный статок от деления
    ** Возведение в степень
    ++ Увеличение на 1
    -- Уменьшение на 1
*/

$num1 = 15;
$num2 = 2.5;
echo "$num1 + $num2 = " . $num1 + $num2;
echo "<br>$num1 - $num2 = " . $num1 - $num2;
echo "<br>$num1 * $num2 = " . $num1 * $num2;
echo "<br>$num1 / $num2 = " . $num1 / $num2;
echo "<br>$num1 % ($num2 - 0.5) = " . $num1 % ($num2-0.5); // 15/2 = 7 и 1 остаток
echo "<br>$num1 ** ($num2 - 0.5) = " . $num1 ** ($num2-0.5); // 15 в квадрате
echo "<br>++$num1 = " . ++$num1;
echo "<br>--$num2 = " . --$num2;

// Перевод переменной в другой тип 
echo '<h5>Перевод переменной в другой тип</h5>';
// Из float в integer intval()
echo (int)($num2);
echo '<br>' . intval($num2);

// Из str в float floatval()
$str3 = '123.1The';
echo '<br>' . floatval($str3);

// Из числа, строки или массивы в bool boolval()
// Не пустые строки и числа (кроме 0), а также не пустые массивы = true
echo '<br>Пустая строка - ' . boolval(''); // false
echo '<br>Не пустая строка - ' . boolval('123');
echo '<br>Число 0 - ' . boolval(0); // false
echo '<br>Любое число отличное от 0 - ' . boolval(-2.e-5);
echo '<br>Пустой массив - ' . boolval([]); // false
echo '<br>Не пустой массив - ' . boolval([1, 2 , 'ДАДА']);

// Из числа в строку strval()
$nuber_str = 952;
echo '<br>' . gettype($nuber_str);
$nuber_str = strval($nuber_str);
echo '<br>' . gettype($nuber_str);

// Проверка четности или нечетности числа
echo '<h5>Проверка четности или нечетности числа</h5>';

function get_even_or_odd($num) {
    $num_val = intval($num);
    if ($num_val % 2) {
        echo "<br> Число $num - нечетное";
    }
    elseif (gettype($num) == 'string') {
        echo "<br> $num - строка";
    }
    else {
        echo "<br> Число $num - четное";
    }
}

echo get_even_or_odd(125.5);
echo get_even_or_odd(-12);
echo get_even_or_odd(2.e12);
echo get_even_or_odd(-0.25); // Четное, потому что округляется до 0
echo get_even_or_odd('Строка');
