<?php
namespace Core;

class test1 extends first
{
    protected $vol;
    public function getVol():int { return $this->vol; } 
    public function setVol(int $vol):void { $this->vol = $vol;}

  public function setSize (int $size):void { $this->size = $size* $this->vol;}
}

?>

