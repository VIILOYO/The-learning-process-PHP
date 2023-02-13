<!-- Объявление и вызов функции -->
<title>Обучение PHP 21</title>

<?php
// Объявление и вызов функции
echo '<h4>Объявление и вызов функции</h4>';

/*
    Синтаксис 
    functiob название(параметры) {
        тело функции;
    }
*/

function getSum($a, $b) { // Название
    return $a+$b; // Возвращает результат из функции
}

getSum(125, 25); // Вызов функции (ничего не выводится)
echo getSum(125, 25) . '<br>'; // Вызов функции через echo

// Функцию можно вызвать до её объявления

echo stringSum('Hello, ', 'World!<br>'); // Выведет

function stringSum($a, $b) {
    return $a . $b;
}

// Исключение функции внутри {}, например в if

// echo getInt(10) . '<br>'; // Ошибка

if (true) {
    function getInt($a) {
        return random(0, $a);
    }
}

// Параметры функции
echo '<h4>Параметры функции</h4>';

// Параметры передаются внутрь скобок

function getRandom($a, $b) { // Параметры внутри функции
    return rand($a, $b);
}

echo 'Случайное число - ' . getRandom(2, 25) . '<br>'; // Добавление чисел в функцию
echo 'Случайное число - ' . getRandom(-100, 0) . '<br>'; // Одна функция с разными параметрами

echo '<hr>';

// Пример с переменными

$var1 = mt_rand(0, 100);
$var2 = mt_rand(0, 100);

function getBiggest($a, $b) {
    if ($a > $b) {
        return "\$var1($a) > \$var2($b)";
    }elseif ($a == $b) {
        return "\$var1($a) = \$var2($b)";
    }else {
        return "\$var1($a) < \$var2($b)";
    }
}

echo getBiggest($var1, $var2) . '<hr>';

// Определенный тип данных внутри функции
echo '<h4>Определенный тип данных внутри функции</h4>';

function getNumber(int $a) {
    return $a + 2.4;
}

// echo getNumber('Hi'); // Ошибка
echo getNumber('1'); // Конвертация в int = 1
echo getNumber(5.01); // Конвертация в int = 5
echo '<hr>';

// Задание 1
echo '<h4>Задание 1</h4>';
echo '<p>Создайте 4 функции, которые будут делать и возвращать значение</p>';

function fourOper(int $a, int $b, string $sym) {
    if ($sym == '+') { // Сложение
        return $a+$b;
    }elseif ($sym == '-') { // Вычитание
        return $a-$b;
    }elseif ($sym == '*') { // Умножение
        return $a*$b;
    }elseif ($sym == '/') { // Деление
        return round($a/$b);
    }else { // Другой символ
        return 'Неверная операция<br>';
    }
}

$num1 = rand(1, 10);
$num2 = rand(1, 10);
echo "\$num1 = $num1 <br> \$num2 = $num2<br>";

echo 'Сумма: ' . fourOper($num1, $num2, '+') . '<br>';
echo 'Разность: ' . fourOper($num1, $num2, '-') . '<br>';
echo 'Произведение: ' . fourOper($num1, $num2, '*') . '<br>';
echo 'Частное: ' . fourOper($num1, $num2, '/') . '<br>';
echo 'Сумма: ' . fourOper($num1, $num2, 'sum') . '<hr>';

// Задание 2
echo '<h4>Задание 2</h4>';
echo '<p>Создайте функцию, которая принимает одно целое число, а внутри производит следующие операции
        <ul>
            <li>к выбранному число добавляем точно такое же</li>
            <li>то что получилось умножаем на 2</li>
            <li>и то что вышло делим на 4</li>
            <li>результат выводим через return</li>
        </ul>
    </p>';

function exTwo($num) {
    return ($num+$num)*2/4;
}

echo exTwo(12);
echo '<hr>';

// Задание 3
echo '<h4>Задание 3</h4>';
echo '<p>Создайте функцию с одним параметром, который обозначает имя пользователя (строка)
        <ul> Внутри функции проверьте текущее время
            <li>22:00 - 06:00 - доброй ночи</li>
            <li>07:00 - 16:00 - добрый день</li>
            <li>17:00 - 21:00 - добрый вечер</li>
            <li>результат выводим через return</li>
            добавьте к имени приветствие исходя из времени
        </ul>
    </p><hr>';

function timeName($name) {
    $time = intval(date('G'));
    if ($time>=22 || $time<=6) {
        return "Доброй ночи, $name.<br>";
    }elseif($time>=7 && $time<=16) {
        return "Добрый день, $name.<br>";
    }else {
        return "Добрый вечер, $name.<br>";
    }
}

echo timeName('Alexey');
echo timeName('Anna');
echo timeName('Lisa');
echo timeName('Oleg');
