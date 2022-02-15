@extends('layouts.users')

@section('content')

<div class="max-w-screen-2xl px-2 py-5 mx-auto sm:px-6  lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
      <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">Data Berhasil Ditambah</h1>

      <p class="max-w-md mx-auto mt-5 text-center text-gray-500">
        Instansi atas nama {{ $academy_name }} Sukses ditambahkan, Lanjutkan memilih cabang lomba yang akan diikut.
      </p>

      <div action="" class="p-8 mt-6 mb-7 space-y-4 text-center">
        <div class="bg-input flex justify-center">
            <div class="input flex flex-col w-10/12 xl:w-11/12">
                <a href="{{ url('/#lomba') }}">
                    <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                        <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                            Pilih Lomba
                        </span>
                    </button>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
