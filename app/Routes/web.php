<?php

use App\Controllers\AuthController;
use App\Controllers\DefaultController;
use App\Middlewares\AuthMiddleware;

$router->map('GET', '/login',[AuthController::class,'login']);

$router->map('GET', '/',[DefaultController::class,'index']);

$router->map('GET', '/admin',[DefaultController::class,'admin'])->middleware(new AuthMiddleware);