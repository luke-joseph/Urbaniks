@component('mail::message')
# Greetings Urbaniks,

You have a new message from somebody from your site...

@component('mail::panel')
Name: {{ $data['name'] }}

Email: {{ $data['email'] }}

{{ $data['name'] }} said:

"{{ $data['message'] }}"

@endcomponent

Don't reply directly to this mail.

Please copy their email address into a new message to reply.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
