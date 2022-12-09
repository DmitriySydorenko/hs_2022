<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
$arrLenght = count($arr);
print_r ($arrLenght);

echo "\n";

//переместить первые 4 элемента массива в конец массива

$arrSlice = array_slice($arr,0,4); // cкопировали первые 4 элементы массива из оригинала и добавили в новыый массив
$arrSum = array_merge($arr, $arrSlice); // обьеденили два массива в одной новой переменной
$arrNew = array_slice($arrSum,4,9); // cкопировали  из $arrSum массив, вырезали лишние элементы

print_r($arrNew); 

echo "\n";

//получить сумму 4,5,6 элемента

$arrAmount = array_slice($arr,3,3); //сделали новый мвссив в котором оставили только нужные элементы с оригинала
$arrAmount = array_sum($arrAmount); // сумма элементов нового массива
print_r($arrAmount); 

echo "\n";


$firstArr = [

    'one' => 1,
  
    'two' => 2,
  
    'three' => 3,
  
    'foure' => 5,
  
    'five' => 12,
  
  ];
  
  
  
  $secondArr = [
  
    'one' => 1,
  
    'seven' => 22,
  
    'three' => 32,
  
    'foure' => 5,
  
    'five' => 13,
  
    'six' => 37,
  
  ];
  
  
// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
  
  $arrDifferentFirst = array_diff_key ($secondArr, $firstArr); // cравнили ключи и вернули разницу, исходный массив - второй
  print_r($arrDifferentFirst); 
  
  echo "\n";
  
// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
  
  $arrDifferentSecond = array_diff_key ($firstArr, $secondArr); // cравнили ключи и вернули разницу, исходный массив - первый
  print_r($arrDifferentSecond); 
  echo "\n";
  
// найти все элементы значения которых совпадают 
  
  $arrSame = array_intersect ($firstArr,$secondArr); // вычисляем схождение массивов
  print_r($arrSame); 
  echo "\n";
  
// найти все элементы значения которых отличается

  $arrDistinctions = array_diff($firstArr,$secondArr); // сравнили массивы и вернули различия
  print_r($arrDistinctions); 
  echo "\n";


  $firstArr = [

    'one' => 1,
  
    'two' => [
  
      'one' => 1,
  
    'seven' => 22,
  
    'three' => 32,
  
    ],
  
    'three' => [
  
  'one' => 1,
  
  'two' => 2,
  
    ],
  
    'foure' => 5,
  
    'five' => [
  
     'three' => 32,
  
     'foure' => 5,
  
     'five' => 12,
  
  ],  
  
  ];
  
 // получить все вторые элементы вложенных массивов
  
  foreach ($firstArr as $value) { // перебор массива
      if (is_array ($value)){ // is_array определил является ли переменная массивом. при true добавляем новое условие
          $keys = array_keys ($value); // определяем ключи 
      //	print_r($keys); для себя, чтобы убедиться
          if (isset ($keys[1])){ // массив начинается с 0, значит 1 - это второй элемент вложенного массива
              print_r($value[$keys[1]]); //выводим второй элемент вложенного массива
              echo "\n";
          }
      }
      }
      
 // получить общее количество элементов в массиве
      
  $arrElements = count($firstArr,1); // подсчет элементов многомерного массива
      print_r($arrElements);
              echo "\n";

//получить сумму всех значений в массиве
        

     $arrayAmount = array_sum($firstArr); // cумма первого уровня = 6
		echo "\n";

 
    foreach ($firstArr as $value) { // перебор массива
	if(is_array ($value)) { // второй уровень вложенности (массив в массиве)
		$arrayAmount = array_sum($value); // суммировать
		
	}
}
  
?>