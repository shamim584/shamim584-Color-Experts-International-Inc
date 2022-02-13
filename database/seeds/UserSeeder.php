<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            $user = [
                [
                'id' => 1,
                'name' => 'Shamim',
                'email' => 'shamim@gmail.com',
                'role' => '1',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 2,
                'name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'role' => '2',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 3,
                'name' => 'Jhon',
                'email' => 'jhon@gmail.com',
                'role' => '3',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 4,
                'name' => 'Anne',
                'email' => 'anne@gmail.com',
                'role' => '3',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 5,
                'name' => 'Jackson',
                'email' => 'jackson@gmail.com',
                'role' => '3',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 6,
                'name' => 'Peters',
                'email' => 'peters@gmail.com',
                'role' => '3',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],
                [
                'id' => 7,
                'name' => 'Watson',
                'email' => 'watson@gmail.com',
                'role' => '3',
                'status' => '1',
                'password' => bcrypt('12345'),
                ],


        ];
        foreach ($user as $key => $value) {

            User::create($value);

        }

    }
}
