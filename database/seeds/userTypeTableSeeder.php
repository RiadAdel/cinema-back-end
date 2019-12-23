<?php

use App\userType;
use Illuminate\Database\Seeder;

class userTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ["type"=>"Admin"],
            ["type"=>"Customer"]
        ];

        userType::insert($types);
    }
}
