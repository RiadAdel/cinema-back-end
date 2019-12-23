<?php

use App\seat;
use Illuminate\Database\Seeder;

class seatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats =[];
        for ($i=0; $i < hallTableSeeder::$numOfHalls; $i++) { 
            for ($r=0; $r < 20; $r++) { 
                for ($c=0; $c < 20; $c++) { 
                    array_push($seats,["row"=>$r,"coulmn"=>$c,"hall_id"=>$i+1]);
                }
            }
        }
        seat::insert($seats);
    }
}
