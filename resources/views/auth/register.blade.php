<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>



    <body>
        <header id="font">
            <div class="row justify-content-center m-auto" id="bgcolor">
                <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#"><img src="/images/logonav.png" alt="Foodies"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="bi bi-list text-white"></i></span>
                        </button>
                        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                            <div class="navbar-nav me-auto ms-auto text-white gap-4 gap-sm-0 gap-md-0 gap-lg-4">
                                <a class="text-decoration-none h3 fw-bolder" href="index.html">Home</a>
                                <a class="text-decoration-none fw-bolder h3" href="product.html">Product</a>
                                <a class="text-decoration-none fw-bolder h3" href="product.html">Shop</a>
                                <a class="text-decoration-none fw-bolder h3" href="aboutus.html">About</a>
                                <a class="text-decoration-none fw-bolder h3" href="contactus.html">Blog</a>
                            </div>
                            <div class="navbar-nav">
                                <div class="mt-2">
                                    <a href="#"><i class="bi bi-search text-white h3"></i></a>
                                    <a class="ms-4 ms-lg-4 fw-bolder" href="addtocard.html"><i
                                            class="bi bi-bag text-white h3 fw-bolder"></i></a>
                                    <a class="ms-4 ms-lg-4 " href="#"><i
                                            class="bi bi-chat-left-text-fill text-white h3 fw-bolder"></i></a>
                                </div>
                                <div class="">
                                    <a href="login.html" class="text-decoration-none">
                                        <button type="button"
                                            class="btn btn-warning btn-md ps-4 pe-4 mb-3 ms-lg-4 border-0 rounded-1">Login
                                        </button>
                                    </a>
                                    <a href="signup.html" class="text-decoration-none">
                                        <button type="button"
                                            class="btn btn-outline-light btn-md ps-3 pe-3 mb-3 ms-2 border-2 rounded-1">Sign
                                            Up
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main id="font">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">
                        <img class="img-fluid" src="/images/signup.png" alt="Login">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-center mt-5" style="font-family: 'Josefin Sans', sans-serif;">
                            <img class="img-fluid" src="/images/logo.png" alt="FoxyStepStore">
                            <h3 class="fw-bolder mt-3">Sign Up<span> Page</span></h3>
                        </div>
                        <div class="row mt-5">
                            <div class="col-10 offset-1">
                                <form action="" class="mt-3">
                                    <div class="input-group border-0 border-bottom border-3 border-dark" id="signup">
                                        <input type="text" class=" w-50  border-0" placeholder="First Name
                      ">
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-5"
                                        id="signup">
                                        <input type="text" class="w-50 border-0" placeholder="Last Name">
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-5"
                                        id="signup">
                                        <input type="text" class="w-50 border-0" placeholder="Email">
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-4"
                                        id="signup">
                                        <input type="text" class="w-75 border-0" placeholder="Password"><i
                                            class="bi bi-eye h1 fw-bold ms-lg-5 ps-lg-4 mb-0"></i>
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-4"
                                        id="signup">
                                        <input type="text" class="w-75 border-0" placeholder="Confirm Password"><i
                                            class="bi bi-eye h1 fw-bold ms-lg-5 ps-lg-4 mb-0"></i>
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-5"
                                        id="signup">
                                        <input type="text" class="w-50 border-0" placeholder="Phone Number">
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-5"
                                        id="signup">
                                        <input type="text" class="w-50 border-0" placeholder="Address">
                                    </div>
                                    <div class="input-group border-0 border-bottom border-3 border-dark mt-5"
                                        id="signup">
                                        <input type="text" class="w-50 border-0" placeholder="Pin Code
                      ">
                                    </div>
                                    <div class="form-check mt-4">
                                        <input class="form-check-input border-2 border-dark rounded-0" type="checkbox"
                                            value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            By proceeding, i agree to Foxy step store <a href="#"
                                                style="color: #3F3BAC;">Terms of Use</a> and acknowledge that i have
                                            read the By <a href="#" style="color: #3F3BAC;">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <h6 class="fw-bold text-end mt-2">Already have an account? <a href="login.html"
                                            class="text-dark">Log in</a></h6>
                                    <a href="login.html">
                                        <button type="button"
                                            class="btn-warning border-0 rounded-3 ps-5 pe-5 pt-3 pb-3 h5 mt-3 shadow-lg">Sign
                                            Up</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="/javascript.js"></script>
    </body>






































</x-guest-layout>