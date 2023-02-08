<!-- Эксперименты -->
<?php

class Number {
    public $number;
    function get_even_or_odd($num){
        if (gettype($num) == 'integer'){ // Проверка работает только если тип переменной - int
            if ($num % 2) {
                echo "<br> Число $num - нечетное <br>"; // Нечетность
            }
        
            else {
                echo "<br> Число $num - четное <br>"; // Четность
            }
        }
        else {
            echo '<br> Переменная $number не является челочисленной переменной <br>'; // Переменная другого типа
        }
    }

    function get_str($num){
        if(gettype($num) == 'string'){
            echo "<br>'$num' уже строка"; // Если переменная уже строка, перевод не происходит
        }
        else {
            $this->number = strval($num); // Перевод в str тип
            echo "<br> Теперь $num - строка";
        }
    }
    function get_degree($num, $degree){
        if ((gettype($num) == 'integer' || gettype($num) == 'double') 
        && (gettype($degree) == 'integer' || gettype($degree) == 'double'))
        {
            echo "<br>$num в степени $degree = " . $num ** $degree;
        }
        else{
            echo '<br>Одна или несколько переменных не числового типа';
        }
    }

}

$number1 = new Number();
$number1->number = 'Строка для проверки';
$number1->get_even_or_odd($number1->number);
$number1->number = 2.1;
$number1->get_even_or_odd($number1->number);
$number1->number = 2;
$number1->get_even_or_odd($number1->number);
$number1->number = 5;
$number1->get_even_or_odd($number1->number);

$number1->get_str($number1->number);
echo '<br>' . gettype($number1->number);

$number1->number = true;
$number1->get_str($number1->number);
echo '<br>' . gettype($number1->number);

$number1->number = 'Строка для проверки';
$number1->get_str($number1->number);
echo '<br>' . gettype($number1->number);

$number2 = new Number();
$number2->number = 12;
$number1->get_degree($number1->number, 5);
$number2->get_degree($number2->number, 5);
?>
