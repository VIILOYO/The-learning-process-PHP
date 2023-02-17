<!-- Работа с НТМL-кодом в PHP -->
<title>Обучение PHP 29</title>

<?php
// Работа с НТМL-кодом в PHP
echo '<h4>Работа с НТМL-кодом в PHP</h4>';

$str = '<p>Строка, которая содержит <strong>HTML</strong> теги.</p>';
// <p></p> - параграф
// <strong></strong> - жирный шрифт

echo $str;
?>

<h3><?php echo $str . '<hr>';?></h3>

<?php 
// Обрезание специальных символов
echo '<h4>Обрезание специальных символов</h4>';
// htmlspecialchars

$str1 = '<h1>Hello</h1>';
echo htmlspecialchars($str1) . '<br>'; // Выводит теги как обычный текст

echo 'Сообщение из файла 29.html - ' . $_POST['msg'] . '<hr>';
// Во избежание вредоносности кода
echo 'Сообщение из файла 29.html - ' . htmlspecialchars($_POST['msg']) . '<hr>';

// Задание
echo '<h4>Задание</h4>';

$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['pass']);
$message = htmlspecialchars($_POST['msg']);
$time = date('d.m');

echo "Привет, $name, сегодня $time<br>Твой пароль - $password<br>А текст -$message";
