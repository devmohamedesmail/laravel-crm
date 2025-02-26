<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-theme="fantasy">



    <div class="container m-auto">
        <div class="flex h-screen justify-center items-center">
            <div class="w-full  lg:w-1/3 shadow p-5 rounded-3xl mx-3 border relative  pt-32">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="absolute bg-gray-600 -top-24 border-4 w-fit rounded-full left-0 m-auto right-0">
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
                        <button type="submit" class="btn btn-primary w-full">
                            {{ __('translate.register') }}
                        </button>
                    </div>
                    <div class="flex items-center justify-center">
                        <p> {{ __('translate.have-account') }}
                            <a class="btn btn-link " href="{{ route('login') }}">
                                {{ __('translate.login') }}
                            </a>
                        </p>

                    </div>
                </form>
            </div>
        </div>
    </div>


   
</body>

</html>
