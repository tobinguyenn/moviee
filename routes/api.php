<?php

use Core\Router\Router;

$viewDir = __DIR__ . '/../views';

Router::get('', fn () => header('Location: home'));
Router::get('home', fn () => require_once "$viewDir/home.php");

Router::dispatch();
