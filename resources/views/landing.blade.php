@extends('layouts.users')

@section('content')
   {{-- Hero Section --}}
   <section class="hero-section">
    <div class="banner-logo">
        <h1>National</h1>
        <h1 class="gradient-text">Accounting</h1>
        <h1>Competition</h1>
    </div>
    <div class="px-10 md:px-52 text-center my-10">
        <p class="championship-theme">"Melalui Kompetisi Wujudkan Sumber Daya Manusia di bidang Akuntansi dan
            Perpajakan yang Berkualitas, Kompetitif dan Berintegritas di Era Digital"</p>
    </div>
    <div class="flex-col text-center">

        <a href="" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                Daftar Sekarang
            </span>
        </a>
        <a href="" class="inline-block px-5 md:my-0 my-3 text-gray-400 hover:text-gray-600 transition-100 delay-50 font-bold">
            Ketentuan Lomba
        </a>
    </div>
</section>
{{-- CTA Intro --}}
<section class="mx-5">
    <aside class="relative overflow-hidden text-gray-300 bg-gray-900 rounded-xl lg:flex shadow shadow-lg">
        <div class="w-full p-12 text-center lg:w-1/2 sm:p-16 lg:p-24 lg:text-left">
            <div class="max-w-xl mx-auto lg:ml-0">
                <p class="text-sm font-medium">
                    National Accounting Competition 2021
                </p>

                <p class="mt-2 text-2xl font-bold text-white sm:text-3xl">
                    Semangat Baru untuk edukasi pada akutansi
                </p>

                <p class="hidden lg:mt-4 lg:block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed.
                    Quam a scelerisque
                    amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum
                    tincidunt duis.
                </p>

                <a href=""
                    class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 my-5">
                    <span
                        class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                        Unduh Panduan
                    </span>
                </a>

            </div>
        </div>

        <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
            <img src="{{asset('img/theme/cta_icon.jpg')}}" alt="Accounting Tools"
                class="absolute inset-0 object-cover w-full h-full" />
        </div>
    </aside>

</section>

{{-- Text Lomba --}}
<div class="grid grid-cols-1 mx-5 mt-20">
    <div class="text-center">
        <h2 class="font-bold text-2xl">Daftar Lomba</h2>
    </div>
</div>

{{-- Daftar Lomba --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 mx-5 md:mx-20 mt-10 mb-20">

    @foreach ($event as $item)
    <div class="block overflow-hidden bg-white shadow-xl rounded-2xl" href="">
        <img class="object-cover w-full h-56" src="{{asset($item->background_url)}}" alt="" />

        <div class="relative pt-20 text-center">
            <div
                class="absolute w-24 h-24 bg-white rounded-xl shadow-xl transform -translate-x-1/2 -top-10 left-1/2">
                <img src="{{asset($item->icon_url)}}" alt="" class="p-3">
            </div>

            <div class="px-6 sm:px-12">
                <h5 class="text-xl font-bold text-gray-900">{{$item->event_name}}</h5>

                <p class="mt-2 text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur commodi eligendi officiis
                    laboriosam autem
                    eveniet.
                </p>
            </div>

            <dl
                class="flex flex-col items-center justify-center px-6 py-4 mt-6 border-t border-gray-100 sm:flex-row sm:items-start sm:px-12">
                <div class="flex items-center">
                    <a href=""
                        class="p-0.5 w-full font-medium text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-lg transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                        <span
                            class="block text-sm px-8 py-2 font-medium text-white bg-gray-900 rounded-lg hover:bg-opacity-75">
                            Daftar
                        </span>
                    </a>

                </div>

                <div class="flex items-center mt-3 sm:ml-3 sm:mt-0">
                    <a href={{route('event.detail',['id' => $item->id])}}
                        class="px-8 py-2 text-sm font-medium text-black rounded-lg transition transform inline-bloc hover:scale-110 hover:shadow-xl">
                        Detail Lomba
                    </a>

                </div>
            </dl>
        </div>
    </div>
    @endforeach

   



  
</div>
<div class="bg-gray-100 flex flex-col">

    <div class="grid grid-cols-1 mx-5 mt-16">
        <div class="text-center">
            <h2 class="font-bold text-2xl">Daftar Berita</h2>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 mx-5 md:mx-20 mt-10 mb-20">

        <div class="block border-2 rounded-lg bg-white">
            <img class="object-cover w-full h-96" src="https://www.hyperui.dev/code/photos/art-1.jpeg" alt="" />

            <div class="mx-5">
                <h5 class="mt-4 text-xl font-bold text-gray-900">Lorem, ipsum dolor.</h5>

                <p class="max-w-sm mt-2 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
                </p>
            </div>

            <div class="my-5 text-center">
                <a href=""
                    class="inline-block p-0.5 rounded-lg bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                    <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-lg hover:bg-opacity-75">
                        Detail Berita
                    </span>
                </a>
            </div>
        </div>

        <div class="block border-2 rounded-lg bg-white">
            <img class="object-cover w-full h-96" src="https://www.hyperui.dev/code/photos/art-1.jpeg" alt="" />

            <div class="mx-5">
                <h5 class="mt-4 text-xl font-bold text-gray-900">Lorem, ipsum dolor.</h5>

                <p class="max-w-sm mt-2 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
                </p>
            </div>

            <div class="my-5 text-center">
                <a href=""
                    class="inline-block p-0.5 rounded-lg bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                    <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-lg hover:bg-opacity-75">
                        Detail Berita
                    </span>
                </a>
            </div>
        </div>

        <div class="block border-2 rounded-lg bg-white">
            <img class="object-cover w-full h-96" src="https://www.hyperui.dev/code/photos/art-1.jpeg" alt="" />

            <div class="mx-5">
                <h5 class="mt-4 text-xl font-bold text-gray-900">Lorem, ipsum dolor.</h5>

                <p class="max-w-sm mt-2 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reiciendis sequi ipsam incidunt.
                </p>
            </div>

            <div class="my-5 text-center">
                <a href=""
                    class="inline-block p-0.5 rounded-lg bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                    <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-lg hover:bg-opacity-75">
                        Detail Berita
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>
    
@endsection