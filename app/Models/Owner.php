<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{


    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
