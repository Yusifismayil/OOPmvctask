<?php


use App\Controllers\FrontController;

use Core\RouterService as Route;


Route::get('/', [\app\controllers\FrontController::class, 'index']);

