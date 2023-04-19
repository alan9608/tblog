<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'profile_photo_path' => '',
                'remember_token' => null,
            ]
        );
        User::create(
            [
                'id'             => 2,
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => bcrypt('password'),
                'profile_photo_path' => 'profile-photos/QrElC6ejE40JkzvHNyPKNt5EYY5LFsTFlvKUsiSo.jpg',
                'remember_token' => null,
            ]
        );
        User::create(
            [
                'id'             => 3,
                'name'           => 'Alan Wilson',
                'email'          => 'alan9608@gmail.com',
                'password'       => bcrypt('password'),
                'profile_photo_path' => 'profile-photos/3Q8HkwuZ1D1Vm54y2NyLtLvcm4yKzp6hTkLrgUwh.png',
                'remember_token' => null,
            ]
        );
    }
}
