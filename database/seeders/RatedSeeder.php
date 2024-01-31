<?php

namespace Database\Seeders;

use App\Models\Rated;
use Illuminate\Database\Seeder;

class RatedSeeder extends Seeder
{
    const DATA = [
        [
            'name' => 'General Audiences',
            'code' => 'G',
            'description' => 'All ages admitted. Nothing that would offend parents for viewing by children.',
            'color' => '#016935',
        ],
        [
            'name' => 'Parental Guidance Suggested',
            'code' => 'PG',
            'description' => 'Some material may not be suitable for children. Parents urged to give "parental guidance". May contain some material parents might not like for their young children.',
            'color' => '#f15923',
        ],
        [
            'name' => 'Parents Strongly Cannot Say',
            'code' => 'PG-13',
            'description' => 'Some material may be inappropriate for children under 13. Parents are urged to be cautious. Some material may be inappropriate for pre-teenagers.',
            'color' => '#803c9a',
        ],
        [
            'name' => 'Restricted',
            'code' => 'R',
            'description' => 'Under 17 requires accompanying parent or adult guardian. Contains some adult material.',
            'color' => '#d81f1a',
        ],
        [
            'name' => 'Adults Only',
            'code' => 'NC-17',
            'description' => 'No One 17 and Under Admitted. Clearly adult. Children are not admitted.',
            'color' => '#1b3e9c',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rated::truncate();
        foreach (self::DATA as $data) {
            Rated::create($data);
        }
    }
}
