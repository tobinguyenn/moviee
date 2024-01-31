<?php

namespace App\Livewire;

use Livewire\Component;

class NowShowing extends Component
{
    public function render()
    {
        return view('now-showing')
            ->title(__('Now Showing'));
    }
}
