<!--JSON-формат-->
<title>Обучение PHP 31</title>

<?php
// JSON-формат
echo '<h4>JSON-формат</h4>';

$arr = [
    'fio' => 'Алексей Бабенко',
    'age' => 22,
    'vk_url' => 'https://vk.com/viiiloyo',
    'learn' => ['HTML', 'CSS', 'PHP'],
];

// json кодирование массива
echo json_encode($arr, JSON_UNESCAPED_UNICODE) . '<br>';
// JSON_UNESCAPED_UNICODE - позволяет использовать русский текст

$json = '{"people":"Сидиров Никита","adress":"Ленина 23б","mob":["9025286382", "9582572581"]}';
$arr = json_decode($json, true);
// true при работе с ассоциативными массивами

echo '<pre>'; print_r($arr); echo '</pre><hr>';