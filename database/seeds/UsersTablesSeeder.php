<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
        'username' => 'tester',
        'email'    => 'test@test.pl',
        'password' => Hash::make('super'),
        //'remember_token' =>  str_random(10),
    ));
    }
}
