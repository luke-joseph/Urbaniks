<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageMetaData;

class PagesController extends Controller
{
    public function index()
    {
      $page = 'Home';
      $pageMeta = pageMetaData::index();

      return view('index', compact('page', 'pageMeta'));
    }
    public function contact()
    {
      $page = 'Contact';
      $pageMeta = pageMetaData::contact();

      return view('contact', compact('page', 'pageMeta'));
    }
    public function gallery()
    {
      $page = 'Gallery';
      $pageMeta = pageMetaData::gallery();

      return view('gallery', compact('page', 'pageMeta'));
    }
    public function merchandise()
    {
      $page = 'Merchandise';
      $pageMeta = pageMetaData::merchandise();

      return view('merchandise', compact('page', 'pageMeta'));
    }
    public function registration()
    {
      $page = 'Registration';
      $pageMeta = pageMetaData::registration();

      return view('registration', compact('page', 'pageMeta'));
    }
    public function classes()
    {
      $page = 'Classes';
      $pageMeta = pageMetaData::classes();

      return view('classes', compact('page', 'pageMeta'));
    }
}
