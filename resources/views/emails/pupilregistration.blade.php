@component('mail::message')
# Greetings Urbaniks Admin,

Great News! You have a new registration request from your website. See below for details


<span style="color: #3284a5; font-weight: 600;">Pupil / Guardian & Class Information</span>

@component('mail::panel')
Pupil: <strong>{{$data['pupil_name']}}</strong> -<strong>{{$data['pupil_age']}} years old.</strong>

@if ($data['guardian_name'])
Guardian: <strong>{{$data['guardian_name']}}</strong>
@endif

Requested Class: <strong>{{$data['class']}}</strong>
@endcomponent

<span style="color: #3284a5; font-weight: 600;">Contact Information</span>

@component('mail::panel')
Email: <a href="mailto:{{$data['email']}}">{{$data['email']}}</a>

Phone Number: <strong>{{$data['phone_number']}}</strong>

@if ($data['contact_time'])
Requested Contact Time: {{$data['contact_time']}}
@endif

@if ($data['contact_time'])
Additional Message:

"{{$data['message']}}"
@endif

@endcomponent

Please Contact with the details provided and confirm the registration with the Pupil / Guardian.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
