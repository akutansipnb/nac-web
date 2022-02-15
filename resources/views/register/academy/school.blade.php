@extends('layouts.users')

@section('content')

<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
      <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">Daftarkan Sekolahmu !</h1>

      <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
        Sekolahmu belum terdaftar ? Daftarkan sekarang
      </p>

      {{-- success --}}
      {{-- @if(session('success'))
      <div class="flex p-4 text-white bg-green-600 rounded mt-4" role="alert">
          <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="ml-3 -mt-0.25">
            <h3 class="text-sm font-medium">
              {{ session('success') }}
            </h3>
          </div>
        </div>
      @endif --}}

      <div action="" class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


        <div class="bg-input flex justify-center">
            <div class="input flex flex-col w-10/12 xl:w-11/12">
                <form action="{{route('academies.store')}}" method="POST">

                    <label for="text" class="font-medium font-semibold">Nama Sekolah/Instansi</label>
                    <div class="relative">
                      <input type="hidden" name="academy_type" value="school">
                      @csrf
                        <input
                          type="text"
                          id="name"
                          name="academy_name"
                          placeholder="Masukkan Nama Sekolah/Instansi Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                          required
                        />
                    </div>

                    <label for="number" class="font-medium font-semibold mt-5">No Telepon Sekolah/Instansi</label>
                    <div class="relative">

                          <input
                            type="number"
                            id="handphone"
                            name="phone"
                            placeholder="Masukkan Telepon Sekolah/Instansi anda"
                            class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                            required
                          />
                    </div>

                    <label for="textarea" class="font-medium font-semibold ">Alamat Sekolah/Instansi</label>
                    <div class="relative">

                      <textarea
                        rows="4"
                        id="addres"
                        name="address"
                        placeholder="Masukkan Alamat Sekolah/Instansi Anda"
                        class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        required
                      ></textarea>
                    </div>

                    <div class="text-center mt-10">
                        <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                Daftarkan
                            </span>
                        </button>
                    </div>

                </form>
            </div>
        </div>

        </p>
      </div>
    </div>
  </div>

@endsection
