<?php

namespace app\controllers;

use app\models\HomeOne;
use app\models\Blog;
use core\DB;

class FrontController
{
  public function index(){
      $data=(new HomeOne())->first();
      $blogs = (new Blog())->setLimit('3')->all();
      return view('home',compact('data','blogs'));
  }
}