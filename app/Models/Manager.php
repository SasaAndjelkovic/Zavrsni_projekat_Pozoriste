<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    protected $hidden = ['password'];
}