@extends('layouts.users')

@section('content')
    <div class="flex flex-col bg-detail" style="position: relative;">
        <div class="bg-cover bg-center bg-no-repeat w-full h-64 lg:h-96" style="background-image: url({{ asset('img/3.JPG') }} "></div>
            <div class="flex flex-col lg:flex-row w-full items-center absolute top-44 md:top-32 xl:top-52 z-99">
                <div class="lg:ml-24">
                    <div class="bg-cover bg-center bg-no-repeat w-40 h-40 md:w-56 md:h-56 lg:w-80 lg:h-80" style="background-image: url({{ asset('img/1.JPG') }}"></div>
                </div>
                <div class="flex-1 lg:mr-24 lg:ml-10 ml-5 mr-5">
                    <h2 class="text-2xl text-center mt-5 lg:mt-0 lg:text-left xl:text-7xl font-bold">Nama Lomba</h2>
                    <div class="flex flex-row space-x-3 mt-5 text-center lg:text-left">
                        <div class="flex-1 lg:flex-none">
                            <a href="" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

                                <span class="block px-8 py-3 font-medium text-sm text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                    Daftar Lomba
                                </span>
                            </a>
                        </div>
                        <div class="flex-1 lg:flex-none">
                            <a href="" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">

                                <span class="block px-8 py-3 font-medium text-sm text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                    Lebih Lanjut
                                </span>
                            </a>
                        </div>
                    </div>
                    <p class="text-lg leading-relaxed mt-10 text-center lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veritatis rem repudiandae at vitae dolor ipsum. Dolorum, 
                        quisquam ullam sunt provident temporibus alias animi neque sint quidem 
                        praesentium ad error mollitia autem corporis quaerat. Asperiores numquam
                         voluptate voluptatum est saepe? Ipsa amet architecto sed non ea quis illo. 
                         Provident quas quisquam animi. Est voluptatibus quasi, dicta quod autem dolorum 
                         asperiores qui quidem distinctio sed tempore ullam assumenda id placeat nam 
                         accusantium.</p>
                </div>
            
        </div>
    </div>

@endsection