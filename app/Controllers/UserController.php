<?php

namespace App\Controllers;

use Core\Controller;

class UserController extends Controller
{
    public function __invoke()
    {
        return $this->response([
            'data' => 'ok',
        ]);
    }
}
