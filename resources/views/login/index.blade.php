@extends('layouts.users')

@section('content')

<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
      <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">Login</h1>

      <div action="" class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


        <div class="bg-input flex justify-center">
            <div class="input flex flex-col w-10/12 xl:w-11/12">
                <form action="" method="POST">
                    <label for="text" class="font-medium font-semibold">Username</label>
                    <div class="relative">
                      <input type="hidden" name="academy_type" value="university">
                      @csrf
                        <input
                          type="text"
                          id="username"
                          name="username"
                          placeholder="Masukkan Username Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="number" class="font-medium font-semibold mt-5">Password</label>
                    <div class="relative">

                          <input
                            type="text"
                            id="password"
                            name="password"
                            placeholder="Masukkan Password Anda"
                            class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                          />
                    </div>

                    <div class="text-center mt-10">
                        <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                Login
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
