<?php

namespace App\Controllers;

use App\Models\User;
use Core\Routing\Controller;

class MovieController extends Controller
{
    public function __invoke()
    {
        /** @var \App\Models\User */
        $users = User::all();
        return $this->response($users);
    }
}
