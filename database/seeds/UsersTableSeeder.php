<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
          array(
            'name' => 'Aome',
            'username' => 'aome',
            'password' => Hash::make('aome'),
            'address' => 'Kepanjen',
            'id_level' => 1
          ),
          array(
            'name' => 'Alfian',
            'username' => 'alfian',
            'password' => Hash::make('alfian'),
            'address' => 'Kepanjen',
            'id_level' => 2
          ),
          array(
            'name' => 'Dimas',
            'username' => 'dimas',
            'password' => Hash::make('dimas'),
            'address' => 'Kepanjen',
            'id_level' => 1
          ),
          array(
            'name' => 'Sugara',
            'username' => 'sugara',
            'password' => Hash::make('sugara'),
            'address' => 'Kepanjen',
            'id_level' => 2
          ),
          array(
            'name' => 'Scarlet',
            'username' => 'scarlet',
            'password' => Hash::make('scarlet'),
            'address' => 'Kepanjen',
            'id_level' => 1
          )
        );

        User::insert($users);
    }
}
