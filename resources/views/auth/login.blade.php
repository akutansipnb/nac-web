{{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div> --}}

{{-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<title>Document</title>
</head>

<body>
    <div class="items-center flex flex-col md:flex-row bg-white md:mx-96 md:my-20 mx-5 my-10 px-5 md:px-16 py-10 md:py-10 rounded-lg"
        style="box-shadow: 0px 0.5px 40px #999;">
        <div class="flex-1 text-center">
            <h2 class="font-extrabold text-8xl leading-normal" style="color: #FE6F44;">Masuk</h2>
            <div class="flex flex-col mt-16">
                <form action="./proses/login.proses.php" method="POST">
                    <div class="flex m-auto mb-2">
                        <label for="email" class="font-semibold text-lg">Email</label>
                    </div>
                    <input name="input_email" type="email" id="email"
                        class="border-2 border-black w-full px-5 mb-7 py-4 focus:outline-none rounded-lg"
                        placeholder="E-Mail">
                    <div class="flex m-auto mb-2">
                        <label for="password" class="font-semibold text-lg">Password</label>
                    </div>
                    <input name="input_password" id="password" type="password"
                        class="border-2 border-black w-full px-5 py-4 focus:outline-none rounded-lg"
                        placeholder="Password">
                    <input name="login" type="submit"
                        class="w-full text-lg font-semibold text-white tracking-wider px-7 py-4 mt-16 focus:outline-none rounded-lg cursor-pointer hover:bg-blue-500 duration-300 ease-in-out"
                        value="Masuk" style="background-color: #FE6F44;">
                </form>
            </div>
            <p class="text-sm leading-7 mt-3 mb-10">Belum mendaftar lomba? <a href="./register.php"
                    style="color: #FE6F44;"><u>Daftar sekarang</u></a></p>
        </div>
    </div>
</body>

</html> --}}

@extends('layouts.users')

@section('content')

<div class="max-w-screen-xl px-2 py-5 mx-auto sm:px-6 lg:px-8 my-10">
    <div class="max-w-full mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div class="flex flex-col justify-center content-center h-full">
                <h1 class="text-3xl md:text-7xl font-bold text-center gradient-text mt-5 py-3">Check your Dashboard Page</h1>
                <p class="text-center font-medium text-gray-500 text-base my-5">Check the status of your registration, cross time and other important things about competition on your dashboard page!</p>
            </div>
            <div class="p-10 mt-6 mb-5 bg-gray-100 space-y-4 rounded-lg shadow-lg">
                <div class="bg-input flex justify-center">
                    <div class="input flex flex-col w-10/12 xl:w-11/12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="text" class="font-medium font-semibold">Email</label>
                            <div class="relative mb-5">
                                @csrf
                                <input type="text" id="username" name="email" placeholder="Input Your Email"
                                    class="w-full mt-2 p-4 pr-4 border-2 border-gray-200  rounded-lg sm:text-sm @error('email') border-red-500 @enderror"/>
                                    @error('email')
                                    <small class="text-red-500 font-bold">{{ $message }} </small>
                                    @enderror

                            </div>

                            <label for="number" class="font-medium font-semibold mt-5">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Input Your Password"
                                    class="w-full mt-2 p-4 pr-4 border-2 border-gray-200 rounded-lg sm:text-sm @error('password') border-red-500 @enderror" />

                                @error('password')
                                <small class="text-red-500 font-bold">{{ $message }} </small>
                                @enderror
                            </div>

                            <div class="text-center mt-10">
                                <button type="submit"
                                    class="inline-block p-0.5 rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                                    <span
                                        class="block px-20 py-3 font-medium text-white bg-gray-900 rounded-full hover:bg-opacity-75">
                                        Login
                                    </span>
                                </button>
                            </div>

                            <hr class="border-gray-300 my-5">
                            <p>Don't have an account? <span class="gradient-text font-semibold hover:font-bold"><a href="/">Register Now</a></span></p>


                        </form>
                    </div>
                </div>

                </p>
            </div>
        </div>
    </div>
</div>

@endsection
