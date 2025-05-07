<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function routeDetails()
    {
        return $this->hasMany(RouteDetail::class);
    }

   

protected $fillable = [
    'user_id',
    'total_rides',
    'total_distance',
    'total_time',
    'calories_burned',
    'average_speed',
];

}

