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
        User::create(array('name'=> 'mustapha', 'email'=> 'mustapha@free.fr', 'password'=> 'mustapha'));

        
    }
}
