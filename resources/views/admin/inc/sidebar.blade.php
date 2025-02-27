<div class="">

     <img src="{{ asset('/uploads/setting/' . $setting->logo . '') }}" alt="{{ $setting->namear }}" class="w-20 h-20 m-auto" />



    <ul class="mt-1 ">
        <div class="py-2 ">
            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.invoices') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}
            </a>




            <a class="w-full block py-3 pl-10  text-sm  transition-all duration-700 px-3  {{ request()->routeIs('add.invoice') ? 'bg-white text-black rounded-tl-full rounded-bl-full' : ' text-white' }}"
                href="{{ route('add.invoice') }}">{{ __('translate.add-invoice') }}</a>



            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
                {{ request()->routeIs('show.sales.details') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.sales.details') }}">{{ __('translate.sales') }}
            </a>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.staff.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.staff.page') }}">{{ __('translate.show-staff') }}
            </a>

            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('add.staff.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('add.staff.page') }}">{{ __('translate.add-staff') }}
            </a>



            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.clients.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.clients.page') }}">{{ __('translate.show-clients') }}
            </a>




            @foreach ($branches as $branch)
                <a class="w-full block py-3 pl-10 my-1 text-sm transition-all duration-700 px-3  
                {{ request()->routeIs('show.branch.invoices', $branch->id) ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                    href="{{ route('show.branch.invoices', $branch->id) }}">{{ $branch->name }}
                </a>
            @endforeach




            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.purcheases.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.purcheases.page') }}">{{ __('translate.show-purchases') }}
            </a>


            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('add.purcheases.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('add.purcheases.page') }}">{{ __('translate.add-purchases') }}
            </a>




            <a class="w-full block py-3 pl-10  text-sm transition-all duration-700 px-3  
            {{ request()->routeIs('show.checks.page') ? 'bg-white text-black rounded-tl-full rounded-bl-full ' : 'text-white' }}"
                href="{{ route('show.checks.page') }}">{{ __('translate.checks') }}
            </a>


        </div>
    </ul>
</div>
