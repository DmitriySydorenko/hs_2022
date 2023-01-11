<?php
namespace Core;

class example2 extends test1
{
    protected $avada;
    public function getAvada():int { return $this->avada; } 
    public function setAvada(int $avada):void { $this->avada = $avada;}

    public function setWeight (int $weight):void { $this->weight = $weight+ $this->avada;}
    public function setVol (int $vol):void { $this->vol = $vol- $this->avada;}
}
?>