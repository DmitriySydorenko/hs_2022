<?php

namespace Core;
use App\controllers\Home;
use App\controllers\Error404;

class Router 
{
    public function run()
    {
    $arr = explode('/', $_SERVER["REQUEST_URI"]);
    if (empty($arr[1])) {
        $arr[1] = 'home';
    }
    $className = '\App\controllers\\' . ucfirst($arr[1]);
    if(class_exists($className)){
        $classObj = new $className();
    } else {
        $classObj = new Error404();
    }

    $classObj->index();
    }

} 