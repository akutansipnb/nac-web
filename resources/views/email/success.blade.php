@component('mail::message')

# Hello , <strong>{{$name}}</strong>


Thank you for joining the NAC {{$year}} competition branches <strong> {{$event}} {{$year}}</strong>  Immediately complete the payment and log in to the dashboard to complete the registration!


@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
{{-- @component('mail::button', ['url' => 'https://nationalaccountingcompetition.com/login']) --}}
Log in to Dashboard
@endcomponent

Best Regards,<br>
<br>
National Accounting Competition Committee

@endcomponent
