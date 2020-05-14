<?php

use App\User;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            "username"=>"admin",
            "user_type_id"=>1,
            "birthdate"=>"1995-09-23",
            "firstname"=>"Ehab",
            "lastname"=>"Riad",
            "password"=>bcrypt("1234"),
            "email"=>"admin@admin.com"
        ]);
    }
}
