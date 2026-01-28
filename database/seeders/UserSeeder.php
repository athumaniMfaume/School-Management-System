<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=> 'Admin',
                'role'=> 'admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('123'),


            ],
            [
                'name'=> 'Teacher',
                'role'=> 'teacher',
                'email'=> 't@gmail.com',
                'password'=> Hash::make('123'),


            ],
            [
                'name'=> 'Student',
                'role'=> 'student',
                'email'=> 's@gmail.com',
                'password'=> Hash::make('123'),


            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }




        // User::insert(
        //     [
        //         'name'=> 'Admin',
        //         'role'=> 'admin',
        //         'email'=> 'admin@gmail.com',
        //         'password'=> Hash::make('123'),


        //     ],

        // );
    }
}
