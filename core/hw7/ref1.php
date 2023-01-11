<?php
namespace Core;

class ref1 extends test2
{
    protected $wingardium;
    public function getWingardium():int { return $this->wingardium; } 
    public function setWingardium(int $wingardium):void { $this->wingardium = $wingardium;}

    public function setSize(int $size):void { $this->size = $size+ $this->wingardium;}
    public function setTer(int $ter):void { $this->ter = $ter* $this->wingardium;}
}

?>