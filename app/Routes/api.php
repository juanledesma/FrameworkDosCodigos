<?php

use App\Controllers\Api\DefaultController;

$router->map('GET', '/',[DefaultController::class,'index']);