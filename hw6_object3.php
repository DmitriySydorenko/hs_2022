<?php

class example1 extends test1
{
    protected $kedavra;
    public function getKedavra():int { return $this->kedavra; } 
    public function setKedavra(int $kedavra):void { $this->kedavra = $kedavra;}

    public function setSize (int $size):void { $this->size = $size+ $this->kedavra;}
    public function setVol (int $vol):void { $this->vol = $vol* $this->kedavra;}
}

class example2 extends test1
{
    protected $avada;
    public function getAvada():int { return $this->avada; } 
    public function setAvada(int $avada):void { $this->avada = $avada;}

    public function setWeight (int $weight):void { $this->weight = $weight+ $this->avada;}
    public function setVol (int $vol):void { $this->vol = $vol- $this->avada;}
}

class ref1 extends test2
{
    protected $wingardium;
    public function getWingardium():int { return $this->wingardium; } 
    public function setWingardium(int $wingardium):void { $this->wingardium = $wingardium;}

    public function setSize(int $size):void { $this->size = $size+ $this->wingardium;}
    public function setTer(int $ter):void { $this->ter = $ter* $this->wingardium;}
}

class ref2 extends test2
{
    protected $leviosa;
    public function getLeviosa():int { return $this->leviosa; } 
    public function setLeviosa(int $leviosa):void { $this->leviosa = $leviosa;}

    public function setWeight(int $weight):void { $this->weight = $weight+ $this->leviosa;}
    public function setTer (int $ter):void { $this->ter = $ter* $this->leviosa;}
}

?>