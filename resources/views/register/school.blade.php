@extends('layouts.users')

@section('content')

<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
<<<<<<< HEAD
      <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">Nama Cabang Lomba</h1>

      <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
        Pendaftaran cabang lomba Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, voluptas?
      </p>

      <form action="" class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


        <div class="bg-input flex justify-center">
            <div class="input flex flex-col w-10/12 xl:w-11/12">
                <form action="" method="">
                    <label for="text" class="font-medium font-semibold">Nama Peserta</label>
                    <div class="relative">

                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Masukkan Nama Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="email" class="font-medium font-semibold">Email</label>
                    <div class="relative">

                        <input
                          type="email"
                          id="email"
                          name="email"
                          placeholder="Masukkan Email Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="text" class="font-medium font-semibold">Password</label>
                    <div class="relative">

                        <input
                          type="password"
                          id="password"
                          name="password"
                          placeholder="Masukkan Password Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="number" class="font-medium font-semibold">NIS</label>
                    <div class="relative">

                        <input
                          type="number"
                          id="identity_code"
                          name="identity_code"
                          placeholder="Masukkan NIS Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                     </div>

                    <label for="text" class="font-medium font-semibold">Jurusan</label>
                    <div class="relative">

                        <input
                          type="text"
                          id="department"
                          placeholder="Masukkan Jurusan Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="select" class="font-medium font-semibold">Kelas</label>
                    <div class="relative">

                          <select
                            id="edu_stage"
                            name="edu_stage"
                            placeholder="Masukkan Textarea"
                            class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                          >
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                          </select>
                    </div>

                    <label for="select" class="font-medium font-semibold">Sekolah/Instansi</label>
                    <div class="relative">

                          <select
                            id="school"
                            placeholder="Masukkan universitas anda"
                            class="w-full mt-2 mb-2 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                          >
                            <option value="">Masukan Sekolah Anda</option>
                          </select>

                          <small for="text" class="font-medium font-semibold">
                            Sekolahmu tidak terdaftar ? Daftarkan
                            <a href="" class="text-blue-400">Disini</a>
                        </small>
                    </div>

                    <label for="number" class="font-medium font-semibold mt-5">No HP Peserta</label>
                    <div class="relative">

                          <input
                            type="number"
                            id="phone"
                            name="phone"
                            placeholder="Masukkan No HP anda"
                            class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                          />
                    </div>

                    <label for="Radio" class="font-medium font-semibold">Jenis Kelamin</label>
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
=======
        <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">{{$data['event_name']}} ({{$data['aliases']}})</h1>

        <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
            Pendaftaran cabang lomba Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, voluptas?
        </p>

        <form action="" class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


            <div class="bg-input flex justify-center">
                <div class="input flex flex-col w-10/12 xl:w-11/12">
                    <form action="" method="">
                        <label for="text" class="font-medium font-semibold">Nama Peserta</label>
                        <div class="relative">

                            <input type="text" id="name" placeholder="Masukkan Nama Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
>>>>>>> e4aef627b9ff92f3634b53ec7a7904041d3c14e5
                        </div>

                        <label for="email" class="font-medium font-semibold">Email</label>
                        <div class="relative">

                            <input type="email" id="email" placeholder="Masukkan Email Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>
<<<<<<< HEAD
                    </div>

                    <label for="text" class="font-medium font-semibold mt-5">Tanggal Lahir</label>
                    <div class="relative">

                        <input
                          type="date"
                          id="date"
                          placeholder="Masukkan Nama Anda"
                          class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                        />
                    </div>

                    <label for="textarea" class="font-medium font-semibold ">Alamat</label>
                    <div class="relative">

                      <textarea
                        rows="4"
                        id="adress"
                        name="adress"
                        placeholder="Masukkan Alamat Anda"
                        class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"
                      ></textarea>
                    </div>

                    <div class="text-center mt-10">
                        <button type="submit" class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                            <span class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                Daftar Sekarang
                            </span>
                        </button>
                    </div>

                </form>
=======

                        <label for="text" class="font-medium font-semibold">Password</label>
                        <div class="relative">

                            <input type="password" id="password" placeholder="Masukkan Password Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>

                        <label for="number" class="font-medium font-semibold">NIS</label>
                        <div class="relative">

                            <input type="number" id="nis" placeholder="Masukkan NIS Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>

                        <label for="text" class="font-medium font-semibold">Jurusan</label>
                        <div class="relative">

                            <input type="text" id="department" placeholder="Masukkan Jurusan Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>

                        <label for="select" class="font-medium font-semibold">Kelas</label>
                        <div class="relative">

                            <select id="semester" placeholder="Masukkan Textarea"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm">
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                        </div>

                        <label for="select" class="font-medium font-semibold">Sekolah/Instansi</label>
                        <div class="relative">

                            <select id="school" placeholder="Masukkan universitas anda"
                                class="w-full mt-2 mb-2 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm">
                                <option value="" disabled>Masukan Sekolah Anda</option>
                                @foreach ($academies as $item)
                                <option value="">{{$item->academy_name}}</option>
                                @endforeach
                            </select>

                            <small for="text" class="font-medium font-semibold">
                                Sekolahmu tidak terdaftar ? Daftarkan
                                <a href="" class="text-blue-400">Disini</a>
                            </small>
                        </div>

                        <label for="number" class="font-medium font-semibold mt-5">No HP Peserta</label>
                        <div class="relative">

                            <input type="number" id="handphone" placeholder="Masukkan No HP anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>

                        <label for="Radio" class="font-medium font-semibold">Jenis Kelamin</label>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="radio" value="1" checked />
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

                        <label for="text" class="font-medium font-semibold mt-5">Tanggal Lahir</label>
                        <div class="relative">

                            <input type="date" id="date" placeholder="Masukkan Nama Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" />
                        </div>

                        <label for="textarea" class="font-medium font-semibold ">Alamat</label>
                        <div class="relative">

                            <textarea rows="4" id="addres" placeholder="Masukkan Alamat Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm"></textarea>
                        </div>

                        <div class="text-center mt-10">
                            <button type="submit"
                                class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                                <span
                                    class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                    Daftar Sekarang
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
>>>>>>> e4aef627b9ff92f3634b53ec7a7904041d3c14e5
            </div>

            </p>
        </form>
    </div>
</div>

@endsection
