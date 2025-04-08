<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function interestPlace()
    {
        return $this->belongsTo(InterestPlace::class);
    }

    public function configuration()
    {
        return $this->belongsTo(Configuration::class);
    }

    public function personalization()
    {
        return $this->hasOne(Personalization::class);
    }

}
