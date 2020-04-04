<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * owner index
     */
    public function ownerIndex()
    {
        $owner = Owner::all();

        dd($owner);
    }

    public function ownerCars(Owner $owner)
    {
        $cars = $owner->car;

        dd($cars);
    }
}
