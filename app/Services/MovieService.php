<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Enums\MovieStatus;
use App\Models\Movie;

class MovieService
{
    public function __construct(protected Movie $movie)
    {
    }

    public function getAll(MovieStatus|array $status = null, $columns = ['id'], $with = []): Collection
    {
        $query = $this->movie->select($columns)
            ->with($with);

        if (is_null($status)) {
            return $query->get();
        }

        return $query->status($status)->limit(5)->get();
    }
}
