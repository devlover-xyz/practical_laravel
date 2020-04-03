<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
