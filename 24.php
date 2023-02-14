<!-- Рекурсивные функции -->
<title>Обучение PHP 24</title>

<?php
// Рекурсивные функции
echo '<h4>Рекурсивные функции</h4>';
// Функция вызывает сама себя

function recursionFunct($num) {
    // Если параметр $num меньше или равен 10, продолжаем рекурсию
    if ($num<=10) {
        echo $num++ . '<br>'; // Постфиксный инкремент
        // Рекурсивный вызов функции
        recursionFunct($num);
    }else {
        return $num;
    }
}

$number = mt_rand(0,9);
echo "\$number = $number<br>";
recursionFunct($number); // Возвращает числа от $number до 10
echo '<hr>';

// Факториал с рекурсивной функцией
echo '<h4>Факториал с рекурсивной функцией</h4>';

function factorial($number) {
    if ($number<=1) return 1; // Выход из рекурсии
    return $number*factorial($number-1);
}

$number = mt_rand(1,20);
echo "\$number = $number<br>";
echo factorial($number) . '<hr>';

// Функция факториала без рекурсии
function factorial1($number) {
    $result = 1;
    for ($i=2; $i <= $number; $i++) { 
        $result *= $i; // 1*2*3*4*...*number;
    }
    return $result;
}

$number = mt_rand(1,20);
echo "\$number = $number<br>";
echo factorial1($number) . '<hr>';

// Задание 1
echo '<h4>Задание 1</h4>';
echo '<p>Написать рекурсию по примеру занятия, где<br>
        1. Принимаем число, как параметр<br>
        2. если оно больше 100 отнимаем каждый раз 5 и выводим через echo<br>
        3. Запустить и проверить на правильность</p><hr>';

function minusFive($num) {
    if ($num>100) {
        $num -= 5;
        echo $num . '<br>';
        minusFive($num);
    }
}

minusFive(mt_rand(150,200));
echo '<hr>';

// Задание 2
echo '<h4>Задание 2</h4>';
echo '<p>Создайте многомерный массив или используйте с прошлых занятий готовый<br>
    Напишите рекурсивную функцию обхода этого массива с выводом его элементов</p><hr>';

$people = [ // Многомерный массив
    'Ivan' => ['age' => 21, 'weight' => 72], // Ассоциативный массив внутри массива
    'Andrey' => ['age' => 25, 'weight' => 84], // Ассоциативный массив внутри массива
    'Lisa' => ['age' => 20, 'weight' => 54] // Ассоциативный массив внутри массива
];

function elements($array) {
    foreach($array as $key => $value) {
        if (gettype($value) == 'array') {
            echo '<br>' . $key . ':<br>';
            elements($value);
        }else {
            echo "$key -  $value <br>";
        }
    }
}

elements($people);
echo '<hr>';

$people = [ // Многомерный массив (тройная вложенность)
    'Ivan' => [
        'age' => 21, 
        'weight' => 72,
        'friends' => ['Mike', 'Kate', 'Andrey']
        ],
    'Andrey' => [
        'age' => 25,
        'weight' => 84,
        'friends' => ['Alisa', 'Sveta', 'Vova']
        ],
    'Lisa' => [
        'age' => 20, 
        'weight' => 54,
        'friends' => ['Katya', 'Lesha', 'Lisa']
        ]
    ];

elements($people);
echo '<hr>';
