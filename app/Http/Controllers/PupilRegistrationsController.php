<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PupilRegistrationsController extends Controller
{
    public function store()
    {
      dd(request()->all());
    }
}
