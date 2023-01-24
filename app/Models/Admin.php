<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->morphOne('App\Models\User', 'userable');
    }
}
