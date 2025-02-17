<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="/template/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">

            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">






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






















                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="/template/assets/img/profile.jpg" alt="..."
                                class="avatar-img rounded-circle" />
                        </div>
                        <span class="profile-username">

                            @if(Auth() && Auth()->user() !== null)
                            <span class="op-7">{{ Auth()->user()->name }}</span>
                            
                            @endif

                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        <img src="/template/assets/img/profile.jpg" alt="image profile"
                                            class="avatar-img rounded" />
                                    </div>
                                    <div class="u-text">
                                        <!--  -->
                                        @if(Auth() && Auth()->user() !== null)
                                        <h4>{{ Auth()->user()->name }}</h4>
                                     
                                        @endif
                                        <p class="text-muted">
                                        @if(Auth() && Auth()->user() !== null)
                                          <h4>{{ Auth()->user()->email }}</h4>
                                          @else
                                          <script>
                                            window.location.href = "{{ route('login') }}";
                                          </script>
                                        @endif
                                        </p>
                                        <a href="profile.html"
                                            class="btn btn-xs btn-secondary btn-sm">
                                            {{__('translate.profile')}}
                                        
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>


                                <a class="dropdown-item" href="#">Account Setting</a>
                                <div class="dropdown-divider"></div>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>