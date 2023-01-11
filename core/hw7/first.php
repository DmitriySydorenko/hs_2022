<?php
namespace Core;

class first extends exponentiation
{
    protected $size;  // cвойство №1
    public function getSize():int { return $this->size; } //метод №2 
    public function setSize(int $size):void { $this->size = $size;} //метод №2

    protected $weight; //свойство№2
    public function getWeight():int { return $this->weight; } //метод №2
    public function setWeight(int $weight):void { $this->weight = $weight;} //метод №2

    function f (int $a, int $x) 
    {
$this->$a=$a;
$this->$x=$x;
return (pow($a, $x)); // pow - возведение в степень
    }
}

abstract class exponentiation
{
    abstract function f(int $a, int $x);
}
?>