
<div class="fixed w-0 lg:w-64 h-screen sidebar bg-fuchsia-950">


    <ul class="mt-10 ">
        <div class="py-3 mx-1 my-3">
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i> {{ __('translate.invoices') }}</span>
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}</a></li>
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('add.invoice') }}">{{ __('translate.add-invoice') }}</a></li>
        </div>
        

        <div class="py-3 mx-1 my-3">
           
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.staff') }}</span>
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.staff.page') }}">{{ __('translate.show-staff') }}</a></li>
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('add.staff.page') }}">{{ __('translate.add-staff') }}</a></li>
        </div>


        <div class="py-3 mx-1 my-3">
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.clients') }}</span>
           
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.clients.page') }}">{{ __('translate.show-clients') }}</a></li>
            
        </div>


        <div class="py-3 mx-1 my-3">
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.branches') }}</span>
           
            
            <ul class="nav nav-collapse">
                @foreach ($branches as $branch)
                
                <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.branch.invoices', $branch->id) }}">{{ $branch->name }}</a></li>
                @endforeach
                
                
            </ul>
        </div>



        <div class="py-3 mx-1 my-3">
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.purchases') }}</span>
          
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.purcheases.page') }}">{{ __('translate.show-purchases') }}</a></li>
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('add.purcheases.page') }}">{{ __('translate.add-purchases') }}</a></li>
            
        </div>


        <div class="py-3 mx-1 my-3">
            <span class="text-white"><i class="fa-regular fa-circle-dot mx-3 text-xs"></i>{{ __('translate.checks') }}</span>
     
            <li class="text-white text-sm py-3 hover:bg-orange-600 px-2 pl-10"><a class="w-full block" href="{{ route('show.checks.page') }}">{{__('translate.checks')}}</a></li>
            
            
        </div>



    </ul>


</div>



