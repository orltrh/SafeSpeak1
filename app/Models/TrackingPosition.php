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
            ->select('username', 'email', 'latitude', 'longitude')
            ->get();
        return $result;
    }
}
