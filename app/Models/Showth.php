<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showth extends Model
{
    public function avatars()
    {
        return $this->belongsToMany (Avatar::class, 'avatar_showths');
    }
}
