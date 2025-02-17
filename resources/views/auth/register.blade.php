<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.inc.style')
</head>
<body>



<div class="bg-white d-flex flex-row justify-content-end px-5 py-3">
        <ul class="navbar-nav topbar-nav ">

            <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                </a>



                <ul class="dropdown-menu messages-notif-box animated fadeIn">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="mx-2">
                        <a rel="alternate" class="p-3  d-block" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>



    <div class="container">
        <div class="row h-100 d-flex align-items-center justify-content-center" style="height: 100vh !important">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">{{  __("translate.register") }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="d-block @if (LaravelLocalization::getCurrentLocale() == 'ar') text-end @endif">{{  __("translate.name") }}</label>
    
                                <div class="">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="d-block @if (LaravelLocalization::getCurrentLocale() == 'ar') text-end @endif">{{  __("translate.email") }}</label>
    
                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="d-block @if (LaravelLocalization::getCurrentLocale() == 'ar') text-end @endif">{{  __("translate.password") }}</label>
    
                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                         
    
                            <div class="">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{  __("translate.register") }}
                                </button>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p> {{  __("translate.have-account") }}
                                    <a class="btn btn-link " href="{{ route('login') }}">
                                    {{  __("translate.login") }}
                                    </a>
                                </p>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>