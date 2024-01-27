@component('mail::message')
# Hello , <strong>{{$name}}</strong>

Your registration has been successfully verified, please join the participant group via the following link

@component('mail::button', ['url' => $group_url])
Join the Competition Group
@endcomponent

@component('mail::button', ['url' => $url_twibon])
Download Twibon
@endcomponent



Best Regards,<br>
Committee of National Accounting Competition
@endcomponent
