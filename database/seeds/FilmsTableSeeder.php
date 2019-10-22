<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert(
            [
                'name' => 'Matrix',
                'rating' => rand(50,100) / 10,
                'duration' => rand(90,120) * 60,
                'description' => 'The world is simulation',
            ]
        );
        DB::table('genres')->insert([
                ['name' => 'Drama'],
                ['name' => 'Action'],
                ['name' => 'SciFi'],
                ['name' => 'Fiction'],
                ['name' => 'Comedy'],
            ]
        );
        DB::table('film_genre_pivot')->insert([
            ['film_id' => 1, 'genre_id' => 2],
            ['film_id' => 1, 'genre_id' => 3],
            ['film_id' => 1, 'genre_id' => 4],
        ]);
    }
}
