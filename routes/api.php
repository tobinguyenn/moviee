<?php

use App\Controllers\MovieController;
use Core\Routing\Router;

Router::get('movies', [MovieController::class]);

Router::dispatch();
