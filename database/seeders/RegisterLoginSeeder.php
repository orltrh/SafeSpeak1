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
            'username' => 'azarya',
            'number' => '1234567890',
            'email' => 'azaryamoeljono@gmail.com',
            'is_admin' => 0,
            'email_verified_at' => now(),
            'password' => Hash::make('azarya123'),
            're_password' => Hash::make('azarya123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin = new User();
        $admin->username = 'admin';
        $admin->number = '1234567890';
        $admin->email = 'admin1@gmail.com';
        $admin->is_admin = 1;
        $admin->email_verified_at = now();
        $admin->password = Hash::make('admin123');
        $admin->re_password = Hash::make('admin123');
        $admin->remember_token = Str::random(10);
        $admin->created_at = now();
        $admin->updated_at = now();
        $admin->save();
    }
}
