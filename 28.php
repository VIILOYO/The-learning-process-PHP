<!-- Функции для работы с символами -->
<title>Обучение PHP 28</title>

<?php
// Количество символов в строке
echo '<h4>Количество символов в строке</h4>';

$str = 'Hello, people!';
echo "$str<br>";
echo 'Количество символов в строке $str - ' . strlen($str) . '<hr>';

// Обрез строки
echo '<h4>Обрез строки</h4>';

$str1 = 'Some people';
echo "$str1<br>";
echo substr($str1, 5) . '<br>'; // Отрезание строки начиная с 1
echo substr($str1, 5, 2) . '<hr>'; // 3 аргумент - количество возвращаемых символов

// Поиск внутри строки
echo '<h4>Поиск внутри строки</h4>';

$str2 = 'Hello, need help?';
echo "$str2<br>";
echo strpos($str2, 'help') . '<br>'; // Возвращает порядковое значение символа (начиная с 0)
echo strpos($str2, 'e') . '<br>'; // Находит перевое совпадение
echo strpos($str2, 'P') . '<br>'; // Регистрозависимая функция

$text = file('28.txt');
echo substr($text[2], strpos($text[2], '|')+1) . '<hr>';; // Пример использования

// Замена текста в строке
echo '<h4>Замена текста в строке</h4>';

$str3 = 'PHP - довольно интересный язык программирования';
// Заменяет ВСЕ совпадения

$textNew = str_replace('-', '=', $str3); // 1 аргумент - что заменить, 2 - на что, 3 - где
echo "$textNew<hr>";

// Удаление ненужных пробелов и переносов из начала и конца строки
echo '<h4>Удаление ненужных пробелов и переносов</h4>';

$badStr = '   Начало с пробелами и ещё пробелы !!!             ';
echo $badStr . '<br>'; // Видно в коде

$goodStr = trim($badStr);
echo $goodStr . '<hr>'; // Видно в коде

// Объединение элементов массива в строку
echo '<h4>Объединение элементов массива в строку</h4>';

$arr = ['Hello ', ' World', '!!!', 'PHP', 'text'];

echo implode($arr); // Объединяет массив

$arrExtra = [
    'words' => 'Hello',
    'number' => 124,
    'bool' => true, 
    'array' => [1, 5, 'test'] // Вернет просто словов array   
];

$strArr = implode(',', $arrExtra); // Первый аргумент - чем разделяются элементы массива
echo $strArr . '<hr>';

// Замена символов с отсутствием регистрозависимости
echo '<h4>Замена символов с отсутствием регистрозависимости</h4>';

$text = 'В ч+стности, соци+льно-экономическое р+звитие обеспечив+ет 
широкому кругу (специ+листов) уч+стие в формиров+нии экономической 
целесообр+зности приним+емых решений.';

$strPlus = str_ireplace('+', 'а', $text);
echo $strPlus . '<hr>';

// Разбивание строки в массив
echo '<h4>Разбивание строки в массив</h4>';

$str = 'Алексей/Андрей/Антон/Матвей/Аркадий/Василий/Олег';
$array = explode('/', $str);
echo '<pre>'; print_r($array); echo '</pre><hr>';

$str = 'Алексей Андрей Антон Матвей Аркадий Это всё имена';
$array = explode(' ', $str, 6); // Последний аргумент - лимит элементов массива
echo '<pre>'; print_r($array); echo '</pre>';

// Преобразование HTML в символы
echo '<h4>Преобразование HTML в символы</h4>';

$virus = '<h3>Я злой вирус</h3>';

$not_a_virus = htmlentities($virus); // Преобразует html в символы
echo $not_a_virus;
$not_a_virus_2 = html_entity_decode($not_a_virus); // Преобразует символы в html
echo $not_a_virus_2 . '<hr>';

// Преобразование первого символа строки в нижний регистр
echo '<h4>Преобразование первого символа строки в нижний регистр</h4>';
// Не работает с русской раскладкой 
$str1 = 'HELLO';
echo "$str1<br>";
$str2 = lcfirst($str1);
echo "$str2<hr>";
