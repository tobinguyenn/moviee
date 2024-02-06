<?php

namespace App\Livewire;

use App\Enums\MovieStatus;
use App\Services\MovieService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Home extends Component
{
    public Collection $movies;

    public function mount(MovieService $movieService)
    {
        $this->movies = $movieService->getAll(
            [MovieStatus::NOW_SHOWING, MovieStatus::COMING_SOON],
            ['id', 'slug', 'rated_id', 'title', 'poster', 'release_date'],
            ['rated:id,code,color']
        );
    }
}
