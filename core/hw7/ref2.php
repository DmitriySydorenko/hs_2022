<?php
namespace Core;

class ref2 extends test2
{
    protected $leviosa;
    public function getLeviosa():int { return $this->leviosa; } 
    public function setLeviosa(int $leviosa):void { $this->leviosa = $leviosa;}

    public function setWeight(int $weight):void { $this->weight = $weight+ $this->leviosa;}
    public function setTer (int $ter):void { $this->ter = $ter* $this->leviosa;}
}

?>

