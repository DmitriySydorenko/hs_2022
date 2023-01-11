<?php

include '../vendor/autoload.php';


// есть три способа:
// 1) Использовать Use и далее путь от локации, заданной в composer.json; В данном случае использовал его.
// 2) Использовать Namespace и заданное имя. В данном случае работать будет, но если подключены разные composer, то могут быть проблемы из-за дублей имён.
// 3) Прямо при обьявлении переменной, к примеру $test = new Core\first();

use Core\first;
use Core\test1;
use Core\test2;
use Core\test3;
use Core\example1;
use Core\example2;
use Core\ref1;
use Core\ref2;

// Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень

$test = new first();
$test -> setSize(100);
$test -> setWeight(150);

var_dump($test->getSize());
echo "<br>";
var_dump($test->getWeight());
echo "<br>";
var_dump($test->f(3,2));
echo "<br>";
echo "<br>";

// Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым


// подключение подклассов
$testSecond = new test1(); 
$testThird = new test2();
$testFourth = new test3();

$testSecond -> setVol(80); // задаем значение Vol
var_dump($testSecond->getVol()); // получаем его для проверки
$testSecond -> setSize(10); // задаем значение Size
var_dump($testSecond->getSize()); // получаем значение Size для которого подготовили функцию с математическим вычислением

echo "<br>";

$testThird ->setTer(5);
var_dump($testThird->getTer());
$testThird -> setWeight(10);
var_dump($testThird->getWeight());

echo "<br>";

$testFourth ->setPlug(50);
var_dump($testFourth->getPlug());
$testFourth -> setSize(70);
var_dump($testFourth->getSize());

echo "<br>";
echo "<br>";

// Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством


$testFifth = new example1(); 
$testSixth = new example2();
$testSeventh = new ref1();
$testEighth = new ref2();


$testFifth -> setKedavra(4);
$testFifth -> setSize(10);
$testFifth -> setVol(16);

var_dump($testFifth ->getVol()); 
var_dump($testFifth ->getSize()); 

echo "<br>";

$testSixth -> setAvada (1);
$testSixth -> setWeight(2);
$testSixth -> setVol(1000);

var_dump($testSixth ->getVol()); 
var_dump($testSixth ->getWeight()); 

echo "<br>";

$testSeventh -> setWingardium(22);
$testSeventh -> setSize(11);
$testSeventh -> setTer(2);

var_dump($testSeventh ->getSize()); 
var_dump($testSeventh ->getTer()); 

echo "<br>";

$testEighth-> setLeviosa(7);
$testEighth -> setWeight(15);
$testEighth -> setTer(20);

var_dump($testEighth ->getWeight()); 
var_dump($testEighth ->getTer()); 

?>