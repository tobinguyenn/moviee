<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Seeders\RatedSeeder;
use App\Enums\MovieStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rated_id' => rand(1, count(RatedSeeder::DATA)),
            'title' => fake()->sentence,
            'poster' => fake()->imageUrl(240, 355, fake()->word),
            'description' => fake()->paragraph,
            'director' => fake()->name,
            'casts' => implode(', ', [fake()->name, fake()->name, fake()->name]),
            'genre' => fake()->word,
            'release_date' => fake()->randomElement([
                now(),
                fake()->date(max: '+2 years'),
                now()->addYears(),
            ]),
            'duration' => fake()->numberBetween(0, 300),
            'status' => function (array $attributes) {
                if ($attributes['release_date'] < now()) {
                    $status = fake()->randomElement([MovieStatus::NOW_SHOWING, MovieStatus::END]);
                }

                if ($attributes['release_date'] > now()) {
                    $status = MovieStatus::COMING_SOON;
                }

                if (now()->diffInYears($attributes['release_date']) >= 10) {
                    $status = MovieStatus::END;
                }

                return fake()->randomElement([$status, MovieStatus::CANCELLED, MovieStatus::DELAYED]);
            },
        ];
    }
}
