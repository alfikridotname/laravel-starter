<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name'     => 'Administrator',
            'email'    => 'administrator@admin.com',
            'password' => bcrypt('password'),
        ];

        $user = new User($data);
        $user->save();
    }
}
