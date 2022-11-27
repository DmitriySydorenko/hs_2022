
<?php


// 1. Получить остаток деления 7 на 3

$divide = 7%3;
print("Остаток деления 7 на 3");
echo "\n";
var_dump($divide);

//2. Получить целую часть сложения 7 и 7,15

$num1 = 7;
$num2 = 7.15;
$integer = round($num1 + $num2); // or ()intval 
print("Целая часть сложения 7 и 7,15");
echo "\n";
var_dump($integer);


// 3. Получить корень из 25

$num3 = 25;
$squareRoot = sqrt($num3);
print("Корень из 25");
echo "\n";
var_dump($squareRoot);


//4. Получить 4-е слово из фразы - Десять негритят пошли купаться в море
//5. Получить 17-й символ из фразы - Десять негритят пошли купаться в море
//6. Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
//7. Посчитать длину строки - Десять негритят пошли купаться в море


$sentence = "Десять негритят пошли купаться в море";

$findWord = mb_substr($sentence, 22, 8);
$findLetter = mb_substr($sentence, 16, 1);
$upperCase = mb_convert_case($sentence, MB_CASE_TITLE, "UTF-8");;
$stringLenght = mb_strlen($sentence);


print("4-е слово из фразы - Десять негритят пошли купаться в море");
echo "\n";
var_dump($findWord);

print("17-й символ из фразы - Десять негритят пошли купаться в море");
echo "\n";
var_dump($findLetter);

print("Сделать заглавной первую букву во всех словах фразы:");
echo "\n";
var_dump($upperCase);

print("Длина сроки:");
var_dump($stringLenght);


//8. Правильно ли утверждение true равно 1
//9. Правильно ли утверждение false тождественно 0


// 

$true = true;
$false = false;


var_dump (true == 1);
var_dump (false == 0);

echo "\n";

// 10. Какая строка длиннее three - три
// по непонятной мне причине line 2 > line 1


$line1 = "three";
$line2 = "три";


$lineLength = strnatcmp($line1, $line2);
var_dump($lineLength); 




//11. Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2? (125 * 13 + 7 > 223 + 28 * 2)


$number1 = 125 * 13 + 7;
$number2 = 223 + 28 * 2;
if ($number1 > $number2) {
	print("(125 * 13 + 7) > (223 + 28 * 2)");
} elseif ($number1 < $number2) {
	print("(125 * 13 + 7) < (223 + 28 * 2)");
} else {
	print("they are equal");
}

?>
