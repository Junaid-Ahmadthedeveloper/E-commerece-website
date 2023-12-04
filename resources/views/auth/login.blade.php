{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eflyer</title>

    <link rel="shortcut icon" href="{{ asset("loginassets/images/fav.jpg") }}">
    <link rel="stylesheet" href="{{ asset("loginassets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("loginassets/css/fontawsom-all.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("loginassets/css/style.css") }}" />
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row cdvfdfd">
                <div class="col-lg-10 col-md-12 login-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 log-det">
                            <div class="small-logo">
                                <i class="fab fa-asymmetrik"></i> Eflyer Login
                            </div>
                            <p class="dfmn">Enter login details and feel a vast Experience. </p>



                            <div class="text-box-cont">
                                <form method="POST" action="{{ route('login') }}">
                             @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Password..." name="password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group center">
                                    <button class="btn btn-danger btn-round">Login</button>
                                    {{-- <a href="{{ route('register')}}"  class="btn btn-danger btn-round"></a> --}}
                                </div>
                            </form>
                                <div class="row">
                                    <p class="forget-p">Don't have an account? <span><a href="{{ route('register')}}" style="color:rgb(206, 66, 66);">Register Now</a></span></p>
                                </div>
                                 <div class="row">
                                    <p class="small-info">Connect With Social Media</p>
                                </div>
                            </div>



                            <div class="row">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </div>



                        </div>
                        <div class="col-lg-6 col-md-6 box-de">
                           <div class="inn-cover">
                               <div class="ditk-inf">
                                   <div class="small-logo">
                                <i class="fab fa-asymmetrik"></i> Eflyer Login
                            </div>
                                    <h2 class="w-100">Din't Have an Account </h2>
                                    <p>Simply Create your account by clicking the Register Button</p>
                                    <a href="{{ route('register')}}">
                                    <button type="button" class="btn btn-outline-light">Register</button>
                                    </a>
                                </div>
                                 {{-- <div class="foter-credit">
                                  <a href="https://smarteyeapps.com/">Designed by : Smartey</a>
                               </div> --}}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset("loginassets/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("loginassets/js/popper.min.js") }}"></script>
<script src="{{ asset("loginassets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("loginassets/js/script.js") }}"></script>


</html>


