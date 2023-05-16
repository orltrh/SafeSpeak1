<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin1',
            'number' => '0823464096185',
            'email' => 'admin1@gmail.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            're_password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'username' => 'admin2',
            'number' => '089599773505',
            'email' => 'admin2@gmail.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin234'),
            're_password' => Hash::make('admin234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'username' => 'admin3',
            'number' => '081236691954',
            'email' => 'admin3@gmail.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin345'),
            're_password' => Hash::make('admin345'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
