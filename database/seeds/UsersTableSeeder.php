<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker=\Faker\Factory::create();
        $password = Hash::make('@hakiki411');
        User::create(
            [
                'name'=>'Administrator',
                'password'=>$password,
                'email'=>'info@hakiki411.net',
            ]
        );
    }
}
