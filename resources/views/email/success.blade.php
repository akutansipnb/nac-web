@component('mail::message')

# Halo , <strong>{{$name}}</strong>


Terimakasih telah bergabung menjadi peserta NAC {{$year}} cabang lomba <strong> {{$event}} {{$year}}</strong>  Segera selesaikan pembayaran dan masuk ke dashboard untuk menyelesaikan pendaftaran! 


@component('mail::button', ['url' => 'https://nationalaccountingcompetition.com/login'])
Masuk ke Dashboard
@endcomponent

Salam Hangat,<br>
<br>
Panitia National Accouting Competition

@endcomponent
