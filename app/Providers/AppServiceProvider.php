<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    private function relationMorphMap()
    {
        Relation::morphMap([
            'user' => \App\Models\User::class,
            'movie' => \App\Models\Movie::class,
            'rated' => \App\Models\Rated::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict(true);

        $this->relationMorphMap();

        Vite::macro('image', fn (string $asset) => $this->asset("resources/images/{$asset}"));
    }
}
