<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestPlace extends Model
{
    use HasFactory;

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
