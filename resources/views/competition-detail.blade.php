@extends('layouts.users')
@section('content')
<div class="block overflow-hidden bg-white" href="">
    <img class="object-cover w-full h-52 md:h-96" src="{{asset($data['background_url'])}}" alt="" />

    <div class="relative pt-20 text-center">
        <div
            class="absolute w-32 w-32 md:w-56 md:h-56 bg-white rounded-xl shadow-xl transform -translate-x-1/2 -top-14 md:-top-24 left-1/2">
            <img src="{{asset($data['icon_url'])}}" alt="" class="p-3 md:p-10">
        </div>
        <div class="px-12 sm:px-12 mt-5 md:mt-20">
            <h5 class="text-4xl font-bold text-gray-900"> {{$data['event_name']}} <span class="text-gray-600"> ({{$data['aliases']}})</span> {{$data['year']}} </h5>
            <p class="mt-2 text-sm text-gray-500">
                {{$data['desc']}}
            </p>
        </div>
        <dl class="flex flex-row items-center justify-center px-6 py-4 mt-3 sm:flex-row sm:items-start sm:px-12">
            <div class="flex items-center">
                @if ($data['status'] == 'open')
                    <a href={{route('event.form',['id' => $data['id']])}}
                        class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                        <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                            Daftar Sekarang
                        </span>
                    </a>
                @else
                    <a href="#"
                        class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-full transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                        <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                            Pendaftaran Ditutup
                        </span>
                    </a>
                @endif
                
            </div>
            
            <div class="flex items-center content-center sm:ml-3 sm:mt-0">
                <a href=""
                    class="px-6 py-3 my-auto font-medium text-gray-400 rounded-lg transition transform inline-block hover:text-gray-800 ">
                    Pedoman Lomba
                </a>

            </div>
        </dl>

        {{-- CTA Intro --}}
        {{-- <aside class="relative overflow-hidden text-gray-300 bg-gray-900 md:rounded-xl m-0 lg:flex md:m-5">
            <div class="w-full p-12 text-center lg:w-1/2 sm:p-16 lg:p-24 lg:text-left">
                <div class="max-w-xl mx-auto lg:ml-0">
                    <p class="text-sm font-medium">{{$data['event_name']}} <span class="text-gray-600"> ({{$data['aliases']}})</p>

                    <p class="mt-2 text-2xl font-bold text-white sm:text-3xl">
                       {{ $data['quotes']}}
                    </p>

                    <p class="hidden lg:mt-4 lg:block">
                        {{$data['blog']}}
                    </p>

                    
                </div>
            </div>

            <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
                <img src="{{asset($data['background_url'])}}" alt="Women smiling at college"
                    class="absolute inset-0 object-cover w-full h-full" />
            </div>
        </aside> --}}
        <section class="text-white bg-gray-900">
            <div class="max-w-screen-2xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
              <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl gradient-text">
                    {{ $data['quotes']}}
                </h1>
          
                <p class="mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                    {{$data['blog']}}
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="#lomba" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

                        <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                            Contact Person 1
                        </span>
                    </a>
            
                    <a href="#lomba" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

                        <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                            Contact Person 2
                        </span>
                    </a>
                  </div>
          
                
              </div>
            </div>
          </section>
    </div>
</div>

@endsection
