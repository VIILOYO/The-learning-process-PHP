<!-- Конструкция isset() и empty(). gettype() -->
<title>Обучение PHP 4</title>
<?php
echo '<h4>isset() - проверка наличия переменной</h4>';

$str = '123';
echo isset($str), '<br>'; // Проверяет установлина ли переменная (отлична от NULL)
unset($str); // удаление переменной
echo isset($str),'false'; // Возвращает FALSE так как переменная была удалена

echo '<h4>empty() - проверка отстутствия переменной</h4>';
echo empty($str),'<br>'; // Возвращает true так как переменная не инициализирована
$str = 'Какой-то текст'; 
echo empty($str),'false'; // Возвращает FALSE так как переменная была инициализирована

// isset можен проверять несколько переменных
echo '<h4>Несколько переменных в isset()</h4>';

$num = 912;
$num2 = 2.2e2;
$status = isset($num, $num2); // Возвращает true если все переменные инициализированы
echo $status,'<br>';
unset($num);
$status2 = isset($num, $num2); // Возвращаеит false так как одна переменная не инициализирована
echo $status2, 'false<br>'; 
unset($num2);
$status3 = isset($num, $num2); // Возвращает false так как обе переменные не инициализированы
echo $status3, 'false<br>';
// empty проверяет только 1 переменную!

echo '<h4>Подробнее про empty()</h4>';

$str_empty = ''; // Пустая строка
$num0 = 0; // Переменная со значением 0
$var_null = NULL; // Переменная со значение NULL
$var_false = FALSE; // Переменная со значением FALSE
echo empty($str_empty),'<br>'; // Вернет True так как пустая строка проверяется empty()
echo isset($str_empty),'<br>'; // Вернет True так как переменная имеет значение
echo empty($num0),'<br>'; // Вернет True так как 0 проверяется empty()
echo isset($num0),'<br>'; // Вернет True так как переменная имеет значение
echo empty($var_null),'<br>'; // Вернет True так как 0 проверяется empty()
echo isset($var_null),'<br>'; // Вернет False так как переменная не имеет значение (NULL)
echo empty($var_false),'<br>'; // Вернет True так как 0 проверяется empty()
echo isset($var_false); // Вернет True так как переменная имеет значение

echo '<h4>gettype() - проверка типа переменной</h4>';

echo gettype($str_empty),'<br>'; // Пустая строка тоже является строкой
echo gettype($num0),'<br>';  // 0 является целочисленным значением
$num_float = 6.0;
echo gettype($num_float),'<br>';  // Если стоит какое-либо число после точки - double (float)
echo gettype($var_null),'<br>';  // NULL - тип данных NULL
echo gettype($num2),'<br>';  // Если переменная удалена выдает ошибку
echo gettype($var_false),'<br>';  // True и False - boolean тип данных
echo gettype(15==(3+4+5+6-3)),'<br>';  // Если выражение возвращает True или False - boolean

echo '<h4>is_тип-данных() - проверка на определенный тип данных</h4>';

echo is_integer($num0),'<br>'; // Возвращает True так как 0 - число
echo is_int($num0),'<br>'; // is_int и is_integer - офдинаковая проверка
echo is_float($num0),'<br>'; // Возвращает false так как 0 - не дробное число
echo is_double($num_float),'<br>'; // is_double и is_float - одинаковы
echo is_bool($var_false); // Возвращает 1 так как boolean
