@component('mail::message')

# Halo , <strong>{{$name}}</strong>


Terima Kasih sudah bergabung menjadi peserta NAC 2021 cabang lomba <strong> {{$event}} {{$year}}</strong>  , Segera selesaikan pembayaranmu yaa

@component('mail::button', ['url' => ''])
Masuk ke Dashboard
@endcomponent

Salam Hangat,<br>
<br>
Panitia National Accouting Competition 
{{ config('app.name') }}
@endcomponent
