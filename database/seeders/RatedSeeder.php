<?php

namespace Database\Seeders;

use App\Models\Rated;
use Illuminate\Database\Seeder;

class RatedSeeder extends Seeder
{
    const DATA = [
        [
            'name' => 'G - General Audiences',
            'code' => 'G',
            'description' => 'All ages admitted. Nothing that would offend parents for viewing by children.',
        ],
        [
            'name' => 'PG - Parental Guidance Suggested',
            'code' => 'PG',
            'description' => 'Some material may not be suitable for children. Parents urged to give "parental guidance". May contain some material parents might not like for their young children.',
        ],
        [
            'name' => 'PG-13 - Parents Strongly Cannot Say',
            'code' => 'PG-13',
            'description' => 'Some material may be inappropriate for children under 13. Parents are urged to be cautious. Some material may be inappropriate for pre-teenagers.',
        ],
        [
            'name' => 'R - Restricted',
            'code' => 'R',
            'description' => 'Under 17 requires accompanying parent or adult guardian. Contains some adult material.',
        ],
        [
            'name' => 'NC-17 - Adults Only',
            'code' => 'NC-17',
            'description' => 'No One 17 and Under Admitted. Clearly adult. Children are not admitted.',
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
