<?php

namespace App\Livewire;

use App\Services\MovieService;
use App\Enums\MovieStatus;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ComingSoon extends Component
{
    public $title = 'Coming Soon';

    public Collection $movies;

    public function mount(MovieService $movieService)
    {
        $this->movies = $movieService->getAll(
            MovieStatus::COMING_SOON,
            ['id', 'rated_id', 'title', 'poster', 'release_date'],
            ['rated:id,code']
        );
    }
}
