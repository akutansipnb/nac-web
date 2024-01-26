@extends('layouts.users')

@section('content')

<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-lg mx-auto">
        <h1 class="text-2xl font-bold text-center gradient-text sm:text-3xl">{{$data['event_name']}} ({{$data['aliases']}})</h1>

        <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
            Registration for Competition Branches
        </p>

        <div class="p-8 mt-6 mb-5 space-y-4 rounded-lg shadow-2xl">


            <div class="bg-input flex justify-center">
                <div class="input flex flex-col w-10/12 xl:w-11/12">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf

                        {{-- Nama Peserta --}}
                        <input type="hidden" name="id_events" value="{{ $data['id'] }}">
                        <label for="text" class="font-medium font-semibold">Name</label>
                        <div class="relative">

                            <input type="text" id="name" name="name" placeholder="Input Your Name"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required/>
                        </div>

                        {{-- Email --}}
                        <label for="email" class="font-medium font-semibold">Email</label>
                        <div class="relative">

                            <input type="email" id="email" name="email" placeholder="Input Your Email"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm  @error('email') border-red-300 @enderror" required/>
                                @error('email')
                                    <div class="mb-5">
                                        <p class="text-xs text-red-200"> {{ $message }} </p>
                                    </div>
                                @enderror
                        </div>

                        {{-- Password --}}
                        <label for="text" class="font-medium font-semibold">Password</label>
                        <div class="relative">

                            <input type="password" id="password" name="password" placeholder="Input Your Password"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required/>
                        </div>

                        {{-- NIS --}}
                        <label for="number" class="font-medium font-semibold">NIS</label>
                        <div class="relative">

                            <input type="number" name="identity_code" placeholder="Input Your NIS"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm @error('identity_code') border-red-300 @enderror" required/>
                                @error('identity_code')
                                    <div class="mb-5">
                                        <p class="text-xs text-red-200"> {{ $message }} </p>
                                    </div>
                                @enderror
                        </div>

                        {{-- Jurusan --}}
                        <label for="text" class="font-medium font-semibold">Department</label>
                        <div class="relative">

                            <input type="text" id="department" name="department" placeholder="Input Your Departement"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required/>
                        </div>

                        {{-- Kelas --}}
                        <label for="select" class="font-medium font-semibold">Class</label>
                        <div class="relative">

                            <select id="semester" name="edu_stage" placeholder="Masukkan Textarea"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>

                        {{-- Sekolah/Instansi --}}
                        <label for="select" class="font-medium font-semibold">School/Institution</label>
                        <div class="relative mb-5">

                            <select id="school" name="id_academy" placeholder="Masukkan universitas anda"
                                class="w-full mt-2 mb-2 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required>
                                <option value="" disabled>Select your school here</option>
                                @foreach ($academies as $item)
                                <option value={{ $item->id }}>{{$item->academy_name}}</option>
                                @endforeach
                            </select>

                            <small for="text" class="font-medium font-semibold">
                                Your school is not registered yet? Register now
                                <a href="{{ route('academies.scholl') }}" class="text-blue-400">Click Here</a>
                            </small>
                        </div>

                        {{-- NO HP Peserta --}}
                        <label for="number" class="font-medium font-semibold ">Participant's Phone Number</label>
                        <div class="relative">

                            <input type="number" id="phone" name="phone" placeholder="Input Your Phone Number"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required/>
                        </div>

                        {{-- Jenis Kelamin --}}
                        <label for="Radio" class="font-medium font-semibold">Gender</label>
                        <div class="relative mb-5">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="gender" value="1" checked required/>
                                    <span class="ml-2">Male</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="gender" value="2" required/>
                                    <span class="ml-2">Female</span>
                                </label>
                            </div>
                        </div>

                        {{-- Tanggal Lahir --}}
                        <label for="text" class="font-medium font-semibold mt-5">Date of Birth</label>
                        <div class="relative">

                            <input type="date" id="date" name="birth_date" placeholder="Masukkan Nama Anda"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required/>
                        </div>

                        {{-- Alamat --}}
                        <label for="textarea" class="font-medium font-semibold ">Address</label>
                        <div class="relative">

                            <textarea rows="4" id="addres" name="adress" placeholder="Input Your Address"
                                class="w-full mt-2 mb-5 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm" required></textarea>
                        </div>

                        {{-- Daftar Sekarang --}}
                        <div class="text-center mt-10">
                            <button type="submit"
                                class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                                <span
                                    class="block px-8 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                    Register Now
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
