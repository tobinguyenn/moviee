<?php

namespace App\Enums;

enum MovieStatus: int
{
    case COMING_SOON = 1;
    case NOW_SHOWING = 2;
    case CANCELLED = 3;
    case DELAYED = 4;
    case END = 5;

    public function label()
    {
        return match ($this) {
            MovieStatus::COMING_SOON => 'coming soon',
            MovieStatus::DELAYED => 'delayed',
            MovieStatus::CANCELLED => 'cancelled',
            MovieStatus::NOW_SHOWING => 'now showing',
            MovieStatus::END => 'end',
        };
    }
}
