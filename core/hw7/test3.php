<?php
namespace Core;

class test3 extends first
{
    private $plug;
    public function getPlug():int { return $this->plug; } 
    public function setPlug(int $plug):void { $this->plug = $plug;}

   public function setSize (int $size):void 
   { $this->size = $size- $this->plug;}
}

?>