<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $page = 'Home';

      return view('index', compact('page'));
    }
    public function contact()
    {
      $page = 'Contact';

      return view('contact', compact('page'));
    }
    public function gallery()
    {
      $page = 'Gallery';

      return view('gallery', compact('page'));
    }
    public function merchandise()
    {
      $page = 'Merchandise';

      return view('merchandise', compact('page'));
    }
    public function registration()
    {
      $page = 'Registration';

      return view('registration', compact('page'));
    }
    public function classes()
    {
      $page = 'Classes';

      return view('classes', compact('page'));
    }
}
