<?php

namespace Core;

class Render 
{

public static function render (string $viewName, array $data = []):void
{
    extract($data);
    include '../public/view/' .$viewName;
}
}