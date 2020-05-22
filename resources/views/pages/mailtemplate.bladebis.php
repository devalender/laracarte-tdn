@component('mail::message')

#Bonjour Admin

- {{ $name }}
- {{ $email}}

@component('mail::panel')
-{{ $messages }}
@endcomponent

       
@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent


Thanks,<br>
{{ config('app.name') }}

@endcomponent
