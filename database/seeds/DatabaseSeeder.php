<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(genreTableSeeder::class);
        $this->call(hallTableSeeder::class);
        $this->call(seatTableSeeder::class);
        $this->call(userTypeTableSeeder::class);
    }
}
