<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PupilRegistration;

class PupilRegistrationsController extends Controller
{
    public function store()
    {
      request()->validate([
        'pupil_name' => 'required',
        'pupil_age' => 'required',
        'guardian_name' => 'nullable',
        'class' => 'required',
        'phone_number' => 'required',
        'contact_time' => 'nullable',
        'email' => 'required|email',
        'message' => 'nullable',
      ]);

      $data = [
        'pupil_name' => request('pupil_name'),
        'pupil_age' => request('pupil_age'),
        'guardian_name' => request('guardian_name'),
        'class' => request('class'),
        'phone_number' => request('phone_number'),
        'contact_time' => request('contact_time'),
        'email' => request('email'),
        'message' => request('message'),
      ];

      Mail::to(config('global.email'))->send(new PupilRegistration($data));

      return back()->with('status', 'We received your registration details. We will be in touch shortly!');
    }
}
