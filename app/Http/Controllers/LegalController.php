<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageMetaData;

class LegalController extends Controller
{
    public function privacy()
    {
      $page = 'not in nav';
      $pageMeta = pageMetaData::index();

      return view('privacy', compact('page', 'pageMeta'));
    }

    public function cookies()
    {
      $page = 'not in nav';
      $pageMeta = pageMetaData::index();

      return view('cookies', compact('page', 'pageMeta'));
    }

    public function terms()
    {
      $page = 'not in nav';
      $pageMeta = pageMetaData::index();

      return view('terms', compact('page', 'pageMeta'));
    }
}
