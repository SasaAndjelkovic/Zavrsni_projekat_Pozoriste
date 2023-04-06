<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $casts = [
        'enabled' => 'boolean' 
    ];
    public function showths()
    {
        return $this->belongsToMany (Showth::class, 'avatar_showths');
    }
}


