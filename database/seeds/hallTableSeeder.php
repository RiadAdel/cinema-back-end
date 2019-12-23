<?php

use App\hall;
use Illuminate\Database\Seeder;

class hallTableSeeder extends Seeder
{
    public static $numOfHalls = 5;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $halls = [];
        for ($i=0; $i < hallTableSeeder::$numOfHalls; $i++) { 
            array_push($halls,["max_coulmn"=>20,"max_row"=>20]);
        }
        hall::insert($halls);
    }
}
