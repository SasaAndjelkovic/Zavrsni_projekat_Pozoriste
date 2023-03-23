<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvatarShowth extends Model
{
    protected $fillable = ['avatar_id', 'showth_id'];

    public function avatar()
    {
        return $this->belongsTo(Showth::class);
    }
    public function showth()
    {
        return $this->belongsTo(Avatar::class);
    }
}
