<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
</head>

<body data-theme="fantasy">





    <div class="container m-auto">
        <div class="flex h-screen justify-center items-center">
            <div class="w-full lg:w-1/2 shadow p-5 rounded-lg border">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                   <img src="/uploads/setting/{{ $setting->logo }}" class="w-44 h-44 m-auto" alt="{{ $setting->nameen }}" />


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

                    <input class="my-4" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('translate.remember-me') }}
                    </label>


                    <div>
                        <button type="submit" class="btn btn-primary w-full">
                            {{ __('translate.login') }}
                        </button>
                    </div>






                    <div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('translate.forget-password') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex  justify-center">
                        <p>{{ __('translate.no-have-account') }}
                            <a class="btn btn-link " href="{{ route('register') }}">
                                {{ __('translate.register') }}
                            </a>
                        </p>

                    </div>
                </form>
            </div>
        </div>


    </div>
















</body>

</html>
