<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-theme="fantasy">


    <div class="container m-auto ">
        <div class="flex h-screen justify-center  items-center ">
            <div class="w-full  lg:w-1/3 shadow  rounded-3xl relative overflow-hidden mx-3  border">

                <div id="regiser-form" class="left-0 right-0 top-0 bottom-0 -translate-y-full  transition-transform ease-linear duration-500  shadow p-5 rounded-3xl bg-fuchsia-900  border absolute ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    
                        <div class="bg-gray-600  border-4 w-fit my-5 rounded-full  m-auto ">
                            <img src="/uploads/setting/{{ $setting->logo }}" class="w-36 h-36 m-auto"
                                alt="{{ $setting->nameen }}" />
                        </div>
    
    
                        <div>
                            <label class="input input-bordered input-primary flex items-center gap-2">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" class="grow  @error('name') is-invalid @enderror" placeholder="Name"
                                    name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus />
                            </label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                               @enderror
                        </div>
    
    
    
                        
                            <div class="my-4">
                                <label class="input input-bordered input-primary flex items-center gap-2">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" class="grow @error('email') is-invalid @enderror" placeholder="Email"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                </label>
        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
    
    
    
    
                       
    
                       
    
    
    
    
                        <div class="my-4">
                            <label class="input input-bordered input-primary flex items-center gap-2">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" class="grow @error('password') is-invalid @enderror"
                                    placeholder="Password" name="password"
                                    required  />
                            </label>
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
    
    
                        <div class="">
                            <button type="submit" class="btn btn-accent my-5 w-full">
                                {{ __('translate.register') }}
                            </button>
                        </div>
                       
                        <button id="login-btn" type="button" class="btn btn-outline w-full btn-accent" >{{ __('translate.login') }}</button>
                    </form>
                </div>

                <div class="p-5">
                    <form method="POST"  action="{{ route('login') }}">
                        @csrf
    
                        <div class=" bg-gray-600  border-4 w-fit my-10 rounded-full  m-auto ">
                            <img src="/uploads/setting/{{ $setting->logo }}" class="w-36 h-36 m-auto"
                                alt="{{ $setting->nameen }}" />
                        </div>
    
    
    
                        <div class="my-4">
                            <label class="input input-bordered input-primary flex items-center gap-2">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" class="grow @error('email') is-invalid @enderror" placeholder="Email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            </label>
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="my-4">
                            <label class="input input-bordered input-primary flex items-center gap-2">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" class="grow @error('password') is-invalid @enderror"
                                    placeholder="Password" name="password" required autocomplete="current-password" />
                            </label>
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
    
    
                        <div class="flex justify-between items-center">
                            <div>
                                <input class="my-4" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
    
                                <label class="form-check-label" for="remember">
                                    {{ __('translate.remember-me') }}
                                </label>
                            </div>
    
    
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('translate.forget-password') }}
                                    </a>
                                @endif
                            </div>
    
    
    
    
    
                        </div>
    
    
                        <div>
                            <button type="submit" class="btn btn-primary w-full">
                                {{ __('translate.login') }}
                            </button>
                        </div>
    
    
    
                        <button id="register-btn" type="button"  class="btn btn-accent my-5 w-full">{{ __('translate.register') }}</button>
    
                         
    
                       
                    </form>
                </div>
                
            </div>
        </div>
    </div>




    <script>
        const registerBtn = document.getElementById('register-btn');
        const loginBtn = document.getElementById('login-btn');
        const registerForm = document.getElementById('regiser-form');

        registerBtn.addEventListener('click', () => {
            registerForm.classList.remove('-translate-y-full');
            
        })


        loginBtn.addEventListener('click',()=>{
            registerForm.classList.add('-translate-y-full');
        });
    </script>
</body>

</html>
