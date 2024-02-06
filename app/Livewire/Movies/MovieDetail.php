<?php

namespace App\Livewire\Movies;

use App\Models\Movie;
use Livewire\Component;

class MovieDetail extends Component
{
    public Movie $movie;

    public function render()
    {
        return view('movies.movie-detail')
            ->title($this->movie->slug);
    }
}
