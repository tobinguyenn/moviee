<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public function render()
    {
        return view('auth.login')
            ->title(__('Login'));
    }
}
