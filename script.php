<?php

// Создать функцию принимающую массив произвольной вложенности
// и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

function arrayValue(array $array, $x){
return $array[$x];
}

// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function bLetterAmount (string $sentence): int
{
    return substr_count($sentence, 'b');
}

// Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function array_total (array $arr):float
{
$amount = array_sum($arr);
foreach ($arr as $elem) {
    $amount += is_array($elem) ? array_total($elem) : 0;
}
return $amount;
}

// Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

function squareMinAmount(int $big, int $small): float
{ 
    return $big /$small;
 }

?>
