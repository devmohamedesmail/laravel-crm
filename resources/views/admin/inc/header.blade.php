<div class="navbar bg-base-100 px-5">
    <div class="flex-1">
        <button class="btn btn-primary sidebarBtn text-xl"><i class="fa-solid fa-bars"></i></button>
    </div>




    <div class="flex-none">

        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost avatar">
                {{ LaravelLocalization::getCurrentLocaleNative() }}
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="mx-2">
                        <a rel="alternate" class="p-3  d-block" hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
               
                @if (Auth() && Auth()->user() !== null)
                    <li><a>{{ Auth()->user()->name }}</a></li>
                @endif



                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>


    </div>
</div>
