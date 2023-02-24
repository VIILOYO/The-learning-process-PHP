<!--GET параметры в PHP-->
<title>Обучение PHP 32</title>

<?php
// GET параметры в PHP
echo '<h4>GET параметры в PHP</h4>';

// _GET - супер глобальный массив
echo $_GET['name'] . '<br>'; // В адресной строке можно написать ?name=Alexey
echo $_GET['age'] . '<br>'; // В адресной строке можно написать ?name=Alexey&age=22

echo '<pre>'; print_r($_GET); echo '</pre>'; // Ключь => значение

// Можно использовать вложенный массив &id[]=1&id[]=2&id[]=3

// Преобразования в безопастный вид
// В просмотре кода ссылка закодировалась
echo '<a href="32dop.php?text=' . urlencode('Привет php!') . "\">Ссылка</a>"; 

$url = "https://user:admin@site.come/page/index.php?id=12&value=val#author";

echo '<pre>'; print_r(parse_url($url)); echo '</pre>'; // Возвращает данные о url

echo parse_url($url)['host'] . '<hr>'; // Можно обратиться к ключу 

/*
    scheme - префикс, http, https, ftp...
    host - домен
    port - номер порта
    user - пользователь
    pass - его пароль
    path - путь до корневого каталога
    query - все get параметры
    fragment - после решетки #
*/

// Задание
echo '<h4>Задание</h4>';

$userArray = ['VIILOYO', 'Hacker', 'Алексей', 'Alexey', '123'];
$user = $userArray[mt_rand(0, 4)];

$passArray = ['qwerty', '1234567890', 'Alexey123', 'Kapibara2023'];
$pass = $passArray[mt_rand(0, 3)];

$time = time();

$url = '<a href="32dop.php?login=' . urlencode($user) . '&pass=' 
                                . urlencode($pass) . '&time=' 
                                . urlencode($time) . '">Ссылка на задание</a>';

echo $url;