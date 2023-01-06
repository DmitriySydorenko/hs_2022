<?php

class test1 extends first
{
    protected $vol;
    public function getVol():int { return $this->vol; } 
    public function setVol(int $vol):void { $this->vol = $vol;}

  public function setSize (int $size):void { $this->size = $size* $this->vol;}
}

class test2 extends first
{
    protected $ter;
    public function getTer():int { return $this->ter; } 
    public function setTer(int $ter):void { $this->ter = $ter;}

  public function setWeight (int $weight):void 
  { $this->weight = $weight+ $this->ter;}
}

class test3 extends first
{
    private $plug;
    public function getPlug():int { return $this->plug; } 
    public function setPlug(int $plug):void { $this->plug = $plug;}

   public function setSize (int $size):void 
   { $this->size = $size- $this->plug;}
}
?>

