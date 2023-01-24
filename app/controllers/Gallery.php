<?php

namespace App\controllers;
use App\controllers\models\Gallery as modelGallery;

class Gallery extends Controller
{
public function index(){
   $gallery = new modelGallery();
   $data['newKey'] = $gallery->index();
   $this->render('social/gallery.php', $data);
}
} 