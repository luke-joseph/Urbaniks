<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderFormsController extends Controller
{
    public function download()
    {
      $file = '/order-forms/' . request('form') . '.pdf';
      
      return Storage::disk('public')->download($file);
    }
}
