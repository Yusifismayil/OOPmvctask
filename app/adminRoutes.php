<?php

use core\RouterService as Route;


use app\controllers\HomeCenterController;
use app\controllers\BlogController;

Route::get('admin/homecenter',[HomeCenterController::class,'index']);
Route::post('admin/homecenter',[HomeCenterController::class,'store']);

Route::get('admin/blog',[BlogController::class,'index']);
Route::get('admin/blog/create',[BlogController::class,'create']);
Route::get('admin/blog/{id}',[BlogController::class,'edit']);


Route::post('admin/blog',[BlogController::class,'store']);
Route::post('admin/blog/{id}',[BlogController::class,'update']);
Route::post('admin/blog-delete/{id}',[BlogController::class,'delete']);