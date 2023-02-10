<!-- Логические операторы || и &&, or и and. Функция file_get(put)_content(). -->
<title>Обучение PHP 13</title>

<?php
// Логические операторы || и &&, or и and
echo '<h4>Логические операторы || и &&, or и and</h4>';

/*
    Логические операторы:
    || - или. Возвращает true, если хотя бы один из операндов true;
    && - и. Возвращает true, если оба операнда true;
    or - или с меньшим приоритетом;
    and - и с меньшим приоритетом.
*/

$num1 = '2';
$num2 = 0.2e1;
$num3 = 3;

if ($num1==$num2 && $num3===5) { // Если оба операнда вернут true
    echo 'Переменные равны, а $num3 = 5<br>';
}elseif ($num1 == 2 || $num2 === '2') { // Если один из операндов вернёт true
    echo 'Переменная $num1 = 2 или $num2 = 2<br>';
}
echo '<hr>';

$flag1 = true;
$flag2 = true;

if ($flag1 && $flag2) { // Если оба операнда равны true
    echo "\$flag1 = $flag1; \$flag2 = $flag2 <br>";
    echo '$flag1 и $flag2 = TRUE<hr>';
}

$flag1 = false;
$flag2 = true;
echo "\$flag1 = $flag1; \$flag2 = $flag2 <br>";

if ($flag1 && $flag2) { // Если оба операнда равны true
    echo '$flag1 и $flag2 = TRUE<hr>';
}elseif ($flag1 || $flag2) { // Если хотя бы один из операндов равнен true
    echo '$flag1 или $flag2 = TRUE<hr>';
}else { // Если оба операнда равны false
    echo '$flag1 и $flag2 = false<hr>';
}

$str1 = 'Привет!';
$str2 = 'Hi!';
echo "\$str1 = $str1; \$str2 = $str2 <br>";

if ($str1 == 'Hi!' and $str2 =='Hi!') { // Менее приоритетный аналог &&
    echo 'Какой-то текст в if<hr>';
}elseif($str1 == 'Привет!' or $str2 == 'Привет!') { // Менее приоритетный аналог ||
    echo 'Одна или обе переменных равны "Привет!"<hr>';
}else {
    echo 'Какой-то текст в else<hr>';
}

// Функция file_get_content()
echo '<h4>Функция file_get_content()</h4>';
// Читает содержимое файла в строку
// $content = file_get_contents("13dop/13dop.txt") // Путь до файла относительно этого файла

($content = file_get_contents("13dop/13dop.txt")) || exit('Не удалось найти файл<hr>');
// exit - вывоидт сообщение и прекращает выполнение текущего скрипта
echo $content; // Выводит текст из txt файла // Внутри txt работаю html теги

// Другой вариант

if (file_get_contents("131dop/13dop.txt")) {
    $content = file_get_contents("13d1op/13dop.txt");
    echo 'Файл успешно найден и сохранен в переменную $content<hr>';
}else {
    echo 'Файл не найден<hr>';
}

// Условный оператор (?)
echo '<h4>Условный оператор (?)</h4>';
// Тернарный оператор!
/* 
    Синтаксис  
    x ? y:z; 
    x - условие
    y - инструкция при true
    z - инструкция при false
*/

$number = mt_rand(11,12);
echo '$number = ' . $number . '<br>';
$number == 12 ? print('Верно<hr>') : print('Неверно<hr>'); // echo работать не будет

// Функция file_put_content()
echo '<h4>Функция file_put_content()</h4>';
// Записывает текст в файл

$file = '13dop/13dop2.txt'; // Путь до файла (если его нет, то создаст)
$current = file_get_contents($file); // Копируем содержимое файла в переменную
$current .= "\n" .'Ещё какой-то текст<br>'; // Добавляет текст к переменной
file_put_contents($file, $current); // $file - куда; $current - что.
echo '<hr>';

echo '<p> 
    Напишите скрипт, который при вызове создает в текущем каталоге файл с именем, отражающем текущие дату <br>
    и время в формате "год-месяц-число-час минута-секунда", например 2017-04-16-13-10-13.txt. В файл запишите случайное <br>
    число от О до максимально возможного целого числа в РНР.  
<p>';

$date = __DIR__ . '/13dop/' . date("Y-m-j-g-i-s") . '.txt'; // Время формата "год-месяц-число-час минута-секунда"
echo $date;
$content = mt_rand(); // Контент 
file_put_contents($date, $content); // Создание файла и добавление контанта
echo '<hr>';

echo '<p>Задание 2<p>';

$a = mt_rand(0,10);
$b = mt_rand(0,10);
$c = mt_rand(0,10);
echo "$a $b $c <br>";

// Используя только if без логических операторов 
if ($a > $b) {
    if ($a > $c) {
        echo "$a - наибольшее число<br>";
    }else {
        echo "$c - наибольшее число<br>";
    }
}else {
    if ($b > $c) {
        echo "$b - наибольшее число<br>";
    }else {
        echo "$c - наибольшее число<br>";
    }
}

// Используя логические операторы
if ($a > $b && $a > $c)  {
    echo "$a - наибольшее число<br>";
}elseif ($a < $b && $b > $c) {
    echo "$b - наибольшее число<br>";
}else {
    echo "$c - наибольшее число<br>";
}
