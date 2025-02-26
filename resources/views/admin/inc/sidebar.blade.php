<div class="">


    <ul class="mt-10 ">
        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>
                {{ __('translate.invoices') }}</span>

            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.invoices') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}
            </a>




            <a class="w-full block py-3 pl-10  text-sm  transition-all duration-700 px-3  {{ request()->routeIs('add.invoice') ? 'bg-white text-black rounded-tl-full rounded-bl-full' : ' text-white' }}"
                href="{{ route('add.invoice') }}">{{ __('translate.add-invoice') }}</a>

        </div>





        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>
                {{ __('translate.sales') }}</span>

            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.sales.details') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.sales.details') }}">{{ __('translate.sales') }}
            </a>

        </div>


        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i
                    class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.staff') }}</span>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.staff.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.staff.page') }}">{{ __('translate.show-staff') }}
            </a>

            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('add.staff.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('add.staff.page') }}">{{ __('translate.add-staff') }}
            </a>


        </div>


        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i
                    class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.clients') }}</span>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.clients.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.clients.page') }}">{{ __('translate.show-clients') }}
            </a>

        </div>






        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i
                    class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.branches') }}</span>


            <ul class="nav nav-collapse">
                {{-- @foreach ($branches as $branch)
                    <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
                {{ request()->routeIs('show.branch.invoices', $branch->id) ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                        href="{{ route('show.branch.invoices', $branch->id) }}">{{ $branch->name }}
                    </a>
                @endforeach --}}


                @foreach ($branches as $branch)
                    <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.branch.invoices') && request()->route('branch') == $branch->id
                ? 'bg-white text-black rounded-tl-full rounded-bl-full'
                : 'text-white' }}"
                        href="{{ route('show.branch.invoices', $branch->id) }}">
                        {{ $branch->name }}
                    </a>
                @endforeach


            </ul>
        </div>



        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i
                    class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.purchases') }}</span>




            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
                    {{ request()->routeIs('show.purcheases.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.purcheases.page') }}">{{ __('translate.show-purchases') }}
            </a>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
                    {{ request()->routeIs('add.purcheases.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('add.purcheases.page') }}">{{ __('translate.add-purchases') }}
            </a>




        </div>


        <div class="py-2 my-2">
            <span class="text-white block mb-2"><i
                    class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.checks') }}</span>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
                    {{ request()->routeIs('show.checks.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.checks.page') }}">{{ __('translate.checks') }}
            </a>
        </div>



    </ul>


</div>
