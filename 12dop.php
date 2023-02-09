<!-- Задачи на if, else, elseif. switch() case. -->

<title>Обучение PHP</title>
<h4>Задачи на if, else, elseif. switch() case.</h4>
<?php

echo "Если переменная \$a равна 10, то выведите 'Верно', иначе выведите 'Неверно'. <br>";

$a = mt_rand(8, 10);
echo "\$a = $a<br>";
($a == 10) ? print 'Верно<br>' : print 'Неверно<br>'; // echo работать не будет, так как выражение

echo '<hr>';
echo "В переменной \$min лежит число от 0 до 59. 
      Определите в какую четверть часа попадает это число 
      (в первую, вторую, третью или четвертую).<br>";

// switch сравнивает 1 переменную, а case выполняет инструкцию, если true

$min = mt_rand(0, 59);
echo "\$min = $min<br>";

if ($min<15 && $min>=0) {
    echo 'В первой четверти часа<br>';
}elseif ($min<30 && $min>=15) {
    echo 'Во второй четверти часа<br>';
}elseif ($min<45 && $min>=30) {
    echo 'В третьей четверти часа<br>';
}else {
    echo 'В четвертой четверти часа<br>';
}

echo '<hr>';
echo "Переменная \$lang может принимать два значения: 'ru' и 'eng'. 
    Если она имеет значение 'ru', то в переменную \$arr запишем массив 
    дней недели на русском языке, а если имеет значение 'en' – то на английском. 
    Решите задачу через 2 if, через switch-case и через многомерный массив без ифов и switch.<br>";

$lang = 'ru';
echo "\$lang = $lang<br>";

if ($lang == 'ru') {
    $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница','Суббота', 'Воскресенье'];
    foreach ($arr as $r) { // Работает как for в python
        echo $r . '<br>';
    }
}
if ($lang == 'eng') {
    $arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'];
    foreach ($arr as $r) { // Работает как for в python
        echo $r . '<br>';
    }
}

echo '<hr>';

$lang = 'eng';
echo "\$lang = $lang<br>";
switch ($lang){
    case 'ru':
        $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница','Суббота', 'Воскресенье'];
        foreach ($arr as $r) { // Работает как for в python
        echo $r . '<br>';
    }
    case 'eng':
        $arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'];
        foreach ($arr as $r) { // Работает как for в python
        echo $r . '<br>';
    }
}

echo '<hr>';

$lang = 'ru';
echo "\$lang = $lang<br>";
$arr = [
	'ru'=>['пн', 'вт', 'ср','чт', 'пт', 'сб', 'вс'],
	'eng'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
var_dump($arr[$lang]);

echo '<hr>';

$lang = 'eng';
echo "\$lang = $lang<br>";
$arr = [
	'ru'=>['пн', 'вт', 'ср','чт', 'пт', 'сб', 'вс'],
	'eng'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
var_dump($arr[$lang]);

echo '<hr>';
