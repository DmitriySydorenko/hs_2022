<?php
namespace Core;

class test2 extends first
{
    protected $ter;
    public function getTer():int { return $this->ter; } 
    public function setTer(int $ter):void { $this->ter = $ter;}

  public function setWeight (int $weight):void 
  { $this->weight = $weight+ $this->ter;}
}

?>