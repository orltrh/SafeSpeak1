<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\TrackingPosition;

class TrackingPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        TrackingPosition::create([
            'username' => 'admin1',
            'number' => '0823464096185',
            'latitude' => '-6.914744',
            'longitude' => '107.609810',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        TrackingPosition::create([
            'username' => 'admin2',
            'number' => '089599773505',
            'latitude' => '-6.914744',
            'longitude' => '107.609810',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        TrackingPosition::create([
            'username' => 'admin3',
            'number' => '081236691954',
            'latitude' => '-7.9933885',
            'longitude' => '112.6079343',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
