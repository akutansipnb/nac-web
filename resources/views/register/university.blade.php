@extends('layouts.users')

@section('content')
      
<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
      <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">Nama Cabang Lomba</h1>
  
      <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
        Pendaftaran cabang lomba Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, voluptas?
      </p>
  
      <form action="" class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


        <div class="bg-input flex justify-center">
            <div class="input flex flex-col w-10/12 xl:w-11/12">
                <form action="" method="">
                    <label for="text" class="font-medium font-semibold">Text</label>
                    <div class="relative">
                      
                        <input
                          type="text"
                          id="text"
                          placeholder="Masukkan Text"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                      </div>

                      <label for="email" class="font-medium font-semibold">Email</label>
                    <div class="relative">
                      
                        <input
                          type="email"
                          id="email"
                          placeholder="Masukkan Email"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                      </div>

                      <label for="number" class="font-medium font-semibold">Number</label>
                    <div class="relative">
                      
                        <input
                          type="number"
                          id="number"
                          placeholder="Masukkan Number"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                      </div>

                      <label for="textarea" class="font-medium font-semibold">Textarea</label>
                    <div class="relative">
                      
                        <textarea
                          rows="4"
                          id="textarea"
                          placeholder="Masukkan Textarea"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        ></textarea>
                      </div>

                      <label for="select" class="font-medium font-semibold">Select</label>
                    <div class="relative">
                      
                        <select
                          id="select"
                          placeholder="Masukkan Textarea"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        >
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                      </div>
                      <label for="Radio" class="font-medium font-semibold">Radio</label>
                      <div class="mt-2">
                        <div>
                          <label class="inline-flex items-center">
                            <input
                              type="radio"
                              class="form-radio"
                              name="radio"
                              value="1"
                              checked
                            />
                            <span class="ml-2">Laki-laki</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="radio" value="2" />
                            <span class="ml-2">Perempuan</span>
                          </label>
                        </div>
                      </div>
                      <div class="text-center mt-10">
                        <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                Daftar Sekarang
                            </span>
                        </button>
                      </div>
                      
                </form>
            </div>
        </div>

        </p>
      </form>
    </div>
  </div>
      
@endsection