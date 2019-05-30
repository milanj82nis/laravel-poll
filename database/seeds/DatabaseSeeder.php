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


  
    $polls =  factory('App\Poll' , 55) -> create();
    $options =  factory('App\Option' , 4666) -> create();
    $users =  factory('App\User' , 200) -> create();

    }
}
