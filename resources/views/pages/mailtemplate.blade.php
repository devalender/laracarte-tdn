@component('mail::message')

#Bonjour Admin

- {{ $msg->name }}
- {{ $msg->email}}

@component('mail::panel')
-{{ $msg->messages }}
@endcomponent

       
@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent


Thanks,<br>
{{ config('app.name') }}

@endcomponent
