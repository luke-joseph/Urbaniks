<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacy()
    {
      $page = 'not in nav';

      return view('privacy', compact('page'));
    }

    public function cookies()
    {
      $page = 'not in nav';

      return view('cookies', compact('page'));
    }

    public function terms()
    {
      $page = 'not in nav';

      return view('terms', compact('page'));
    }
}
