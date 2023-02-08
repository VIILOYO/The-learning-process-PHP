<!-- Пути до файла. Константы класса -->
<title>Обучение PHP 8</title>

<?php
echo '<h4>Пути до файла</h4>';

echo 'Это основной файл';
echo '<hr><br>';

// Абсолютный путь - путь, который ведет к файлу
require_once 'F:\php\OSPanel\domains\test.loc\02\The-learning-process-PHP\dop8\8dop.php';

// Абсолютный путь через __DIR__
echo '<br>';
require_once __DIR__ . '\dop8\8dop1.php';

// Относительный путь - путь относильно файла
echo '<br>';
require_once 'dop8\8dop2.php';

// Константы класса
echo '<h4>Константы класса</h4>';

class ConstantClassa {
    const NAME = 'const'; // константа объявляется словом const
}

echo ConstantClassa::NAME; // Обращение к константам класса идет через 2 двоеточия
echo defined('NAME'); // Проверка выдаст 0, так как это константа внутри класса
echo '<br>' . defined('ConstantClassa::NAME'); // Проверка выдаст 1

echo '<br>' . mt_rand(0, $number) . '<br> Число из доп. файла - ' . $number;
