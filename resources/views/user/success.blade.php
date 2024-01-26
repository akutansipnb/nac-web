@extends('layouts.users')
@section('content')


<div class="mx-5 my-28"><div class="max-w-xl mx-auto text-center">
    <h2 class="text-2xl font-bold sm:text-3xl">
      <span class="gradient-text">Successful Registration</span>
    </h2>

    <p class="mx-auto mt-4 text-sm text-gray-500">
        Hello <span class="font-bold">{{$request->name}}</span> , Please login to your account to complete the registration process, Happy Joining
    </p>

    <a href={{route('login')}} class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mt-10">

        <span class="block px-14 md:px-20 py-2 md:py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
            Login
        </span>
    </a>

  </div></div>

@endsection
