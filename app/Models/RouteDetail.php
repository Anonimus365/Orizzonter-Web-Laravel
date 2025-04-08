<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteDetail extends Model
{
    use HasFactory;

    public function statistic()
    {
        return $this->belongsTo(Statistic::class);
    }

    public function route()
    {
        return $this->hasOne(Route::class);
    }
}
