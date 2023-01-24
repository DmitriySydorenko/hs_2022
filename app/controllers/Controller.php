<?php

namespace App\controllers;

use Core\Render;

class Controller 
{
protected function render(string $viewName, array $data = []):void
{
    Render::render($viewName, $data);
}
}
