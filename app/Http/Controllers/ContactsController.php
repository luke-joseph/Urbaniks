<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactsController extends Controller
{
    public function store()
    {
      request()->validate([
        'g-recaptcha-response' => 'required|captcha',
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
      ]);

      $data = [
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message'),
      ];

      Mail::to(config('global.email'))->send(new Contact($data));

      return back()->with('status', 'We received your email!');
    }
}
