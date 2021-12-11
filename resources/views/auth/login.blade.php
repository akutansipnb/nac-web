
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
    </div>

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
        <div class="items-center flex flex-col md:flex-row bg-white md:mx-96 md:my-20 mx-5 my-10 px-5 md:px-16 py-10 md:py-10 rounded-lg" style="box-shadow: 0px 0.5px 40px #999;">
            <div class="flex-1 text-center">
                <h2 class="font-extrabold text-8xl leading-normal" style="color: #FE6F44;">Masuk</h2>
                <div class="flex flex-col mt-16">
                <form action="./proses/login.proses.php" method="POST">
                    <div class="flex m-auto mb-2">
                        <label for="email" class="font-semibold text-lg">Email</label>
                    </div>
                    <input name="input_email" type="email" id="email" class="border-2 border-black w-full px-5 mb-7 py-4 focus:outline-none rounded-lg" placeholder="E-Mail">
                    <div class="flex m-auto mb-2">
                        <label for="password" class="font-semibold text-lg">Password</label>
                    </div>
                    <input name="input_password" id="password" type="password" class="border-2 border-black w-full px-5 py-4 focus:outline-none rounded-lg" placeholder="Password">
                    <input name="login" type="submit" class="w-full text-lg font-semibold text-white tracking-wider px-7 py-4 mt-16 focus:outline-none rounded-lg cursor-pointer hover:bg-blue-500 duration-300 ease-in-out" value="Masuk"  style="background-color: #FE6F44;">
                </form>
                </div>
                    <p class="text-sm leading-7 mt-3 mb-10">Belum mendaftar lomba? <a href="./register.php" style="color: #FE6F44;"><u>Daftar sekarang</u></a></p>
            </div>
        </div>
    </body>
    </html> --}}