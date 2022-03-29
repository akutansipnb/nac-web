@component('mail::message')
# Halo , <strong>{{$name}}</strong>

Pendaftaran mu berhasil di verifikasi , silahkan masuk ke group peserta melalui link berikut

@component('mail::button', ['url' => $group_url])
Bergabung ke Group Lomba
@endcomponent

Salam Hangat,<br>
Panitia National Accounting Competition
@endcomponent
