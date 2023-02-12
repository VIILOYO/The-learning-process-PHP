<!-- Функция list(). Обход массива циклами -->
<title>Обучение PHP 19</title>

<?php
// Функция list()
echo '<h4>Функция list()</h4>';

$arr = [1, 2, 3]; // Создание массива

// Функция list раскладывает элементы массива по переменным
// Количество переменных = количеству элементов массива
list($var1, $var2, $var3) = $arr; // Разложение массива по переменным

echo '<pre>'; print_r($arr); echo '</pre>'; // Массив остаётся прежним
echo "\$var1 = $var1<br>\$var2 = $var2<br>\$var3 = $var3<br>"; // Вывод переменных

// Обход массива циклами
echo '<h4>Обход массива циклами</h4>';

for ($i=0; $i<count($arr); $i++) { // Проход по каждому элементу массива
    $arr[$i] += 1;
}
echo '<pre>'; print_r($arr); echo '</pre><hr>';

// Обход ассоциативного массива

$arr1 = [
    'ru' => 'Russian',
    'en' => 'English',
    'fr' => 'France'
];

/*
    Ситаксис foreach
    foreach ($массив как (as) $ключ(необязательно) => $значение) {
        действие;
    }
*/

foreach ($arr1 as $key => $value) { 
    echo $key . ' - ' . $value . '<br>';
    $arr1[$key] .= $value; // Изменение элемента массива (дублирование)
}
echo '<pre>'; print_r($arr1); echo '</pre><hr>';

foreach($arr1 as $val) {
    echo "$val - значеие<br>";
}
echo '<hr>';

echo '<h4>Задание</h4>';
echo '<p>Попробуйте поработать с многомерным массивом при помощи foreach</p>';

$people = [ // Многомерный массив
    'Ivan' => ['age' => 21, 'weight' => 72],
    'Andrey' => ['age' => 25, 'weight' => 84],
    'Lisa' => ['age' => 20, 'weight' => 54]
];

foreach ($people as $key => $val) {
    echo $key . ' - ключ<br>'; // Попытка получить значение выдает ошибку
}

echo '<hr>';

// Обход многомерного массива через два foreach
foreach ($people as $key => $val) {
    echo $key . ':<br>';
    foreach ($val as $k => $v) {
        echo "$k -  $v <br>";
    }
    echo '<br>';
}
echo '<hr>';
