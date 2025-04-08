<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    public function moderator()
    {
        return $this->belongsTo(User::class, 'moderator_id');
    }
}
