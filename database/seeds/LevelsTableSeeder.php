<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = array(
          array(
            'name' => 'Admin'
          ),
          array(
            'name' => 'User'
          )
        );

        Level::insert($levels);
    }
}
