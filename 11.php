<!-- Операторы сравнения -->
<title>Обучение PHP 11</title>

<?php
echo '<h4>Операторы сравнения</h4>';
// Числа
$number1 = 52.2;
$number2 = 12.8;

// Строки
$str1 = 'Some text';
$str2 = 'Another some text';

// Операторы больше (>) и меньше (<)
echo '<h5>Операторы больше (>) и меньше (<)</h5>';

echo "$number1 > $number2 ? ", $number1 > $number2; // При конкатенации первая часть строки не выводится
echo "<br>$number1 < $number2 ?", $number1 < $number2; // И вообще криво работает

echo "<br>$str1 > $str2 ? ", $str1 > $str2; // По номеру первой буквы S(19)>A(1)
$str3 = 'Some text one';
$str4 = 'Some text 4';
echo "<br>$str3 < $str4 ? ", $str3 < $str4; // Если символ будет одинаков, сравниваться будут следующие

// Для вывода true или false используется функция var_dump()
echo '<br>';
var_dump($str1 > $number2); // Число переводится в строку и сравнивается (домыслы)
$str5 = '84.2';
echo '<br>';
var_dump($str5 < $number1); // Строка переводится в число и сравнивается (домыслы)

// Операторы больше или равно (>=) и меньше или равно (<=)
echo '<h5>Операторы больше или равно (>=) и меньше или равно (<=)</h5>';

$num1 = 125;
$num2 = 1.25e2;
$num3 = 2;

var_dump($num1 <= $num2); // 125 = 125 True
var_dump($num1 >= $num2); // 125 = 125 True
echo '<br>';

var_dump($num1 >= $num3); // 125 > 2 True 
var_dump($num1 <= $num3); // 125 < 2 False
// Строки сравниваются аналогично (как и при > и <)

// Оператор равенства (==) и неравенства (!=)
echo '<h5>Оператор равенства (==) и неравенства (!=)</h5>';
// Строгое равенство
var_dump($num1 == $num2); // 125 = 125 True
echo '<br>';
var_dump($num1 == $num3); // 125 = 2 False
var_dump($num2 == $num3); // 125 = 2 False

echo '<hr>';

// Строгое неравенство
var_dump($num1 != $num2); // 125 != 125 False
echo '<br>';
var_dump($num1 != $num3); // 125 != 2 True
var_dump($num2 != $num3); // 125 != 2 True
/* 
    Оператор '!' - не, его можно ставить и перед другими операторами
    !($num2 > $num1);
    !($str1 == $str2);
*/
echo '<hr>';

var_dump(!($num2 > $num1)); // не(125 > 125) True (125 не больше 125?) 
var_dump(!($str1 == $str2));

// Оператор равенства (===)
echo '<h5>Оператор равенства (===)</h5>';
// Строжайшее равенство 

$var1 = 52;
$var2 = '52';
var_dump($var1 == $var2); // Происходит сравнение после преобразование (додумка)
var_dump($var1 === $var2); // Происходит сравнение с учетом типа переменной
echo '<br>';
var_dump($var1 === intval($var2)); // Если перевести самостоятельно возвращает True
var_dump(strval($var1) === $var2); // Если перевести самостоятельно возвращает True
// !== строгое неравенство

// экспериментальная часть 
echo '<h5>Экспериментальная часть</h5>';

var_dump(1 === TRUE); // False хотя оба значения = 1
var_dump(1 == TRUE); // True так как не сравнивается тип переменной
echo '<br>';
var_dump('' == NULL); // Пустая строка имеет значение NULL, но другой тип
var_dump('' === NULL);
echo '<br>';
$test1; // Имеет значение NULL
var_dump(NULL === $test1); // Возвращает True (с предупреждением)
var_dump('' === $test1);  // False разные типы данных
var_dump('' == $test1);  // True оба имеют значение NULL
echo '<br>';
var_dump(0 == NULL); // True оба имеют значение NULL
var_dump(0 === NULL);  // False разный тип данных

// Задание 
echo '<h5>Задание</h5>';

// Функция !намерено! работает только с целыми положительнымии степенями
function get_degree($number, $degree) {
    $number1 = $number;
    for ($i = $degree; $i > 1; $i--) {
        $number1*=$number;
    }
    return $number1 . '<br>';
}

echo get_degree(5,3);
echo get_degree(25, 9);
echo get_degree(-3, 11);
