<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use App\Services\MovieService;
use App\Enums\MovieStatus;
use Livewire\Component;

class ComingSoon extends Component
{
    public Collection $movies;

    public function mount(MovieService $movieService)
    {
        $this->movies = $movieService->getAll(
            MovieStatus::COMING_SOON,
            ['id', 'slug', 'rated_id', 'title', 'poster', 'release_date'],
            ['rated:id,code,color']
        );
    }

    public function render()
    {
        return view('coming-soon')
            ->title(__('Coming Soon'));
    }
}
