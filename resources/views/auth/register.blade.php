{{-- <x-guest-layout> --}}
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}


    {{-- </x-guest-layout> --}}


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
                                <i class="fab fa-asymmetrik"></i> Eflyer Register
                            </div>
                            <p class="dfmn">Enter Your details and feel a vast Experience. </p>



                            <div class="text-box-cont">
                                <form method="POST" action="{{ route('register') }}">
                             @csrf
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Enter username..." aria-label="Username" aria-describedby="basic-addon1">
                                <p class="text-danger">
                                    @error('name')
                                    {{ $message}}
                                    @enderror
                                </p>
                            </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email..." aria-label="Username" aria-describedby="basic-addon1">
                                    <p class="text-danger">
                                        @error('email')
                                        {{ $message}}
                                        @enderror
                                    </p>
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Password..." name="password" aria-label="Username" aria-describedby="basic-addon1">
                                    <p class="text-danger">
                                        @error('password')
                                        {{ $message}}
                                        @enderror
                                    </p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Password..." name="password_confirmation" aria-label="Username" aria-describedby="basic-addon1">
                                    <p class="text-danger">
                                        @error('password_confirmation')
                                        {{ $message}}
                                        @enderror
                                    </p>
                                </div>

                                <div class="input-group center">
                                    <button class="btn btn-danger btn-round">Register</button>
                                    {{-- <a href="{{ route('register')}}"  class="btn btn-danger btn-round"></a> --}}
                                </div>
                            </form>
                                <div class="row">
                                    <p class="forget-p">Do you have an account? <span><a href="{{ route('login')}}" style="color:rgb(206, 66, 66);">Login Now</a></span></p>
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
                                <i class="fab fa-asymmetrik"></i> Eflyer Register
                            </div>
                                    <h2 class="w-100">Do you Have an Account </h2>
                                    <p>SimplyLogin to your account by clicking the Login Button</p>
                                    <a href="{{ route('login')}}">
                                    <button type="button" class="btn btn-outline-light">Login</button>
                                    </a>
                                </div>
                                 {{-- <div class="foter-credit">
                                  <a href="https://smarteyeapps.com/">Designed by E</a>
                               </div> --}}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br><br><br>
<script src="{{ asset("loginassets/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("loginassets/js/popper.min.js") }}"></script>
<script src="{{ asset("loginassets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("loginassets/js/script.js") }}"></script>


</html>

