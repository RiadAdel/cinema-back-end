<?php

use Illuminate\Database\Seeder;
use App\genre;

class genreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['type'=>"Action"],
            ['type'=>"Adventure"],
            ['type'=>"Animation"],
            ['type'=>"Biography"],
            ['type'=>"Comedy"],
            ['type'=>"Crime"],
            ['type'=>"Documentary"],
            ['type'=>"Drama"],
            ['type'=>"Family"],
            ['type'=>"Fantasy"],
            ['type'=>"Film-Noir"],
            ['type'=>"Game-Show"],
            ['type'=>"History"],
            ['type'=>"Horror"],
            ['type'=>"Music"],
            ['type'=>"Musical"],
            ['type'=>"Mystery"],
            ['type'=>"News"],
            ['type'=>"Reality-TV"],
            ['type'=>"Romance"],
            ['type'=>"Sci-Fi"],
            ['type'=>"Sport"],
            ['type'=>"Talk-Show"],
            ['type'=>"Thriller"],
            ['type'=>"War"],
            ['type'=>"Western"]
        ];
        genre::insert($genres);
    }
}
