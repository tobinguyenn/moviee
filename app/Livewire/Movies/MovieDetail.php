<?php

namespace App\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;

class MovieDetail extends Component
{
    public Movie $movie;

    public function mount()
    {
        $this->movie->loadMissing('rated:id,code,description,name,color');
    }

    public function render()
    {
        return view('movies.movie-detail')
            ->title($this->movie->slug);
    }
}
