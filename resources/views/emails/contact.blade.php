@component('mail::message')
# Greetings Urbaniks Admin,

You have a new message from somebody from your site...

@component('mail::panel')
Name: {{ $data['name'] }}

Email: <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>

{{ $data['name'] }} said:

"{{ $data['message'] }}"

@endcomponent

Reply directly to this email, continue the conversation with {{ $data['name'] }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
