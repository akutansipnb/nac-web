@extends('layouts.users')
@section('content')


<div class="mx-5 my-28"><div class="max-w-xl mx-auto text-center">
    <h2 class="text-2xl font-bold sm:text-3xl">
      Pendaftaran <span class="gradient-text">Berhasil</span>
    </h2>
  
    <p class="mx-auto mt-4 text-sm text-gray-500">
      Halo <span class="font-bold">{{$request->name}}</span> , Waktunya masuk ke dalam akunmu selesaikan proses pendaftaran, Selamat Bergabung
    </p>
  
    <a href={{route('login')}} class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mt-10">

        <span class="block px-14 md:px-20 py-2 md:py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
            Login
        </span>
    </a>
    
  </div></div>
    
@endsection