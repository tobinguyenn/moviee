<?php

use App\Controllers\UserController;
use Core\Router\Router;

Router::get('', [UserController::class]);

Router::dispatch();
