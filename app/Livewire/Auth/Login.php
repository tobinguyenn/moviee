<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    #[Validate('required|email')]
    public ?string $email = null;

    #[Validate('required')]
    public ?string $password = null;

    public function render()
    {
        return view('auth.login')
            ->title(__('Login'));
    }

    public function login()
    {
        sleep(3);
        $this->validate();

        $this->reset('email');
        $this->reset('password');
    }
}
