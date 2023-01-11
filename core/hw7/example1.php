<?php

namespace Core;

class example1 extends test1
{
    protected $kedavra;
    public function getKedavra():int { return $this->kedavra; } 
    public function setKedavra(int $kedavra):void { $this->kedavra = $kedavra;}

    public function setSize (int $size):void { $this->size = $size+ $this->kedavra;}
    public function setVol (int $vol):void { $this->vol = $vol* $this->kedavra;}
}

?>