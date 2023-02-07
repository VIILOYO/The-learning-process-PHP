<!-- Углубление в типы данных -->
<title>Обучение PHP 3.1</title>
<?php
ini_set('error_reporting', E_ALL); // Вывод всех ошибок
// Целые числа (integer)
echo '<h4>Целые числа:</h4>';
$number = 124; // Целое число
echo $number;
$number = +143; // Положительное целое число (=143)
echo '<br>',$number;
$number = -342; // Отрицательное целое число
echo '<br>',$number;
$number = 0777; // Восьмиричное число (начинается с 0)
echo '<br>',$number;
$number = 0x1A; // Шестнадцатиричное число (имеет буквы)
echo '<br>',$number;
// Выводится всегда число в 10-ричной системе
?>

<?php
// Вещественные числа (float)
echo '<h4>Вещественные числа:</h4>';
$var = 1.123; // Дробное число
echo $var,'<br>';
$var = 1.2e3; // Дробное число на 10 в степени (после e)
echo $var,'<br>';
$var = 1.2e-3; // Дробное число на 10 в степени (после e)
echo $var,'<br>';
$var = 215_12.1233;
echo $var,'<br>';
?>

<?php
// Логический тип данных (boolean). Либо польностью заглавными, либо полностью строчными.
echo '<h4>Логический тип данных:</h4>';
$bool = TRUE; // Верное значение
echo $bool,' TRUE','<br>'; // Возвращает 1
$bool = false; // Неверное значение
echo $bool,'FALSE','<br>'; // Не возвращает ничего
$bool = (1==1); // TRUE
echo $bool,' TRUE','<br>'; // Возвращает 1
echo 12==6+6/1,' TRUE','<br>'; // Возвращает 1
echo (2+2+2!=2*3),'FALSE'; // Неверно. Возвращает
?>

<?php
// Строчный тип
echo '<h4>Строчный тип данных:</h4>';
$str = "Hello, world!"; // В двойных кавычках
$str1 = 'Привет, мир'; // В одинарных кавычках
echo "$str",'  $str','<br>'; // Переменные обязательно записываются в ДВОЙНЫХ кавычках
echo $str1,'<br>'; // Или вообще без кавычек

// Для вывода названия переменной вместо её значения в двойных кавычках используется экранирование ('\')
echo "Название переменной - \$str",'<br>';
// Экранирование используется для вывода кавычек внутри кавычек
echo 'Тут будет текст в кавычках \'вот и этот текст\'','<br>';
// Двойные кавычки внутри одинарных (или наоборот) не нужно экранировать
echo '"Текст в двойных кавычках"','<br>', "'Текст в одинарных кавычках'",'<br>';
?>

<?php
// Неинициализированная переменная 
echo '<h4>Неинициализированная переменная:</h4>';
$some; // Notice она пустая
echo $some; // Ошибка
$some = 1.1e2; // Переменная перестает быть неинициализированной
echo $some; // Выводит значение переменной
?>

<?php
// Тип данных NULL
echo '<h4>Тип данных NULL:</h4>';

$var2 = null; // Переменные с типом null -
$var3 = NULL; // - Пустая переменная
echo $var2,$var3; // Ничего не выводится

$for_delete = 'Меня удалят';
echo $for_delete;
unset($for_delete); // Удаление переменной
echo $for_delete; // Выводит ошибку
$for_delete1 = 'Меня удалят1';
$for_delete2 = 'Меня удалят2';
unset($for_delete1, $for_delete2); // Удалять можно несколько переменных через запятую
