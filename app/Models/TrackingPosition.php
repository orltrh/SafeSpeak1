<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TrackingPosition extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function allData()
    {
        $result = DB::table('tracking_positions')
            ->select('username', 'noWA', 'latitude', 'longitude')
            ->get();
        return $result;
    }
    public static function find($username) {
        return self::where('username', $username)->first();
    }
}
